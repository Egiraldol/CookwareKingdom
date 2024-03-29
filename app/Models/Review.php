<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * REVIEW ATTRIBUTES
     * $this->attributes['id'] - int - contains the plant primary key (id)
     * $this->attributes['name'] - string - contains the name of the OP
     * $this->attributes['title'] - string - contains the title of the review
     * $this->attributes['description'] - text - contains the text review
     * $this->attributes['rating'] - int - contains the rating given in the review
     * $this->attributes['created_at'] contains the time of creation
     * $this->attributes['updated_at'] contains the time of aactualization
     */
    protected $fillable = ['name', 'title', 'description', 'rating'];

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

    public function getTitle(): string
    {
        return $this->attributes['title'];
    }

    public function setTitle(string $title): void
    {
        $this->attributes['title'] = $title;
    }

    public function getDescription(): string
    {
        return $this->attributes['description'];
    }

    public function setDescription(string $description): void
    {
        $this->attributes['description'] = $description;
    }

    public function getRating(): string
    {
        return $this->attributes['rating'];
    }

    public function setRating(string $rating): void
    {
        $this->attributes['rating'] = $rating;
    }

    public function getCreated_at()
    {
        return $this->attributes['created_at'];
    }

    public function getUpdated_at()
    {
        return $this->attributes['updated_at'];
    }
}
