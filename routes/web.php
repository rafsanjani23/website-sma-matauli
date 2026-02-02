<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('pages.home');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
<<<<<<< HEAD
=======
Route::get('/visi-misi', function () {
    return view('visi-misi');
})->name('visi-misi');
>>>>>>> main
