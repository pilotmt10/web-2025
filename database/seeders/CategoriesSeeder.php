<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Телефоны']);
        Category::create(['name' => 'Планшеты']);
        Category::create(['name' => 'Компьютеры']);
    }
}
