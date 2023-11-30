<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'merk' => 'Toyota Avanza',
            'model' => 'Deluxe',
            'color' => 'black',
            'no_plat' => 'B 1234 ABC',
            'fee_day' => 100000,
            'picture' => 'avanza.png',
            'status' => 'Available'
        ]);
    }
}
