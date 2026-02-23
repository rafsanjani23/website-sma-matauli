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
