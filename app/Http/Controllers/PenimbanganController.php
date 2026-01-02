<?php

namespace App\Http\Controllers;

use App\Models\Penimbangan;
use App\Models\Anak;
use Illuminate\Http\Request;

class PenimbanganController extends Controller
{
    public function index()
    {
        $penimbangans = Penimbangan::with('anak')->paginate(5);
        return view('penimbangan.index', compact('penimbangans'));
    }

    public function create()
    {
        $anaks = Anak::all();
        return view('penimbangan.create', compact('anaks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anak_id' => 'required',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
        ]);

        Penimbangan::create($request->all());

        return redirect()->route('penimbangan.index')
            ->with('success','Data penimbangan berhasil ditambahkan');
    }

    public function edit(Penimbangan $penimbangan)
    {
        $anaks = Anak::all();
        return view('penimbangan.edit', compact('penimbangan','anaks'));
    }

    public function update(Request $request, Penimbangan $penimbangan)
    {
        $request->validate([
            'anak_id' => 'required',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
        ]);

        $penimbangan->update($request->all());

        return redirect()->route('penimbangan.index')
            ->with('success','Data penimbangan berhasil diperbarui');
    }

    public function destroy(Penimbangan $penimbangan)
    {
        $penimbangan->delete();

        return redirect()->route('penimbangan.index')
            ->with('success','Data penimbangan berhasil dihapus');
    }
}
