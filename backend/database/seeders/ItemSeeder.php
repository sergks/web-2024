<?php

namespace Database\Seeders;

use App\Models\Item;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 20; $i++) {
            Item::create([
                'name' => 'Товар ' . $i,
                'price' => $faker->numberBetween(10000, 50000)
            ]);
        }
    }
}
