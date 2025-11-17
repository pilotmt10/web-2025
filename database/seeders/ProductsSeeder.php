<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        for ($index = 0; $index < 10; $index++) {
            Product::create([
                'name' => fake()->sentence(1),
                'price' => fake()->numberBetween(1000, 3000)
            ]);
        }
    }
}
