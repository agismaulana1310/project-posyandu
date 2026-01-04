<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Penimbangan;
use App\Models\Anak;

class DashboardOrtuController extends Controller
{
    public function index()
    {
        $anak = Anak::where('user_id', Auth::id())->first();

        $penimbangans = Penimbangan::where('anak_id', $anak->id)
            ->orderBy('tanggal')
            ->get();

        return view('dashboard.ortu', compact('anak', 'penimbangans'));
    }
}
