<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        Item::create([
            'category_id' => 1,
            'code' => 'EL-001',
            'name' => 'Laptop Lenovo',
            'stock' => 8,
            'condition' => 'Baik',
            'location' => 'Ruang IT',
            'entry_date' => '2026-01-10',
            'description' => 'Laptop untuk operasional kerja',
        ]);

        Item::create([
            'category_id' => 2,
            'code' => 'PK-001',
            'name' => 'Printer HP',
            'stock' => 3,
            'condition' => 'Rusak Ringan',
            'location' => 'Ruang Administrasi',
            'entry_date' => '2026-02-15',
            'description' => 'Printer untuk dokumen',
        ]);

        Item::create([
            'category_id' => 3,
            'code' => 'AT-001',
            'name' => 'Meja Kerja',
            'stock' => 12,
            'condition' => 'Baik',
            'location' => 'Ruang Produksi',
            'entry_date' => '2026-03-20',
            'description' => 'Meja kerja staff',
        ]);
    }
}
