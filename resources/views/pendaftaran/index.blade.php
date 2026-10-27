@extends('layouts.app')

@section('title', 'Data Pendaftaran')

@section('content')
<h1>Data Pendaftaran</h1>

<form method="GET" action="{{ route('pendaftaran.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Nama pasien">

    <select name="doctor_id">
        <option value="">Semua Dokter</option>
        @foreach ($doctors as $doctor)
            <option value="{{ $doctor->id }}" @selected(request('doctor_id') == $doctor->id)>
                {{ $doctor->name }}
            </option>
        @endforeach
    </select>

    <select name="status">
        <option value="">Semua Status</option>
        <option value="waiting" @selected(request('status') === 'waiting')>Waiting</option>
        <option value="done" @selected(request('status') === 'done')>Done</option>
    </select>

    <input type="date" name="date" value="{{ request('date') }}">

    <select name="direction">
        <option value="desc" @selected(request('direction') !== 'asc')>Terbaru</option>
        <option value="asc" @selected(request('direction') === 'asc')>Terlama</option>
    </select>

    <button type="submit">Terapkan</button>
    <a href="{{ route('pendaftaran.index') }}">Reset Filter</a>
</form>

<br>

<p>Menampilkan {{ $registrations->count() }} dari {{ $registrations->total() }} data.</p>

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
                <td>{{ $registrations->firstItem() + $loop->index }}</td>
                <td>{{ $registration->registration_date }}</td>
                <td>{{ $registration->patient->name }}</td>
                <td>{{ $registration->doctor->name }}</td>
                <td>{{ $registration->complaint ?? '-' }}</td>
                <td>{{ $registration->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    Data pendaftaran tidak ditemukan.
                    <a href="{{ route('pendaftaran.index') }}">Reset Filter</a>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
{{ $registrations->links() }}
@endsection