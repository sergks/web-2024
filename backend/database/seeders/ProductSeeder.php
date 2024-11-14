<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Товар ' . $i,
                'price' => $faker->numberBetween(10000, 50000)
            ]);
        }
    }
}
