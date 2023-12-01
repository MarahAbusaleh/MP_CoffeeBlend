<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{

    public function run()
    {
        DB::table('discount')->insert([
            [
                'discount_code' => 'Orange10',
                'discount_per' => '0.1'
            ],
        ]);
    }
}
