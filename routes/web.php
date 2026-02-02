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
