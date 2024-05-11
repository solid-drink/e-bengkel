<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([
            'name' => 'Dell',
            'slug' => 'Dell',
        ]);
        Brand::create([
            'name' => 'Samsung',
            'slug' => 'Dell',
        ]);
        Brand::create([
            'name' => 'Apple',
            'slug' => 'Dell',
        ]);
    }
}
