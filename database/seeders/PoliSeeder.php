<?php

namespace Database\Seeders;

use App\Models\Poli;
use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    public function run(): void
    {
        Poli::create([
            'poli_code' => 'POL001',
            'name' => 'Poli Umum',
            'description' => 'Pemeriksaan kesehatan umum',
            'is_active' => true,
        ]);

        Poli::create([
            'poli_code' => 'POL002',
            'name' => 'Poli Anak',
            'description' => 'Pemeriksaan kesehatan khusus anak',
            'is_active' => true,
        ]);

        Poli::create([
            'poli_code' => 'POL003',
            'name' => 'Poli Gigi',
            'description' => 'Pemeriksaan dan perawatan gigi',
            'is_active' => true,
        ]);

        Poli::create([
            'poli_code' => 'POL004',
            'name' => 'Poli Kandungan',
            'description' => 'Pemeriksaan kesehatan ibu dan kandungan',
            'is_active' => false,
        ]);

        Poli::create([
            'poli_code' => 'POL005',
            'name' => 'Poli Mata',
            'description' => 'Pemeriksaan kesehatan mata',
            'is_active' => true,
        ]);
    }
}