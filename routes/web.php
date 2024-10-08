<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('navigasi');
});


Route::get('/data-siswa', function () {
    return view('data-siswa');
})->name('data-siswa');

Route::get('/poin-siswa', function () {
    return view('tbl-poin');
})->name('poin-siswa');

Route::get('/keterangan-poin', function () {
    return view('data-aturan');
})->name('keterangan-poin');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/pengaturan-akun', function () {
    return view('pengaturan');
})->name('pengaturan-akun');

Route::get('/input-poin', function () {
    return view('inputpoin');
})->name('input-poin');

Route::get('/formulir-nama', function () {
    return view('formulir');
})->name('formulir-nama');

Route::get('/formulir-nis', function () {
    return view('form-nis');
})->name('formulir-nis');

Route::get('/nambah-data', function () {
    return view('nambah-siswa');
})->name('nambah-data');

Route::get('/edit-data', function () {
    return view('edit-siswa');
})->name('edit-data');

Route::get('/tambah-atur', function () {
    return view('tambah-aturan');
})->name('tambah-atur');

Route::get('/peringatan', function () {
    return view('peringatan');
})->name('peringatan');

Route::get('/poin12', function () {
    return view('teguran');
})->name('poin12');

Route::get('/poin18', function () {
    return view('tertulis');
})->name('poin18');

Route::get('/poin22', function () {
    return view('surat-ortu');
})->name('poin22');

Route::get('/poin50', function () {
    return view('panggilan');
})->name('poin50');

Route::get('/poin75', function () {
    return view('materai');
})->name('poin75');

Route::get('/poin100', function () {
    return view('skors-pertama');
})->name('poin100');

Route::get('/poin135', function () {
    return view('skors-kedua');
})->name('poin135');

Route::get('/poin200', function () {
    return view('rekomen');
})->name('poin200');

Route::get('/admin/settings', [AdminController::class, 'showSettings']);
Route::post('/admin/add-user', [AdminController::class, 'pengaturan'])->name('pengaturan');

Route::get('/search', function (Request $request) {
    $query = $request->input('search');
    // Logika pencarian atau pengembalian view dengan hasil pencarian
    return view('search-results', ['query' => $query]);
})->name('search');
