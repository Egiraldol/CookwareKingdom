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
     * $this->attributes['recipes'] - json - list of recipes with product
     * $this->attributes['created_at'] contains the time of creation
     * $this->attributes['updated_at'] contains the time of aactualization
     */

    protected $fillable = ['name',  'description', 'stock', 'price','images','recipes'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    // Getter para el nombre
    public function getName(): string
    {
        return $this->attributes['name'];
    }

    // Setter para el nombre
    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    // Getter para la descripción
    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    // Setter para la descripción
    public function setDescription($description): void
    {
        $this->attributes['description'] = $description;
    }

    // Getter para el stock
    public function getStock(): int
    {
        return $this->attributes['stock'];
    }

    // Setter para el stock
    public function setStock($stock): void
    {
        $this->attributes['stock'] = $stock;
    }

    // Getter para el precio
    public function getPrice(): float
    {
        return $this->attributes['price'];
    }

    // Setter para el precio
    public function setPrice($price): void
    {
        $this->attributes['price'] = $price;
    }

    // Getter para las imágenes
    public function getImages(): string
    {
        return $this->attributes['images'];
    }

    // Setter para las imágenes
    public function setImages($images): void
    {
        $this->attributes['images'] = $images;
    }

    // Getter para las recetas
    public function getRecipes(): array
    {
        return json_decode($this->attributes['recipes'], true);
    }

    // Setter para las recetas
    public function setRecipes($recipes): void
    {
        $this->attributes['recipes'] = json_encode($recipes);
    }
}
