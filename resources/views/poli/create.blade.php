@extends('layouts.app')

@section('title', 'Tambah Poli')

@section('content')
<h1>Tambah Poli</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('poli.store') }}" method="POST">
    @csrf

    <div>
        <label>Kode Poli</label><br>
        <input type="text" name="poli_code" value="{{ old('poli_code') }}">
        @error('poli_code')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Nama Poli</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Keterangan</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label>Status</label><br>
        <select name="is_active">
            <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
        </select>
        @error('is_active')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <br>
    <button type="submit">Simpan</button>
    <a href="{{ route('poli.index') }}">Batal</a>
</form>
@endsection