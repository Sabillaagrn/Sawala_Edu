<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// Default route
Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/guru', function () {
        return view('admin.guru');
    });

    Route::get('/siswa', function () {
        return view('admin.siswa');
    });

    Route::get('/akun', function () {
        return view('admin.akun');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
});


/*
|--------------------------------------------------------------------------
| Parent Routes
|--------------------------------------------------------------------------
*/
Route::prefix('parents')->group(function () {
    Route::get('/dashboard', function () {
        return view('parents.dashboard-parent');
    });

    Route::get('/laporan-nilai', function () {
        return view('parents.laporan-nilai');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('parents.profile');
});
