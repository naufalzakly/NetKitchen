<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Fried Chiken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'price' => 10000,
                'category' => 'breakfast',
            ],
            [
                'name' => 'Fried Chiken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'price' => 10000,
                'category' => 'breakfast',
            ],
            [
                'name' => 'Fried Chiken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'price' => 10000,
                'category' => 'breakfast',
            ],
            [
                'name' => 'Fried Chiken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'price' => 10000,
                'category' => 'breakfast',
            ],
            [
                'name' => 'Fried Chiken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'price' => 10000,
                'category' => 'breakfast',
            ],
            [
                'name' => 'Fried Chiken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'price' => 10000,
                'category' => 'breakfast',
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create([
                'name' => $value['name'],
                'description' => $value['description'],
                'price' => $value['price'],
                'category' => $value['category'],
            ]);
        }
    }
}
