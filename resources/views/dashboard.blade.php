@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard Klinik</h1>
    <p>Selamat datang di Sistem Informasi Klinik.</p>

    <p>Jumlah Pasien: {{ $jumlahPasien }}</p>
    <p>Jumlah Dokter: {{ $jumlahDokter }}</p>
    <p>Jumlah Poli: {{ $jumlahPoli }}</p>
@endsection