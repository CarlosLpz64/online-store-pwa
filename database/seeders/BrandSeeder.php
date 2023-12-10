<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        #1
        Brand::create([
            'name' => 'Morat Merch',
            'description' => 'Mercancía oficial de Morat',
            'logo_path' => 'https://pbs.twimg.com/profile_images/1634313744279908358/-HkagtIt_400x400.jpg',
        ]);

        #2
        Brand::create([
            'name' => 'Nike',
            'description' => 'Ropa para deportes',
            'logo_path' => 'https://thumbs.dreamstime.com/b/fondo-negro-vectorial-del-logotipo-de-nike-marca-para-uso-impreso-ropa-deportiva-y-fitness-183282388.jpg',
        ]);

        #3
        Brand::create([
            'name' => 'Gucci',
            'description' => 'Ropa elegante',
            'logo_path' => 'https://static.vecteezy.com/system/resources/previews/020/336/465/non_2x/gucci-logo-gucci-icon-free-free-vector.jpg',
        ]);

        #4
        Brand::create([
            'name' => 'Supreme',
            'description' => 'Ropa a la moda',
            'logo_path' => 'https://i.pinimg.com/736x/00/5b/fd/005bfd8f692fd971c3bf0097931f2e85.jpg',
        ]);

        #5
        Brand::create([
            'name' => 'Levis',
            'description' => 'Pantalones de calidad',
            'logo_path' => 'https://brandlogos.net/wp-content/uploads/2013/03/levis-vector-logo-400x400.png',
        ]);
    }
}
