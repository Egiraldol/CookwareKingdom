<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Recipe extends Model
{
    use HasFactory;

    /**
     * RECIPE ATTRIBUTES
     * $this->attributes['id'] - int - contains the recipe primary key (id)
     * $this->attributes['name'] - string - contains the recipe name
     * $this->attributes['description'] - string - contains the recipe description
     * $this->attributes['instructions'] - string - contains the recipe instructions
     * $this->attributes['ingredients'] - string - contains the recipe ingredients
     * $this->attributes['created_at'] contains the time of creation
     * $this->attributes['updated_at'] contains the time of aactualization
     */
    protected $fillable = ['name', 'description', 'instructions', 'ingredients'];

    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'description' => 'required',
        ]);
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

    public function getInstructions(): string
    {
        return $this->attributes['instructions'];
    }

    public function setInstructions(string $instructions): void
    {
        $this->attributes['instructions'] = $instructions;
    }

    public function getIngredients(): string
    {
        return $this->attributes['ingredients'];
    }

    public function setIngredients(string $ingredients): void
    {
        $this->attributes['ingredients'] = $ingredients;
    }

    public function getCreated_at()
    {
        return $this->attributes['created_at'];
    }

    public function getUpdated_at()
    {
        return $this->attributes['updated_at'];
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function setProducts(Collection $products): void
    {
        $this->products = $products;
    }

}
