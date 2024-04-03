<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Item;

class Order extends Model
{
    /**
        * ORDER ATTRIBUTES
        * $this->attributes['id'] - int - contains the order primary key (id)
        * $this->attributes['total'] - int - contains the order total
        * $this->attributes['user_id'] - int - contains the referenced user id
       * $this->attributes['created_at'] - timestamp - contains the order creation date
        * $this->attributes['updated_at'] - timestamp - contains the order update date
        * $this->user - User - contains the associated User
        * $this->orderItems - OrderItem[] - contains the associated items
        */

        
    public static function validate($request): void
    {
        $request->validate([
            "total" => "required|numeric",
            "user_id" => "required|exists:users,id",
        ]);
    }

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getTotal(): int
    {
        return $this->attributes['total'];
    }

    public function setTotal(int $total): void
    {
        $this->attributes['total'] = $total;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getUserId(): int
    {
        return $this->attributes['user_id'];
    }

    public function setUserId(int $uId): void
    {
        $this->attributes['user_id'] = $uId;
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }
    
    public function setItems(Collection $orderItems): void
    {
        $this->orderItems = $orderItems;
    }
}
