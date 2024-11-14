<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Компьютеры']);
        Category::create(['name' => 'Телефоны']);
        Category::create(['name' => 'Бытовая техника']);
    }
}
