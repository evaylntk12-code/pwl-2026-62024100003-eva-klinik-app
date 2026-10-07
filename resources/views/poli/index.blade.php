@extends('layouts.app')

@section('title', 'Data Poli')

@section('content')
<h1>Data Poli</h1>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Poli</th>
            <th>Nama Poli</th>
            <th>Keterangan</th>
            <th>Status</th>
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
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data poli.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection