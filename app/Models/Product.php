<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

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
     * $this->attributes['recipes'] - string - list of recipes with product
     * $this->attributes['created_at'] contains the time of creation
     * $this->attributes['updated_at'] contains the time of aactualization
     * $this->reviews - Review[] - contains the associated reviews
     */
    protected $fillable = ['name',  'description', 'stock', 'price', 'images', 'recipes'];

    public static function validate(Request $request):void
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'stock' => 'required|numeric|gt:0',
                'price' => 'required|numeric|gt:0',
                'images' => 'required',
                'recipes' => 'required',
            ]
        );
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription($description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getStock(): int
    {
        return $this->attributes['stock'];
    }

    public function setStock($stock): void
    {
        $this->attributes['stock'] = $stock;
    }

    public function getPrice(): float
    {
        return $this->attributes['price'];
    }

    public function setPrice($price): void
    {
        $this->attributes['price'] = $price;
    }

    public function getImages(): string
    {
        return $this->attributes['images'];
    }

    public function setImages($images): void
    {
        $this->attributes['images'] = $images;
    }

    public function getRecipes(): string
    {
        return $this->attributes['recipes'];
    }

    public function setRecipes($recipes): void
    {
        $this->attributes['recipes'] = $recipes;
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

    public function getCreated_at():string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdated_at():string
    {
        return $this->attributes['updated_at'];
    }
}
