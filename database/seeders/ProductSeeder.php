<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->insert([
            // COFFEE BEANS Category
            [
                'name' => 'Dark Coffee',
                'description' => 'Indulge in the rich and robust experience of our DARK COFFEE blend at CoffeeBlen. Savor the intense and full-bodied flavor profile, crafted from premium Arabica beans carefully roasted to perfection. This bold blend offers a satisfyingly deep and aromatic cup, with notes of dark chocolate and a hint of smokiness. Elevate your coffee ritual with our DARK COFFEE, designed for those who appreciate a strong and invigorating brew. Immerse yourself in the velvety texture and irresistible complexity that defines this exceptional blend.',
                'image' => 'images/Dark_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Brown Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Brown_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Dark Brown Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Dark_Brown_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Light Brown Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Light_Brown_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Green Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Green_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            [
                'name' => 'Our Special Mix Coffee',
                'description' => 'Experience the pure and intense essence of turkish coffee',
                'image' => 'images/Our_Special_Mix_Coffee.png',
                'price' => '4',
                'category_id' => '1'
            ],
            // MACHINES Category
            [
                'name' => 'American Coffee Machine',
                'description' => '"Introducing our American Coffee Machine at CoffeeBlen – the perfect addition to your home or office! Craft your favorite brew effortlessly with this sleek and user-friendly appliance. Designed for simplicity and speed, our machine ensures a rich and aromatic cup of American coffee with just the touch of a button. Experience the joy of freshly brewed coffee in the comfort of your space. With advanced features and a modern design, our American Coffee Machine elevates your coffee experience, making every sip a delightful moment. Elevate your mornings with CoffeeBlen – where convenience meets exceptional flavor!"',
                'image' => 'images/m1.png',
                'price' => '35',
                'category_id' => '2'
            ],
            [
                'name' => 'Turkish Coffee Machine',
                'description' => 'Experience the fusion of modern convenience and authentic taste Automatic Turkish Coffee Maker, crafting 5 cups of rich delight in Black/Copper.',
                'image' => 'images/m2.png',
                'price' => '50',
                'category_id' => '2'
            ],
            [
                'name' => 'Coffee Espresso and Cappuccino Machine',
                'description' => 'Indulge in barista-quality espressos and cappuccinos with the Mr. Coffee Espresso and Cappuccino Machine.',
                'image' => 'images/m3.png',
                'price' => '90',
                'category_id' => '2'
            ],
            // CUPS & MUGS Category
            [
                'name' => 'Earthen Pottery Mug',
                'description' => 'Experience the rustic charm of our Earthen Pottery Mug at CoffeeBlen. Handcrafted with care, each mug showcases a unique blend of earthy tones and textures, adding warmth to your coffee ritual. The sturdy, ergonomic design ensures a comfortable grip, enhancing your sipping pleasure. Elevate your coffee experience with this artisanal piece, perfect for enjoying your favorite blends. Crafted from natural materials, our Earthen Pottery Mug embodies sustainability and style, making it an eco-friendly choice for your daily brew. Bring a touch of nature to your coffee moments with this timeless, one-of-a-kind pottery mug.',
                'image' => 'images/cup1.jpeg',
                'price' => '6',
                'category_id' => '3'
            ],
            [
                'name' => 'Marble Mug',
                'description' => 'Elevate your sipping experience with the elegance of a Marble Cup.',
                'image' => 'images/cup2.jpeg',
                'price' => '6',
                'category_id' => '3'
            ],
            [
                'name' => 'Blue Ceramic Cup and Saucer',
                'description' => 'Experience elegance in every sip with our exquisite ceramic cup and saucer set.',
                'image' => 'images/cup3.jpeg',
                'price' => '8',
                'category_id' => '3'
            ],
            [
                'name' => 'Candle Mug',
                'description' => 'Infuse warmth and ambiance into your surroundings with our captivating candle.',
                'image' => 'images/cup4.jpeg',
                'price' => '6',
                'category_id' => '3'
            ],
            [
                'name' => 'Rotary Mug',
                'description' => 'Discover innovation in motion with our rotary cup, designed in modern style.',
                'image' => 'images/cup5.jpeg',
                'price' => '7',
                'category_id' => '3'
            ],
            // [
            //     'name' => 'Beige Ceramic Cup and Saucer',
            //     'description' => 'Crafted with exquisite attention to detail, our ceramic cup seamlessly combines.',
            //     'image' => 'images/cup6.jpeg',
            //     'price' => '8',
            //     'category_id' => '3'
            // ],
            // EQUIPMENT Category
            [
                'name' => 'Storage Drawer Holder for Capsules',
                'description' => 'Introducing our sleek Storage Drawer Holder for Capsules – the perfect blend of style and functionality for coffee enthusiasts. Elevate your coffee experience with this space-saving solution, designed to neatly organize and display your favorite coffee capsules. Crafted with premium materials, this drawer exudes modern elegance, seamlessly fitting into any kitchen decor. With its user-friendly design, accessing your capsules has never been more convenient.',
                'image' => 'images/eqq1.png',
                'price' => '15',
                'category_id' => '4'
            ],
            [
                'name' => 'Black Espresso Steaming Pitcher',
                'description' => 'Achieve barista-level perfection with the Apexstone 20 oz Black Espresso Steaming Pitcher, designed for expert milk frothing and frothing.',
                'image' => 'images/eqq.png',
                'price' => '8',
                'category_id' => '4'
            ],
            [
                'name' => 'Disposable Coffee Paper',
                'description' => 'Simplify your brewing routine with Disposable Coffee Paper Filters, ensuring a smooth and mess-free coffee experience every time.',
                'image' => 'images/eqq3.png',
                'price' => '5',
                'category_id' => '4'
            ],
            [
                'name' => 'Coffee Capsule',
                'description' => 'Indulge in the rich harmony of flavors with Nescafé Dolce Gusto Cortado Espresso Macchiato Coffee Capsules, a fusion of espresso.',
                'image' => 'images/eqq4.png',
                'price' => '20',
                'category_id' => '4'
            ],
            [
                'name' => 'Coffee Mat',
                'description' => 'Elevate your coffee setup and keep your space tidy with a Coffee Mat, designed to add functionality and style to your brewing station.',
                'image' => 'images/eqq5.png',
                'price' => '8',
                'category_id' => '4'
            ],


        ]);
    }
}
