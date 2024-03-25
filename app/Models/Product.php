<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
     */

    protected $fillable = ['name',  'description', 'stock', 'price','images','recipes'];

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
}