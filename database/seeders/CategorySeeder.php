<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Sembako',
            'Minuman',
            'Makanan Ringan',
            'Perlengkapan Mandi',
            'Alat Rumah Tangga',
            'Perlengkapan Bayi',
            'Obat-obatan',
            'Bumbu Dapur',
        ];

        foreach ($categories as $nama) {
            Category::create(['nama_kategori' => $nama]);
        }
    }
}
