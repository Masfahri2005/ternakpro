<?php

namespace App\Http\Controllers;
use App\Models\Hewan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class HewanController extends Controller
{
    public function index(){
        $data_hewan = Hewan::all(); // Ambil semua data hewan
        return view('hewan.index', compact('data_hewan'));
    }

    public function create()
    {
        return view('hewan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:100',
            'tlp_pemilik' => 'required|string|max:50',
            'email_pemilik' => 'required|string|email|max:50',
            'jenis_hewan' => 'required|string|max:50',
            'tanggal_masuk' => 'required|date',
            'tanggal_pemantauan' => 'required|date',
            'berat_badan' => 'required|numeric',
            'suhu_tubuh' => 'required|numeric',
            'kondisi_kesehatan' => 'required|string|max:255',
            'perubahan_fisik' => 'required|string|max:255',
            'jenis_pakan' => 'required|string|max:255',
            'jumlah_pakan' => 'required|numeric',
            'frekuensi_pakan' => 'required|numeric',
            'kondisi_kandang' => 'required|string|max:255',
            'suhu_lingkungan' => 'required|numeric',
            'kelembapan_lingkungan' => 'required|numeric',
            'pemberian_obat' => 'required|string|max:255',
            'tindakan_perawatan' => 'required|string|max:255',
            'catatan' => 'nullable|string|max:1000',
            'status_kesehatan' => 'required|string|max:255',
            'rekomendasi_tindakan' => 'required|string|max:255',
            'tanggal_keluar' => 'nullable|date',
        ]);

        Hewan::create($request->all());
        return redirect()->route('hewan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $hewan = Hewan::findOrFail($id);
        return view('hewan.edit', compact('hewan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pemilik' => 'required|string|max:100',
            'tlp_pemilik' => 'required|string|max:50',
            'email_pemilik' => 'required|string|email|max:50',
            'jenis_hewan' => 'required|string|max:50',
            'tanggal_masuk' => 'required|date',
            'tanggal_pemantauan' => 'required|date',
            'berat_badan' => 'required|numeric',
            'suhu_tubuh' => 'required|numeric',
            'kondisi_kesehatan' => 'required|string|max:255',
            'perubahan_fisik' => 'required|string|max:255',
            'jenis_pakan' => 'required|string|max:255',
            'jumlah_pakan' => 'required|numeric',
            'frekuensi_pakan' => 'required|numeric',
            'kondisi_kandang' => 'required|string|max:255',
            'suhu_lingkungan' => 'required|numeric',
            'kelembapan_lingkungan' => 'required|numeric',
            'pemberian_obat' => 'required|string|max:255',
            'tindakan_perawatan' => 'required|string|max:255',
            'catatan' => 'nullable|string|max:1000',
            'status_kesehatan' => 'required|string|max:255',
            'rekomendasi_tindakan' => 'required|string|max:255',
            'tanggal_keluar' => 'nullable|date',
        ]);

        
        // Temukan data dan update
        $data_hewan = Hewan::findOrFail($id);
        $data_hewan->update([
            'nama_pemilik' => $request->nama_pemilik,
            'tlp_pemilik' => $request->tlp_pemilik,
            'email_pemilik' => $request->email_pemilik,
            'jenis_hewan' => $request->jenis_hewan,
            'tanggal_masuk' => $request->tanggal_masuk,
            'tanggal_pemantauan' => $request->tanggal_pemantauan,
            'berat_badan' => $request->berat_badan,
            'suhu_tubuh' => $request->suhu_tubuh,
            'kondisi_kesehatan' => $request->kondisi_kesehatan,
            'perubahan_fisik' => $request->perubahan_fisik,
            'jenis_pakan' => $request->jenis_pakan,
            'jumlah_pakan' => $request->jumlah_pakan,
            'frekuensi_pakan' => $request->frekuensi_pakan,
            'kondisi_kandang' => $request->kondisi_kandang,
            'suhu_lingkungan' => $request->suhu_lingkungan,
            'kelembapan_lingkungan' => $request->kelembapan_lingkungan,
            'pemberian_obat' => $request->pemberian_obat,
            'tindakan_perawatan' => $request->tindakan_perawatan,
            'catatan' => $request->catatan,
            'status_kesehatan' => $request->status_kesehatan,
            'rekomendasi_tindakan' => $request->rekomendasi_tindakan,
            'tanggal_keluar' => $request->tanggal_keluar,
        ]);

        return redirect()->route('hewan.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Melihat keseluruhan data berdasarkan id
    public function show($id)
    {
        $data_hewan = Hewan::findOrFail($id);
        return view('hewan.show', compact('data_hewan'));
    }

        public function destroy($id)
    {
        $hewan = Hewan::findOrFail($id);
        $hewan->delete();

        return redirect()->route('hewan.index')->with('success', 'Data berhasil dihapus.');
    }

        public function downloadPDF($id)
    {
        try {
            $data_hewan = Hewan::findOrFail($id);

            $options = new Options();
            $options->set('defaultFont', 'Arial');
            $pdf = new Dompdf($options);

            $html = view('hewan.download', compact('data_hewan'))->render();
            $pdf->loadHtml($html);
            $pdf->setPaper('A4', 'portrait');
            $pdf->render();

            return $pdf->stream('data-pemantauan-hewan-'.$data_hewan->nama_pemilik.'.pdf');
        } catch (\Exception $e) {
            return redirect()->route('hewan.index')->with('error', 'Terjadi kesalahan saat mengunduh PDF: '.$e->getMessage());
        }
    }

}
