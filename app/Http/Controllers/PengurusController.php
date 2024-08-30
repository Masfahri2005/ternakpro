<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    public function index(){
        $data_pengurus = Pengurus::all(); // Ambil semua data pengurus
        return view('pengurus.index', compact('data_pengurus'));
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'usia' => 'required|integer',
            'jk' => 'required|in:L,P', // Gunakan 'L' dan 'P' untuk jk
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'email' => 'required|email|unique:pengurus,email',
            'role' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Simpan foto
        $path = $request->file('foto')->store('public/fotos');
    
        Pengurus::create([
            'nama_lengkap' => $validatedData['nama_lengkap'],
            'usia' => $validatedData['usia'],
            'jk' => $validatedData['jk'], // Hanya 'L' atau 'P'
            'alamat' => $validatedData['alamat'],
            'no_tlp' => $validatedData['no_tlp'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'foto' => $path,
        ]);
    
        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('pengurus.edit', compact('pengurus'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'usia' => 'required|integer',
            'jk' => 'required|in:L,P',
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'email' => 'required|email|unique:pengurus,email,' . $id,
            'role' => 'required|string|max:255',
            'foto' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pengurus = Pengurus::findOrFail($id);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pengurus->foto) {
                Storage::delete($pengurus->foto);
            }
            // Simpan foto baru
            $path = $request->file('foto')->store('public/fotos');
            $validatedData['foto'] = $path;
        }

        $pengurus->update($validatedData);

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil diperbarui.');
    }

    public function show($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('pengurus.show', compact('pengurus'));
    }

    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($pengurus->foto) {
            Storage::delete($pengurus->foto);
        }

        $pengurus->delete();

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil dihapus.');
    }

}
