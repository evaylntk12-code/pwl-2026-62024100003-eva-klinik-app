@extends('layouts.app')

@section('title', 'Data Pendaftaran')

@section('content')
<h1>Data Pendaftaran</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Pasien</th>
            <th>Dokter</th>
            <th>Keluhan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($registrations as $registration)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $registration->registration_date }}</td>
                <td>{{ $registration->patient->name }}</td>
                <td>{{ $registration->doctor->name }}</td>
                <td>{{ $registration->complaint ?? '-' }}</td>
                <td>{{ $registration->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data pendaftaran.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection