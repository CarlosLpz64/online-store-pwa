<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
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
        #1
        Product::create([
            'name' => 'Gorra Morat',
            'description' => 'Gorra color negro de Morat.',
            'image_path' => 'https://http2.mlstatic.com/D_NQ_NP_774632-MLM70351426168_072023-O.webp',
            'stock' => 5,
            'price' => 200,
            'brand_id' => 1,
            'category_id' => 1
        ]);

        #2
        Product::create([
            'name' => 'Tennis Air Force',
            'description' => 'Tenis Casual Nike Air Force 1 High de Hombre',
            'image_path' => 'https://www.innvictus.com/medias/IN-FB2049-001-1.jpg?context=bWFzdGVyfGltYWdlc3wzMDk4OHxpbWFnZS9qcGVnfGltYWdlcy9oNGYvaGQ3LzExNzYzOTUwOTQ0Mjg2LmpwZ3xkZTI5ZmZiZWVlMzUzMDljY2ZiMDI4ZjE3OGVhMGY5Y2U2ZGM0Njg5MmEyN2Y4OTFkNGM3ZmRiZWE1MzRjNGIw',
            'stock' => 8,
            'price' => 500,
            'brand_id' => 2,
            'category_id' => 5
        ]);

        #3
        Product::create([
            'name' => 'Tennis Court Vision',
            'description' => 'Tenis casual Nike Court Vision Alta de mujer',
            'image_path' => 'https://cdn.idealo.com/folder/Product/202971/9/202971938/s11_produktbild_max_9/.jpg',
            'stock' => 12,
            'price' => 350,
            'brand_id' => 2,
            'category_id' => 5
        ]);

        #4
        Product::create([
            'name' => 'Ophidia GG',
            'description' => 'Bolsa para el hombro Ophidia GG',
            'image_path' => 'https://image.goxip.com/_2M44Q4t57hV7Eo0wTyEW4c0cPo=/fit-in/500x500/filters:format(jpg):quality(80):fill(white)/https:%2F%2Fimg.ssensemedia.com%2Fimages%2F221451F048058_1%2Fbeige-small-ophidia-gg-shoulder-bag.jpg',
            'stock' => 3,
            'price' => 33000,
            'brand_id' => 3,
            'category_id' => 4
        ]);

        #5
        Product::create([
            'name' => 'Hoodie Supreme',
            'description' => 'LOUIS VUITTON x SUPREME BOX LOGO HOODIE RED SS17',
            'image_path' => 'https://stayfresh.ca/cdn/shop/products/LOUIS_VUITTON_X_SUPREME_BOX_LOGO_HOODIE_600x.jpg?v=1571277953',
            'stock' => 8,
            'price' => 12000,
            'brand_id' => 4,
            'category_id' => 2
        ]);

        #6
        Product::create([
            'name' => 'Pantalón Mezclilla',
            'description' => 'Pantalón Levis de Mezclilla Talla 32',
            'image_path' => 'https://babyco.mx/cdn/shop/products/PhotoRoom_075_20220511_134859_2000x.png?v=1652305965',
            'stock' => 30,
            'price' => 800,
            'brand_id' => 5,
            'category_id' => 3
        ]);

        #7
        Product::create([
            'name' => 'Tennis Colorful',
            'description' => 'Nike Colorful Marshmallow',
            'image_path' => 'https://www.mimanerashop.com/images/1.1200x1200.5583.webp',
            'stock' => 15,
            'price' => 1300,
            'brand_id' => 2,
            'category_id' => 5
        ]);

        #8
        Product::create([
            'name' => 'Playera deportiva Nike',
            'description' => 'Playera Nike Dri-Fit Talla 25',
            'image_path' => 'https://www.mundodeportivo.com.mx/cdn/shop/products/1_4d2769e6-24cb-4af8-a501-2f7bd784c7d3_2048x.jpg?v=1662745020',
            'stock' => 50,
            'price' => 700,
            'brand_id' => 2,
            'category_id' => 2
        ]);

        #9
        Product::create([
            'name' => 'Hoddie Seventeen',
            'description' => 'Hoddie Blanco Seventeen Talla 28',
            'image_path' => 'https://www.kpopiashop.com/media/catalog/product/cache/c8d47fa6f50dbeb94385d5c00e4ec487/h/o/hood-seventeen8.jpg',
            'stock' => 17,
            'price' => 1300,
            'brand_id' => 6,
            'category_id' => 2
        ]);
    }
}
