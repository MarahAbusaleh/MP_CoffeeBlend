<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discount';

    protected $fillable = [
        'discount_code',
        'discount_per'
    ];

    //With Order Model (1:M)
    public function orders() 
    {
        return $this->hasMany(Order::class);
    }
}
