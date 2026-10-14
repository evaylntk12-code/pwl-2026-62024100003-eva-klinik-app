@extends('layouts.app')

@section('title', 'Data Poli')

@section('content')
<h1>Data Poli</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<a href="{{ route('poli.create') }}">+ Tambah Poli</a>

<br><br>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Poli</th>
            <th>Nama Poli</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($polis as $poli)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $poli->poli_code }}</td>
                <td>{{ $poli->name }}</td>
                <td>{{ $poli->description }}</td>
                <td>
                    @if ($poli->is_active)
                        <span>Aktif</span>
                    @else
                        <span>Tidak Aktif</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('poli.edit', $poli->id) }}">Edit</a>

                    <form action="{{ route('poli.destroy', $poli->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data poli ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data poli.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection