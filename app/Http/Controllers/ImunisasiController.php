<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use App\Models\Anak;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        $imunisasis = Imunisasi::with('anak')->paginate(5);
        return view('imunisasi.index', compact('imunisasis'));
    }

    public function create()
    {
        $anaks = Anak::all();
        return view('imunisasi.create', compact('anaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anak_id' => 'required',
            'jenis_imunisasi' => 'required',
            'tanggal' => 'required|date',
        ]);

        Imunisasi::create($request->all());

        return redirect()->route('imunisasi.index')
            ->with('success','Data imunisasi berhasil ditambahkan');
    }

    public function edit(Imunisasi $imunisasi)
    {
        $anaks = Anak::all();
        return view('imunisasi.edit', compact('imunisasi','anaks'));
    }

    public function update(Request $request, Imunisasi $imunisasi)
    {
        $request->validate([
            'anak_id' => 'required',
            'jenis_imunisasi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $imunisasi->update($request->all());

        return redirect()->route('imunisasi.index')
            ->with('success','Data imunisasi berhasil diperbarui');
    }

    public function destroy(Imunisasi $imunisasi)
    {
        $imunisasi->delete();

        return redirect()->route('imunisasi.index')
            ->with('success','Data imunisasi berhasil dihapus');
    }
}
