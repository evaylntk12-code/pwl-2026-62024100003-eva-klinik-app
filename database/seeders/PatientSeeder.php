<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        Patient::create([
            'medical_record_number' => 'RM0001',
            'name' => 'Ahmad',
            'gender' => 'L',
            'birth_date' => '2000-05-10',
            'address' => 'Kudus',
            'phone' => '081234567890',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0002',
            'name' => 'Siti',
            'gender' => 'P',
            'birth_date' => '2001-08-15',
            'address' => 'Jepara',
            'phone' => '081234567891',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0003',
            'name' => 'Budi',
            'gender' => 'L',
            'birth_date' => '1998-03-22',
            'address' => 'Demak',
            'phone' => '081234567892',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0004',
            'name' => 'Rina',
            'gender' => 'P',
            'birth_date' => '1995-11-30',
            'address' => 'Pati',
            'phone' => '081234567893',
        ]);

        Patient::create([
            'medical_record_number' => 'RM0005',
            'name' => 'Hendra',
            'gender' => 'L',
            'birth_date' => '2002-07-18',
            'address' => 'Rembang',
            'phone' => '081234567894',
        ]);

        $names = ['Andi', 'Bella', 'Citra', 'Dimas', 'Eko', 'Fitri', 'Gita', 'Hadi', 'Indah', 'Joko'];
        $cities = ['Kudus', 'Jepara', 'Pati', 'Demak', 'Rembang'];

        for ($i = 6; $i <= 30; $i++) {
            Patient::create([
                'medical_record_number' => 'RM' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'name' => $names[$i % 10] . ' ' . $cities[$i % 5],
                'gender' => $i % 2 === 0 ? 'L' : 'P',
                'birth_date' => '199' . ($i % 10) . '-0' . (($i % 9) + 1) . '-15',
                'address' => $cities[$i % 5],
                'phone' => '0812345678' . str_pad($i, 2, '0', STR_PAD_LEFT),
            ]);
        }
    }
}