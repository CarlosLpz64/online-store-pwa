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
        # 1
        Category::create([
            'name' => 'Gorras'
        ]);

        #2
        Category::create([
            'name' => 'Playeras'
        ]);

        #3
        Category::create([
            'name' => 'Pantalones'
        ]);

        #4
        Category::create([
            'name' => 'Accesorios'
        ]);

        #5
        Category::create([
            'name' => 'Zapatos'
        ]);
    }
}
