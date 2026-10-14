@extends('layouts.app')

@section('title', 'Edit Pasien')

@section('content')
<h1>Edit Pasien</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>No. Rekam Medis</label><br>
        <input type="text" name="medical_record_number" value="{{ old('medical_record_number', $pasien->medical_record_number) }}">
        @error('medical_record_number')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Nama</label><br>
        <input type="text" name="name" value="{{ old('name', $pasien->name) }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Jenis Kelamin</label><br>
        <select name="gender">
            <option value="L" {{ old('gender', $pasien->gender) == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ old('gender', $pasien->gender) == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        @error('gender')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Tanggal Lahir</label><br>
        <input type="date" name="birth_date" value="{{ old('birth_date', $pasien->birth_date) }}">
        @error('birth_date')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Alamat</label><br>
        <textarea name="address">{{ old('address', $pasien->address) }}</textarea>
        @error('address')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Telepon</label><br>
        <input type="text" name="phone" value="{{ old('phone', $pasien->phone) }}">
        @error('phone')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <br>
    <button type="submit">Update</button>
    <a href="{{ route('pasien.index') }}">Batal</a>
</form>
@endsection