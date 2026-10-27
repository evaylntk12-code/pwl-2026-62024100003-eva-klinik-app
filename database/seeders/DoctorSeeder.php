<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        Doctor::create([
            'doctor_code' => 'DOC001',
            'name' => 'dr. Ahmad Fauzi',
            'specialization' => 'Umum',
            'phone' => '081234561001',
            'is_active' => true,
            'poli_id' => 1,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC002',
            'name' => 'dr. Siti Rahma',
            'specialization' => 'Anak',
            'phone' => '081234561002',
            'is_active' => true,
            'poli_id' => 2,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC003',
            'name' => 'dr. Budi Santoso',
            'specialization' => 'Gigi',
            'phone' => '081234561003',
            'is_active' => false,
            'poli_id' => 3,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC004',
            'name' => 'dr. Rina Wulandari',
            'specialization' => 'Kandungan',
            'phone' => '081234561004',
            'is_active' => true,
            'poli_id' => 4,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC005',
            'name' => 'dr. Hendra Kurniawan',
            'specialization' => 'Mata',
            'phone' => '081234561005',
            'is_active' => false,
            'poli_id' => 5,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC006',
            'name' => 'dr. Dewi Lestari',
            'specialization' => 'Kulit',
            'phone' => '081234561006',
            'is_active' => true,
            'poli_id' => null,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC007',
            'name' => 'dr. Agus Wijaya',
            'specialization' => 'THT',
            'phone' => '081234561007',
            'is_active' => true,
            'poli_id' => null,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC008',
            'name' => 'dr. Maya Puspita',
            'specialization' => 'Jantung',
            'phone' => '081234561008',
            'is_active' => false,
            'poli_id' => null,
        ]);

        for ($i = 9; $i <= 20; $i++) {
            Doctor::create([
                'doctor_code' => 'DOC' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'name' => 'dr. Uji ' . $i,
                'specialization' => ['Umum', 'Anak', 'Gigi', 'Mata'][$i % 4],
                'phone' => '08123456' . (1000 + $i),
                'is_active' => $i % 3 !== 0,
                'poli_id' => ($i % 5) + 1,
            ]);
        }
    }
}