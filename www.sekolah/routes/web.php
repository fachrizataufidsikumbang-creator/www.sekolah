<?php
Route::get('/', function () {
    return view('beranda', [
        'nama_kampus' => 'Universitas Erlangga Teknologi',
        'slogan' => 'Membangun Masa Depan dengan Teknologi',
        'tahun_pendaftaran' => 2026 // Tambahkan baris ini
    ]);
});
Route::get('/tentang-kami', function () {
    return view('profile.tentang'); 
});
Route::get('/pendaftaran', function () {
    return view('pendaftaran_form', [
        'nama_kampus' => 'Universitas Erlangga Teknologi',
        'tahun_pendaftaran' => 2026
    ]);
})->name('pendaftaran.form');
use App\Http\Controllers\KampusController;
Route::post('/proses-pendaftaran', [KampusController::class, 'proses'])->name('pendaftaran.proses');

use App\Http\Controllers\AuthConroller;
Route::get('/login', [AuthConroller::class, 'showLogin'])->name('login');
Route::post('/login', [AuthConroller::class, 'login']);
Route::post('/logout', [AuthConroller::class, 'logout'])->name('logout');

use App\Http\Controllers\AdminController;
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/pendaftaran', [AdminController::class, 'pendaftaran'])->name('admin.pendaftaran');
});
