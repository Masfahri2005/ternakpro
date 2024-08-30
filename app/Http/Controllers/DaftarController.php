<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    // Halaman index.blade.php
    public function index()
    {
        $data_daftar = Daftar::all(); // Ambil semua daftar hewan
        return view('daftar.index', compact('data_daftar'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'daftar_id' => 'required|exists:daftar,id',
        ]);

        $daftar = Daftar::find($request->daftar_id);
        
        // Logika untuk menangani checkout, seperti menyimpan pesanan ke database atau mengirim email
        
        return redirect()->route('daftar.index')->with('success', 'Pesanan Anda akan segera diproses');
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('daftar.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'usia' => 'required|integer',
            'level' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'berat' => 'required|numeric',
            'kondisi_fisik' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        // Menyimpan foto
        $fotoPath = $request->file('foto')->store('public/foto_hewan');

        Daftar::create([
            'jenis' => $request->jenis,
            'foto' => $fotoPath,
            'usia' => $request->usia,
            'level' => $request->level,
            'kategori' => $request->kategori,
            'berat' => $request->berat,
            'kondisi_fisik' => $request->kondisi_fisik,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        return redirect()->route('daftar.index')->with('success', 'Data hewan berhasil ditambahkan');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        $data_hewan = Daftar::findOrFail($id);
        return view('daftar.edit', compact('data_hewan'));
    }

    // Memperbarui data yang sudah ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'usia' => 'required|integer',
            'level' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'berat' => 'required|numeric',
            'kondisi_fisik' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $data_hewan = Daftar::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Menghapus foto lama
            if ($data_hewan->foto) {
                Storage::delete($data_hewan->foto);
            }
            // Menyimpan foto baru
            $fotoPath = $request->file('foto')->store('public/foto_hewan');
        } else {
            $fotoPath = $data_hewan->foto;
        }

        $data_hewan->update([
            'jenis' => $request->jenis,
            'foto' => $fotoPath,
            'usia' => $request->usia,
            'level' => $request->level,
            'kategori' => $request->kategori,
            'berat' => $request->berat,
            'kondisi_fisik' => $request->kondisi_fisik,
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        return redirect()->route('daftar.index')->with('success', 'Data hewan berhasil diperbarui');
    }

    // Menampilkan detail data hewan
    public function show($id)
    {
        $data_hewan = Daftar::findOrFail($id);
        return view('daftar.show', compact('data_hewan'));
    }

    // Menghapus data yang sudah ada
    public function destroy($id)
    {
        $data_hewan = Daftar::findOrFail($id);

        // Menghapus foto dari penyimpanan
        if ($data_hewan->foto) {
            Storage::delete($data_hewan->foto);
        }

        // Menghapus data dari database
        $data_hewan->delete();

        return redirect()->route('daftar.index')->with('success', 'Data hewan berhasil dihapus');
    }

}
