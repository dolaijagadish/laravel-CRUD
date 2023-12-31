<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i<=5; $i++){
        Products::create([
            'name' => 'Product'.$i,
            'price' => 34,
            'description' => 'This is product description',
            'added_by'=>'Admin',
        ]);
    }
    }
}
