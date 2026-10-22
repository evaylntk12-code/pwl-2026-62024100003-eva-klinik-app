@extends('layouts.app')

@section('title', 'Edit Dokter')

@section('content')
<h1>Edit Dokter</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Kode Dokter</label><br>
        <input type="text" name="doctor_code" value="{{ old('doctor_code', $dokter->doctor_code) }}">
        @error('doctor_code') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Nama</label><br>
        <input type="text" name="name" value="{{ old('name', $dokter->name) }}">
        @error('name') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Spesialisasi</label><br>
        <input type="text" name="specialization" value="{{ old('specialization', $dokter->specialization) }}">
        @error('specialization') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Telepon</label><br>
        <input type="text" name="phone" value="{{ old('phone', $dokter->phone) }}">
        @error('phone') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Poli</label><br>
        <select name="poli_id">
            <option value="">-- Pilih Poli --</option>
            @foreach ($polis as $poli)
                <option value="{{ $poli->id }}" @selected(old('poli_id', $dokter->poli_id) == $poli->id)>
                    {{ $poli->name }}
                </option>
            @endforeach
        </select>
        @error('poli_id') <div>{{ $message }}</div> @enderror
    </div>

    <div>
        <label>Status</label><br>
        <select name="is_active">
            <option value="1" @selected(old('is_active', $dokter->is_active) == '1')>Aktif</option>
            <option value="0" @selected(old('is_active', $dokter->is_active) == '0')>Tidak Aktif</option>
        </select>
        @error('is_active') <div>{{ $message }}</div> @enderror
    </div>

    <br>
    <button type="submit">Update</button>
    <a href="{{ route('dokter.index') }}">Batal</a>
</form>
@endsection