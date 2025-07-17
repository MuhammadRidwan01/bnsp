<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil-sekolah', function () {
    return view('profil-sekolah');
});

Route::get('/ekstrakurikuler', function () {
    return view('ekstrakurikuler');
});

Route::get('/galeri', function () {
    return view('galeri');
});
