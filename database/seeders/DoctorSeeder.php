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
        ]);

        Doctor::create([
            'doctor_code' => 'DOC002',
            'name' => 'dr. Siti Rahma',
            'specialization' => 'Anak',
            'phone' => '081234561002',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC003',
            'name' => 'dr. Budi Santoso',
            'specialization' => 'Gigi',
            'phone' => '081234561003',
            'is_active' => false,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC004',
            'name' => 'dr. Rina Wulandari',
            'specialization' => 'Kandungan',
            'phone' => '081234561004',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC005',
            'name' => 'dr. Hendra Kurniawan',
            'specialization' => 'Mata',
            'phone' => '081234561005',
            'is_active' => false,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC006',
            'name' => 'dr. Dewi Lestari',
            'specialization' => 'Kulit',
            'phone' => '081234561006',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC007',
            'name' => 'dr. Agus Wijaya',
            'specialization' => 'THT',
            'phone' => '081234561007',
            'is_active' => true,
        ]);

        Doctor::create([
            'doctor_code' => 'DOC008',
            'name' => 'dr. Maya Puspita',
            'specialization' => 'Jantung',
            'phone' => '081234561008',
            'is_active' => false,
        ]);
    }
}