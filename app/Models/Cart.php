<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    //With User Model (M:1)
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    //With Product Model (M:1)
    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    //With Menu Model (M:1)
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    //With Order Model (1:M)
    public function order() 
    {
        return $this->hasOne(Order::class);
    }
}
