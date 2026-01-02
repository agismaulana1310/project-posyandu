<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $anaks = Anak::when($search, function ($query) use ($search) {
            $query->where('nama', 'like', "%{$search}%");
        })->paginate(5);

        return view('anak.index', compact('anaks', 'search'));
    }

    public function create()
    {
        return view('anak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required',
        ]);

        Anak::create($request->all());

        return redirect()->route('anak.index')
            ->with('success', 'Data anak berhasil ditambahkan');
    }

    public function edit(Anak $anak)
    {
        return view('anak.edit', compact('anak'));
    }

    public function update(Request $request, Anak $anak)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'nama_ibu' => 'required',
        ]);

        $anak->update($request->all());

        return redirect()->route('anak.index')
            ->with('success', 'Data anak berhasil diperbarui');
    }

    public function destroy(Anak $anak)
    {
        $anak->delete();

        return redirect()->route('anak.index')
            ->with('success', 'Data anak berhasil dihapus');
    }
}
