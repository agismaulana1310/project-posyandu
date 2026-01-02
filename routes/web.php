<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\ImunisasiController;
use App\Http\Controllers\PenimbanganController;

/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

/*
|--------------------------------------------------------------------------
| DASHBOARD SESUAI ROLE
|--------------------------------------------------------------------------
*/

// ADMIN
Route::middleware(['auth','role:admin'])->get('/admin/dashboard', function () {
    return view('dashboard.admin');
})->name('admin.dashboard');

// KADER
Route::middleware(['auth','role:kader'])->get('/kader/dashboard', function () {
    return view('dashboard.kader');
})->name('kader.dashboard');

// ORANG TUA
Route::middleware(['auth','role:ortu'])->get('/ortu/dashboard', function () {
    return view('dashboard.ortu');
})->name('ortu.dashboard');

/*
|--------------------------------------------------------------------------
| PROFILE (DEFAULT BREEZE)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| CRUD DATA POSYANDU (ADMIN & KADER)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','role:admin,kader'])->group(function () {
    Route::resource('anak', AnakController::class);
    Route::resource('imunisasi', ImunisasiController::class);
    Route::resource('penimbangan', PenimbanganController::class);
});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (LOGIN, REGISTER, LOGOUT)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
