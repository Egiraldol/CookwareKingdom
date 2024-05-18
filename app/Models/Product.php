<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    /**
     * REVIEW ATTRIBUTES
     * $this->attributes['id'] - int - contains the plant primary key (id)
     * $this->attributes['name'] - string - contains the name
     * $this->attributes['description'] - text - contains the text review
     * $this->attributes['stock'] - int - contains the stock quantity of this product
     * $this->attributes['price'] - decimal - contains the product price max 8 numbers +
     * $this->attributes['images'] - string - Product Image
     * $this->attributes['created_at'] contains the time of creation
     * $this->attributes['updated_at'] contains the time of aactualization
     * $this->reviews - Review[] - contains the associated reviews
     * $this->orderItems - OrderItem[] - contains the associated orderItems
     * $this->recipe - Recipe[] - contains the associated recipes
     */
    protected $fillable = ['name',  'description', 'stock', 'price', 'images'];

    public static function validate(Request $request): void
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'stock' => 'required|numeric|gt:0',
                'price' => 'required|numeric|gt:0',
                'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
    }
    
    public function getImageUrlAttribute(): ?string
    {
        return $this->images ? Storage::url($this->images) : null;
    }

    public static function ordenProductosFiltro(string $orderBy){
        $viewData = [];

        if ($orderBy === 'newest') {
            $viewData['products'] = self::orderBy('created_at', 'desc')->get();
        } elseif ($orderBy === 'highest_review') {
            $viewData['products'] = self::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
                ->selectRaw('products.*, COALESCE(AVG(reviews.rating), 0) AS average_rating')
                ->groupBy('products.id', 'products.name', 'products.description', 'products.stock', 'products.price', 'products.images', 'products.created_at', 'products.updated_at')
                ->orderByDesc('average_rating')
                ->get();

        } elseif ($orderBy === 'most_purchased') {
            $viewData['products'] = self::select('products.*')
                ->selectRaw('SUM(order_items.quantity) as total_quantity')
                ->join('order_items', 'products.id', '=', 'order_items.product_id')
                ->groupBy('products.id', 'products.name', 'products.description', 'products.stock', 'products.price', 'products.images', 'products.created_at', 'products.updated_at')
                ->orderByDesc('total_quantity')
                ->get();
        } else {
            $viewData['products'] = self::all();
        }

        return $viewData['products'];
    }



    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getStock(): int
    {
        return $this->attributes['stock'];
    }

    public function setStock(int $stock): void
    {
        $this->attributes['stock'] = $stock;
    }

    public function getPrice(): float
    {
        return $this->attributes['price'];
    }

    public function setPrice(int $price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getImages(): string
    {
        return $this->attributes['images'];
    }

    public function setImages(string $images): void
    {
        $this->attributes['images'] = $images;
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function setReviews(Collection $reviews): void
    {
        $this->reviews = $reviews;
    }

    public function recipes(): BelongsToMany
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function getRecipes(): Collection
    {
        return $this->recipes;
    }

    public function setRecipes(Collection $recipes): void
    {
        $this->recipes = $recipes;
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function setOrderItems(Collection $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    public function getCreated_at(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdated_at(): string
    {
        return $this->attributes['updated_at'];
    }

    public static function sumPricesByQuantities($products, $productsInSession): int
    {
        $total = 0;
        foreach ($products as $product) {
            $total = $total + ($product->getPrice() * $productsInSession[$product->getId()]);
        }

        return $total;
    }
}
