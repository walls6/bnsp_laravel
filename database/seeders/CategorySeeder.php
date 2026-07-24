<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Elektronik', 'description' => 'Barang elektronik']);
        Category::create(['name' => 'Peralatan Kantor', 'description' => 'Peralatan pendukung kantor']);
        Category::create(['name' => 'Aset Tetap', 'description' => 'Barang aset perusahaan']);
    }
}
