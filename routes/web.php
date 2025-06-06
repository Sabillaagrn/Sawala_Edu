<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
});

Route::get('/kelolaakun', function () {
    return view(view: 'kelola_akun');
});

Route::get('/guru', function () {
    return view('guru');
});