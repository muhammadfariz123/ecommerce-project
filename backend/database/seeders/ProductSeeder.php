<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Kaos Keren',
            'description' => 'Kaos kualitas premium',
            'price' => 50000,
            'stock' => 100,
            'image' => 'kaos.jpg',
        ]);

        Product::create([
            'name' => 'Jaket Stylish',
            'description' => 'Jaket cocok untuk semua cuaca',
            'price' => 200000,
            'stock' => 50,
            'image' => 'jaket.jpg',
        ]);
    }
}
