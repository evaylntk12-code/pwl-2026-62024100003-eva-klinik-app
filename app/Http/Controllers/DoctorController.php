<?php

namespace App\Http\Controllers;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = [
            ['nama' => 'dr. Ahmad Fauzi', 'spesialisasi' => 'Umum', 'status' => 'aktif'],
            ['nama' => 'dr. Siti Rahma', 'spesialisasi' => 'Anak', 'status' => 'aktif'],
            ['nama' => 'dr. Budi Santoso', 'spesialisasi' => 'Gigi', 'status' => 'cuti'],
            ['nama' => 'dr. Rina Wulandari', 'spesialisasi' => 'Kandungan', 'status' => 'aktif'],
            ['nama' => 'dr. Hendra Kurniawan', 'spesialisasi' => 'Mata', 'status' => 'nonaktif'],
        ];

        return view('dokter.index', compact('doctors'));
    }
}