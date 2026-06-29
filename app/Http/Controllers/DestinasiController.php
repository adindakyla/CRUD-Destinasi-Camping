<?php

namespace App\Http\Controllers;

use App\Models\DestinasiCamping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class DestinasiController extends Controller
{

     public function dashboard() {
        return view('admin.dashboard');
    }

    public function index() {
        $destinasi = DestinasiCamping::all();
        return view('admin.index', compact('destinasi'));
    }

    public function show($id)
    {
        $destinasi = DestinasiCamping::findOrFail($id);
        return view('show', compact('destinasi'));
    }
    public function create() {
        return view('admin.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
            'fasilitas' => 'required',
            'biaya' => 'required|numeric',
            'jam_operasional' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $path = $request->file('gambar')->store('destinasi', 'public');

        DestinasiCamping::create([
            'nama_tempat' => $request->nama_tempat,
            'fasilitas' => $request->fasilitas,
            'biaya' => $request->biaya,
            'jam_operasional' => $request->jam_operasional,
            'gambar' => $path
        ]);

        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil ditambahkan!');
    }

    public function edit($id) {
        $destinasi = DestinasiCamping::findOrFail($id);
        return view('admin.edit', compact('destinasi'));
    }

    public function update(Request $request, $id) {
        $destinasi = DestinasiCamping::findOrFail($id);
        
        $request->validate([
            'nama_tempat' => 'required|string|max:255',
            'fasilitas' => 'required',
            'biaya' => 'required|numeric',
            'jam_operasional' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($destinasi->gambar) Storage::disk('public')->delete($destinasi->gambar);
            $destinasi->gambar = $request->file('gambar')->store('destinasi', 'public');
        }

        $destinasi->update([
            'nama_tempat' => $request->nama_tempat,
            'fasilitas' => $request->fasilitas,
            'biaya' => $request->biaya,
            'jam_operasional' => $request->jam_operasional,
            'gambar' => $destinasi->gambar
        ]);

        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil diperbarui!');
    }

    public function destroy($id) {
        $destinasi = DestinasiCamping::findOrFail($id);
        if ($destinasi->gambar) Storage::disk('public')->delete($destinasi->gambar);
        $destinasi->delete();

        return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil dihapus!');
    }

    public function exportPdf() {
        $destinasi = DestinasiCamping::all();
        $pdf = Pdf::loadView('admin.pdf', compact('destinasi'));
        return $pdf->stream('laporan-destinasi-camping.pdf');
    }
}
