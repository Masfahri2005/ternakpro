<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Daftar;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data_transaksi = Transaksi::with('daftar')->get();
        $data_daftar = Daftar::all();
        return view('transaksi.index', compact('data_transaksi', 'data_daftar'));
    }

    public function create()
    {
        $data_daftar = Daftar::all();
        return view('transaksi.create', compact('data_daftar'));
    }

    public function store(Request $request)
    {
        $existingTransaksi = Transaksi::where('email', $request->email)
            ->where('tanggal_transaksi', $request->tanggal_transaksi)
            ->first();
    
        if ($existingTransaksi) {
            return redirect()->back()->with('error', 'Data transaksi sudah ada.');
        }
    
        // Create new transaksi
        $harga = Daftar::find($request->id_daftar)->harga;
        $transaksi = new Transaksi();
        $transaksi->nama_lengkap = $request->nama_lengkap;
        $transaksi->no_tlp = $request->no_tlp;
        $transaksi->email = $request->email;
        $transaksi->alamat = $request->alamat;
        $transaksi->id_daftar = $request->id_daftar;
        $transaksi->harga = $harga;
        $transaksi->metode_pembayaran = $request->metode_pembayaran;
        $transaksi->status_pembayaran = $request->status_pembayaran;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
        $transaksi->catatan_tambahan = $request->catatan_tambahan;
    
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $transaksi->bukti_pembayaran = $filename;
        }
    
        $transaksi->save();
    
        // Menyimpan flash message
    return redirect()->route('transaksi.index')->with('success', 'Setelah anda memesan hewan pilihan anda maka kami akan mengirimkan bukti pemesanan ke email atau nomor telepon anda yang tertera di form pemesanan');
    }

    public function show($id)
    {
        $transaksi = Transaksi::with('daftar')->findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    public function downloadPdf($id)
    {
        $transaksi = Transaksi::with('daftar')->findOrFail($id);
        $html = view('transaksi.download', compact('transaksi'))->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $filename = 'invoice-transaksi-' . $transaksi->id . '.pdf';

        return $dompdf->stream($filename);
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $data_daftar = Daftar::all();
        return view('transaksi.edit', compact('transaksi', 'data_daftar'));
    }

   public function update(Request $request, $id)
{
    $transaksi = Transaksi::findOrFail($id);

    $transaksi->nama_lengkap = $request->nama_lengkap;
    $transaksi->no_tlp = $request->no_tlp;
    $transaksi->email = $request->email;
    $transaksi->alamat = $request->alamat;
    $transaksi->id_daftar = $request->id_daftar;
    $transaksi->harga = $request->harga;
    $transaksi->metode_pembayaran = $request->metode_pembayaran;
    $transaksi->status_pembayaran = $request->status_pembayaran;
    $transaksi->tanggal_transaksi = $request->tanggal_transaksi;
    $transaksi->catatan_tambahan = $request->catatan_tambahan;

    if ($request->hasFile('bukti_pembayaran')) {
        // Hapus file lama jika ada dan file tersebut benar-benar ada di direktori
        if ($transaksi->bukti_pembayaran && file_exists(public_path('uploads/' . $transaksi->bukti_pembayaran))) {
            unlink(public_path('uploads/' . $transaksi->bukti_pembayaran));
        }

        $file = $request->file('bukti_pembayaran');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
        $transaksi->bukti_pembayaran = $filename;
    }

    $transaksi->save();

    return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil diperbarui.');
}


    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        // Hapus bukti pembayaran jika ada
        if ($transaksi->bukti_pembayaran) {
            unlink(public_path('uploads/' . $transaksi->bukti_pembayaran));
        }

        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus.');
    }

}