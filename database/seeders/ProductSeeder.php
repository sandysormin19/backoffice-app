<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'name' => "Cimory: Fresh Milk",
            'description' => "Susu segar, mantap, sehat",
            'category' => "Protein",
            'price' => "150000",
            'stock' => "999",
            'image_url' => "",
        ]);
    }
}
