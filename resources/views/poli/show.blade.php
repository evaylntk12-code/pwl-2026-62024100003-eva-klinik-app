@extends('layouts.app')

@section('title', 'Detail Poli')

@section('content')
<h1>{{ $poli->name }}</h1>

<p>Kode: {{ $poli->poli_code }}</p>
<p>Keterangan: {{ $poli->description ?? '-' }}</p>

<h3>Daftar Dokter di Poli Ini</h3>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama</th>
            <th>Spesialisasi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($poli->doctors as $doctor)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $doctor->doctor_code }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialization }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada dokter di poli ini.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
<a href="{{ route('poli.index') }}">Kembali</a>
@endsection