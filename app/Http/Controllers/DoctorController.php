<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('poli')->get();

        return view('dokter.index', compact('doctors'));
    }

    public function create()
    {
        $polis = Poli::where('is_active', true)
            ->orderBy('name')
            ->get();

        return view('dokter.create', compact('polis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'doctor_code' => 'required|unique:doctors,doctor_code',
            'name' => 'required|max:255',
            'specialization' => 'required|max:255',
            'phone' => 'nullable|max:20',
            'is_active' => 'required|in:1,0',
            'poli_id' => 'required|exists:polis,id',
        ]);

        Doctor::create($validated);

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function edit(Doctor $dokter)
    {
        $polis = Poli::orderBy('name')->get();

        return view('dokter.edit', compact('dokter', 'polis'));
    }

    public function update(Request $request, Doctor $dokter)
    {
        $validated = $request->validate([
            'doctor_code' => [
                'required',
                Rule::unique('doctors', 'doctor_code')->ignore($dokter->id),
            ],
            'name' => 'required|max:255',
            'specialization' => 'required|max:255',
            'phone' => 'nullable|max:20',
            'is_active' => 'required|in:1,0',
            'poli_id' => 'required|exists:polis,id',
        ]);

        $dokter->update($validated);

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy(Doctor $dokter)
    {
        $dokter->delete();

        return redirect()
            ->route('dokter.index')
            ->with('success', 'Data dokter berhasil dihapus.');
    }
}