@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
<h1>Data Pasien</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<a href="{{ route('pasien.create') }}">+ Tambah Pasien</a>

<br><br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>No. RM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($patients as $patient)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $patient->medical_record_number }}</td>
                <td>{{ $patient->name }}</td>
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
                <td colspan="5">Belum ada data pasien.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection