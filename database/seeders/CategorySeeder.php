<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Gorras'
        ]);

        Category::create([
            'name' => 'Playeras'
        ]);

        Category::create([
            'name' => 'Pantalones'
        ]);

        Category::create([
            'name' => 'Accesorios'
        ]);

        Category::create([
            'name' => 'Zapatos'
        ]);
    }
}
