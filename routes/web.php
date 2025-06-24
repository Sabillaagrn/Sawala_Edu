<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Route untuk login

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication Routes - sesuai dengan struktur view Anda
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/login/guru', [AuthController::class, 'showWaliKelasLoginForm'])->name('login_waliKelas');
Route::post('/login/guru', [AuthController::class, 'loginWaliKelas']);

Route::get('/login/admin', [AuthController::class, 'showAdminLoginForm'])->name('login_admin');
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware(['auth'])->group(function () {
    // Siswa Routes
    Route::middleware(['role:siswa'])->prefix('siswa')->group(function () {
        Route::get('/dashboard', function () {
            return view('siswa.dashboard');
        })->name('siswa.dashboard');
    });

    // Wali Kelas Routes  
    Route::middleware(['role:wali_kelas'])->prefix('wali-kelas')->group(function () {
        Route::get('/dashboard', function () {
            return view('wali-kelas.dashboard');
        })->name('waliKelas.dashboard');
    });

    // Admin Routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });
});

// Route untuk admin

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/guru', function () {
    return view('admin.guru');
});

Route::get('/admin/siswa', function () {
    return view('admin.siswa');
});

Route::get('/kelolaakun', function () {
    return view(view: 'admin.kelola_akun');
});

Route::get('/kelolaakun/siswa', function () {
    return view(view: 'admin.kelola_akun_siswa');
});

Route::get('/kelolaakun/wali_kelas', function () {
    return view(view: 'admin.kelola_akun_wali_kelas');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});


// Route untuk walikelas

Route::get('/waliKelas/dashboard', function () {
    return view(view: 'waliKelas.dashboard');
});

Route::get('/waliKelas/input_nilai', function () {
    return view(view: 'waliKelas.input_nilai');
});

Route::get('/waliKelas/input_absensi', function () {
    return view(view: 'waliKelas.input_absensi');
});

Route::get('/waliKelas/profile', function () {
    return view(view: 'waliKelas.profile');
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

    Route::get('/profile', function () {
    return view('parents.profile');
});
});