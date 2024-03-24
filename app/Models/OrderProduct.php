<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    /**
     * REVIEW ATTRIBUTES
     * $this->attributes['id'] - int - contains the plant primary key (id)
     * $this->attributes['quantity'] - int - contains quantity
     * $this->attributes['total'] - int - contains the total
     * $this->attributes['created_at'] contains the time of creation
     * $this->attributes['updated_at'] contains the time of aactualization
     */

     protected $fillable = ['quantity', 'total'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getQuantity(): int
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity): void
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getTotal(): int
    {
        return $this->attributes['total'];
    }

    public function setTotal($total): void
    {
        $this->attributes['total'] = $total;
    }

}
