<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // php artisan migrate:refresh --seed
    // php artisan db:seed --class=DatabaseSeeder
    // php artisan serve --host 0.0.0.0 --port 8000
    public function run(): void
    {
        $this->call([
            CategorySeeder::class
        ]);
    }
}
