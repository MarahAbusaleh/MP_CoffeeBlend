<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    //With User Model (M:1)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    //With OrderItem Model (1:M)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    //With Discount Model (M:1)
    public function discount() 
    {
        return $this->belongsTo(Discount::class);
    }

    //With Cart Model (1:1)
    public function cart() 
    {
        return $this->belongsTo(Cart::class);
    }
}
