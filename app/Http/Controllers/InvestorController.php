<?php

namespace App\Http\Controllers;
use App\Models\Investor;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index(){
        $data_investor = Investor::all(); // Ambil semua data investor
        return view('investor.index', compact('data_investor'));
    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_investor' => 'required|string|max:255',
            'no_tlp' => 'required|numeric',
            'email' => 'required|email',
            'no_wa' => 'required|numeric',
            'nama_perusahaan' => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|numeric',
            'negara' => 'required|string|max:255',
            'website' => 'nullable|url',
            'tipe_entitas' => 'required|string',
            'status' => 'required|string',
            'nominal_investasi' => 'required|numeric',
            'bukti_investasi' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('bukti_investasi')) {
            $file = $request->file('bukti_investasi');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/bukti_investasi', $filename);
            $validated['bukti_investasi'] = $filename;
        }

        Investor::create($validated);

         // Menambahkan notifikasi sukses
        return redirect()->route('investor.index')->with('success', 'Data investor berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $investor = Investor::findOrFail($id);
        return view('investor.edit', compact('investor'));
    }

    public function update(Request $request, $id)
    {
        $investor = Investor::findOrFail($id);

        $validated = $request->validate([
            'nama_investor' => 'required|string|max:255',
            'no_tlp' => 'required|numeric',
            'email' => 'required|email',
            'no_wa' => 'required|numeric',
            'nama_perusahaan' => 'required|string|max:255',
            'alamat_perusahaan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|numeric',
            'negara' => 'required|string|max:255',
            'website' => 'nullable|url',
            'tipe_entitas' => 'required|string',
            'status' => 'required|string',
            'nominal_investasi' => 'required|numeric',
            'bukti_investasi' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('bukti_investasi')) {
            $file = $request->file('bukti_investasi');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/bukti_investasi', $filename);
            $validated['bukti_investasi'] = $filename;
        }

        $investor->update($validated);

        return redirect()->route('investor.index')->with('success', 'Data investor berhasil diperbarui!');
    }

    public function show($id)
    {
        $investor = Investor::findOrFail($id);
        return view('investor.show', compact('investor'));
    }

    public function download($id)
    {
        $investor = Investor::findOrFail($id);

        $html = view('investor.pdf', compact('investor'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('detail_investor_'.$investor->id.'.pdf');
    }

    public function destroy($id)
    {
        $investor = Investor::findOrFail($id);


        $investor->delete();

        return redirect()->route('investor.index')->with('success', 'Data investor berhasil dihapus!');
    }


}
