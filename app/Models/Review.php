<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //With User Model (M:1)
    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //With Product Model (M:1)
    public function product() 
    {
        return $this->belongsTo(Product::class);
    }
}
