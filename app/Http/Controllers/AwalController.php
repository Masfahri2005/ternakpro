<?php

namespace App\Http\Controllers;

use App\Models\Awal;
use Illuminate\Http\Request;

class AwalController extends Controller
{
    // Halaman index.blade.php
    public function index()
    {
        $data_awal = Awal::all(); // Ambil semua data awal
        return view('awal.index', compact('data_awal'));
    }

    public function create()
    {
        return view('awal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_tlp' => 'required|numeric|digits_between:10,15',
            'email_aktif' => 'required|email|max:255',
            'select' => 'required|string|max:10',
            'pesan_saran' => 'nullable|string|max:500', // Ini membolehkan field pesan_saran kosong
        ]);

        Awal::create([
            'nama_lengkap' => $request->nama_lengkap,
            'no_tlp' => $request->no_tlp,
            'email_aktif' => $request->email_aktif,
            'rating' => $request->select,
            'pesan_saran' => $request->pesan_saran,
        ]);

        return redirect()->route('awal.index')->with('success', 'Feedback berhasil disimpan!');
    }
    
    // Menghapus data berdasarkan ID
    public function destroy($id)
    {
        $data_awal = Awal::findOrFail($id);
        $data_awal->delete();

        return redirect()->route('awal.index')->with('success', 'Data berhasil dihapus!');
    }

    // Melihat keseluruhan data berdasarkan id
    public function show($id)
    {
        $data_awal = Awal::findOrFail($id);
        return view('awal.show', compact('data_awal'));
    }

        public function edit($id)
    {
        $data_awal = Awal::findOrFail($id);
        return view('awal.edit', compact('data_awal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'no_tlp' => 'required|numeric|digits_between:10,15',
            'email_aktif' => 'required|email|max:255',
            'select' => 'required|string|max:10',
            'pesan_saran' => 'nullable|string|max:500', // Ini membolehkan field pesan_saran kosong
        ]);

        // Temukan data dan update
        $data_awal = Awal::findOrFail($id);
        $data_awal->update([
            'nama_lengkap' => $request->nama_lengkap,
            'no_tlp' => $request->no_tlp,
            'email_aktif' => $request->email_aktif,
            'rating' => $request->select,
            'pesan_saran' => $request->pesan_saran,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('awal.index')->with('success', 'Data berhasil diperbarui!');
    }


}