<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/klinik', function () {
    return 'Sistem Informasi Klinik';
});

Route::get('/pasien', function () {
    return 'Data Pasien';
});

Route::get('/dokter', function () {
    return 'Data Dokter';
});

Route::get('/poli', function () {
    return 'Data Poli';
});

Route::get('/tentang', function () {
    return 'Sistem Informasi Klinik <br> Dikembangkan menggunakan Laravel';
});