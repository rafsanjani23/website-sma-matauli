<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/sejarah', function () {
    return view('pages.sejarah');
})->name('sejarah');
Route::get('/visi-misi', function () {
    return view('pages.visi-misi');
})->name('visi-misi');
Route::get('/struktur', function () {
    return view('pages.struktur');
})->name('struktur');
Route::get('/tendik', function () {
    return view('pages.tendik');
})->name('tendik');
Route::get('/fasilitas', function () {
    return view('pages.fasilitas-sekolah');
})->name('fasilitas');
Route::get('/ekstrakurikuler', function () {
    return view('pages.ekstrakurikuler');
})->name('ekstrakurikuler');
Route::get('/mitra', function () {
    return view('pages.mitra-list');
})->name('mitra');
Route::get('/mitra-detail', function () {
    return view('pages.mitra-detail');
})->name('mitra-detail');
Route::get('/program-kemataulian', function () {
    return view('pages.program-kemataulian');
})->name('program-kemataulian');
Route::get('/program-ib', function () {
    return view('pages.program-ib');
})->name('program-ib');
Route::get('/fasilitas-asrama', function () {
    return view('pages.fasilitas-asrama');
})->name('fasilitas-asrama');
Route::get('/kegiatan-asrama', function () {
    return view('pages.kegiatan-asrama');
})->name('kegiatan-asrama');
Route::get('/studi-lanjut', function () {
    return view('pages.studi-lanjut');
})->name('studi-lanjut');
Route::get('/profesional-alumni', function () {
    return view('pages.profesional-alumni');
})->name('profesional-alumni');
Route::get('/galeri-foto', function () {
    return view('pages.galeri-foto');
})->name('galeri-foto');
Route::get('/galeri-video', function () {
    return view('pages.galeri-video');
})->name('galeri-video');
Route::get('/galeri-media', function () {
    return view('pages.galeri-media');
})->name('galeri-media');
