<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{

    public function run()
    {
        DB::table('reviews')->insert([
            [
                'comment' => 'Absolutely love this product! It exceeded my expectations.Absolutely love this product! It exceeded my expectations.',
                'rating' => '4',
                'user_id' => '14',
                'product_id' => '10'
            ],
            [
                'comment' => 'A solid product with great .',
                'rating' => '3',
                'user_id' => '15',
                'product_id' => '10'
            ],
            [
                'comment' => 'Five stars! This product is a game-changer for me.',
                'rating' => '5',
                'user_id' => '16',
                'product_id' => '10'
            ],
            [
                'comment' => 'Impressed by the quality and functionality of this product.Impressed by the quality and functionality of this product.',
                'rating' => '4',
                'user_id' => '17',
                'product_id' => '10'
            ],
            [
                'comment' => 'Absolutely love this product! It exceeded my expectations.Absolutely love this product! It exceeded my expectations.',
                'rating' => '4',
                'user_id' => '14',
                'product_id' => '16'
            ],
            [
                'comment' => 'A solid product with great .',
                'rating' => '3',
                'user_id' => '15',
                'product_id' => '16'
            ],
            [
                'comment' => 'Five stars! This product is a game-changer for me.',
                'rating' => '5',
                'user_id' => '16',
                'product_id' => '16'
            ],
            [
                'comment' => 'Impressed by the quality and functionality of this product.Impressed by the quality and functionality of this product.',
                'rating' => '4',
                'user_id' => '17',
                'product_id' => '16'
            ],
            [
                'comment' => 'Absolutely love this product! It exceeded my expectations.Absolutely love this product! It exceeded my expectations.',
                'rating' => '4',
                'user_id' => '14',
                'product_id' => '7'
            ],
            [
                'comment' => 'A solid product with great .',
                'rating' => '3',
                'user_id' => '15',
                'product_id' => '7'
            ],
            [
                'comment' => 'Five stars! This product is a game-changer for me.',
                'rating' => '5',
                'user_id' => '16',
                'product_id' => '7'
            ],
            [
                'comment' => 'Impressed by the quality and functionality of this product.Impressed by the quality and functionality of this product.',
                'rating' => '4',
                'user_id' => '17',
                'product_id' => '7'
            ],
        ]);
    }
}
