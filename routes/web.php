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

Route::get('/kelolaakun/siswa', function () {
    return view(view: 'kelola_akun_siswa');
});

Route::get('/kelolaakun/wali_kelas', function () {
    return view(view: 'kelola_akun_wali_kelas');
});
