<?php

namespace Database\Seeders;

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
        \App\Models\Product::factory()->create([
            'name' => 'TV',
            'quantity' => 5,
            'price' => "200",
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Xbox',
            'quantity' => 15,
            'price' => "300",
        ]);

        \App\Models\Product::factory()->create([
            'name' => 'Car',
            'quantity' => 40,
            'price' => "100000",
        ]);
    }
}
