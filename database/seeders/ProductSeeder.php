<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Elit reperendheit eu nostrud et.',
            'Price' => 19.03,
            'quantity' => 3,
            'category' => 1,
            'brand_id' => 1,
            'description' => 'Lorem ipsum dolor silit amet ocaecat cupidatat consequat eu euismod sint commodo aute. Fugiat commodo amet do dolore. Ulamco ullamce elit reperendheit nostrud et.'
        ]);
    }
}
