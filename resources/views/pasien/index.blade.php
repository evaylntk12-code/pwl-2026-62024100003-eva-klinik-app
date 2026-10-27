@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<h1>Data Pasien</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form method="GET" action="{{ route('pasien.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Nama / No. RM">

    <select name="gender">
        <option value="">Semua Gender</option>
        <option value="L" @selected(request('gender') === 'L')>Laki-laki</option>
        <option value="P" @selected(request('gender') === 'P')>Perempuan</option>
    </select>

    <select name="sort">
        <option value="name" @selected(request('sort') === 'name')>Nama</option>
        <option value="created_at" @selected(request('sort') === 'created_at')>Tanggal Input</option>
    </select>

    <select name="direction">
        <option value="asc" @selected(request('direction') === 'asc')>A-Z / Terlama</option>
        <option value="desc" @selected(request('direction') === 'desc')>Z-A / Terbaru</option>
    </select>

    <button type="submit">Terapkan</button>
    <a href="{{ route('pasien.index') }}">Reset</a>
</form>

<br>

@if (request('search'))
    <p>Hasil pencarian: <strong>{{ request('search') }}</strong></p>
@endif

<p>Menampilkan {{ $patients->count() }} dari {{ $patients->total() }} data.</p>

<a href="{{ route('pasien.create') }}">+ Tambah Pasien</a>

<br><br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>No. RM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($patients as $patient)
            <tr>
                <td>{{ $patients->firstItem() + $loop->index }}</td>
                <td>{{ $patient->medical_record_number }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->gender }}</td>
                <td>{{ $patient->address }}</td>
                <td>
                    <a href="{{ route('pasien.edit', $patient->id) }}">Edit</a>

                    <form action="{{ route('pasien.destroy', $patient->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data pasien ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    Data pasien tidak ditemukan.
                    <a href="{{ route('pasien.index') }}">Reset filter</a>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<br>
{{ $patients->links() }}
@endsection