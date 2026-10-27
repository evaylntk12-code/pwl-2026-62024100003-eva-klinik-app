@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
<h1>Data Dokter</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form method="GET" action="{{ route('dokter.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Nama / Kode Dokter">

    <select name="poli_id">
        <option value="">Semua Poli</option>
        @foreach ($polis as $poli)
            <option value="{{ $poli->id }}" @selected(request('poli_id') == $poli->id)>
                {{ $poli->name }}
            </option>
        @endforeach
    </select>

    <select name="is_active">
        <option value="">Semua Status</option>
        <option value="1" @selected(request('is_active') === '1')>Aktif</option>
        <option value="0" @selected(request('is_active') === '0')>Tidak Aktif</option>
    </select>

    <select name="sort">
        <option value="name" @selected(request('sort') === 'name')>Nama</option>
        <option value="doctor_code" @selected(request('sort') === 'doctor_code')>Kode Dokter</option>
    </select>

    <select name="direction">
        <option value="asc" @selected(request('direction') === 'asc')>A-Z</option>
        <option value="desc" @selected(request('direction') === 'desc')>Z-A</option>
    </select>

    <button type="submit">Terapkan</button>
    <a href="{{ route('dokter.index') }}">Reset</a>
</form>

<br>

<p>Menampilkan {{ $doctors->count() }} dari {{ $doctors->total() }} data.</p>

<a href="{{ route('dokter.create') }}">+ Tambah Dokter</a>

<br><br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama</th>
            <th>Spesialisasi</th>
            <th>Telepon</th>
            <th>Poli</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
            <tr>
                <td>{{ $doctors->firstItem() + $loop->index }}</td>
                <td>{{ $doctor->doctor_code }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialization }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ $doctor->poli?->name ?? '-' }}</td>
                <td>
                    @if ($doctor->is_active)
                        <span>Aktif</span>
                    @else
                        <span>Tidak Aktif</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('dokter.edit', $doctor->id) }}">Edit</a>

                    <form action="{{ route('dokter.destroy', $doctor->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data dokter ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">
                    Data dokter tidak ditemukan.
                    <a href="{{ route('dokter.index') }}">Reset filter</a>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
{{ $doctors->links() }}
@endsection