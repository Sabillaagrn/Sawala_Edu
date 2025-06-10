<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login/login');
});

Route::get('/login', function () {
    return view('login/login');
})->name('login');

Route::get('/login/guru', function () {
    return view('login/login_waliKelas');
})->name('login_waliKelas');

Route::get('/login/admin', function () {
    return view('login/login_admin');
})->name('login_admin');

Route::get('/dashboard', function () {
kelola_akun
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

    return view('admin/dashboard');
});

Route::get('/guru', function () {
    return view('admin/guru');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});
main
