<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'quantity',
        'price',
        'order_id',
        'product_id',
        'menu_id'
    ];

    //With Product Model (M:1)
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    //With Menu Model (M:1)
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    //With Order Model (M:1)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
