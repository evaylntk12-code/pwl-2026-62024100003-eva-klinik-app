<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;

class RegistrationSeeder extends Seeder
{
    public function run(): void
    {
        Registration::create([
            'patient_id' => 1,
            'doctor_id' => 1,
            'registration_date' => '2026-10-20',
            'complaint' => 'Demam dan batuk',
            'status' => 'waiting',
        ]);

        Registration::create([
            'patient_id' => 2,
            'doctor_id' => 2,
            'registration_date' => '2026-10-20',
            'complaint' => 'Kontrol rutin anak',
            'status' => 'done',
        ]);

        Registration::create([
            'patient_id' => 1,
            'doctor_id' => 3,
            'registration_date' => '2026-10-21',
            'complaint' => 'Sakit gigi',
            'status' => 'waiting',
        ]);

        for ($i = 1; $i <= 22; $i++) {
            Registration::create([
                'patient_id' => ($i % 30) + 1,
                'doctor_id' => ($i % 12) + 1,
                'registration_date' => now()->subDays($i)->toDateString(),
                'complaint' => 'Keluhan uji ' . $i,
                'status' => $i % 2 === 0 ? 'done' : 'waiting',
            ]);
        }
    }
}