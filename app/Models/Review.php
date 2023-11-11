<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = [
        'comment',
        'rating',
        'user_id',
        'product_id'
    ];

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

    public function getRatingStarsAttribute()
    {
        $rating = $this->rating;
        $stars = '';

        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                $stars .= '<i class="fas fa-star"></i>';
            } else {
                $stars .= '<i class="far fa-star" style="color:gray;"></i>';
            }
        }

        return $stars;
    }
}
