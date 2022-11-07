<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16 Gb, 512 GB SSD',
                'description' => 'MacBook Pro yang paling andal kini hadir. Dengan chip M1 Pro atau M1 Max yang luar biasa cepat — Apple silicon pertama dirancang untuk profesional — agar Anda mendapatkan performa terobosan dan kekuatan baterai yang mengagumkan. Ditambah layar Liquid Retina XDR yang memukau, kamera dan audio terbaik yang pernah ada di laptop Mac, dan semua port yang Anda butuhkan. Sebagai laptop profesional pertama di kelasnya, MacBook Pro begitu luar biasa bertenaga.',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 24,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book Pro',
                'details' => '13.3 inch, 8GB, DDR4, SDRAM, 256GB',
                'description' => 'PC power thats smartphone thin. Our lightest Galaxy Book yet gives you a powerful Intel® 11th Gen Core™ processor, Intel® Evo™ certification, an advanced AMOLED screen and comes equipped with our latest wi-fi chip. Finish important projects, download huge files fast or watch movies in brilliant color. Discover the perfect mix of portability and productivity.',
                'brand' => 'Samsung',
                'price' => 1400,
                'shipping_cost' => 25,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
