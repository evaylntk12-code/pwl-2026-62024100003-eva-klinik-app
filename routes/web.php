<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/klinik', function () {
    return 'Sistem Informasi Klinik';
});

Route::resource('pasien', PatientController::class);

Route::resource('dokter', DoctorController::class);

Route::resource('poli', PoliController::class);

Route::get('/pendaftaran', [RegistrationController::class, 'index'])->name('pendaftaran.index');

Route::get('/jadwal', [ScheduleController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/{hari}', [ScheduleController::class, 'show']);

Route::get('/tentang', function () {
    return 'Sistem Informasi Klinik <br> Dikembangkan menggunakan Laravel';
});