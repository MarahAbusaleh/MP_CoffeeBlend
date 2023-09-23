<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    
    protected $fillable = [
        'name',
        'image1',
        'image2',
        'image3'
    ];

    //With Product Model
    public function products() 
    {
        return $this->hasMany(Product::class);
    }
}
