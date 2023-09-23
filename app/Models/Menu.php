<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = "menus";

    //With OrderItem Model (1:M)
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    //With Cart Model (1:M)
    public function cart() 
    {
        return $this->hasMany(Cart::class);
    }
}
