<?php
// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    // Tampilkan halaman login siswa
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Tampilkan halaman login wali kelas
    public function showWaliKelasLoginForm()
    {
        return view('login.login_waliKelas');
    }

    // Tampilkan halaman login admin
    public function showAdminLoginForm()
    {
        return view('login.login_admin');
    }

    // Proses login siswa
    public function login(Request $request)
    {
        $request->validate([
            'nis_siswa' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('nis_siswa', $request->nis_siswa)
                   ->where('role', 'siswa')
                   ->where('is_active', true)
                   ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'nis_siswa' => ['NIS atau password tidak valid.'],
            ]);
        }

        Auth::login($user, $request->boolean('remember_me'));

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'redirect' => url ('/dashboard')
        ]);
    }

    // Proses login wali kelas
    public function loginWaliKelas(Request $request)
    {
        $request->validate([
            'nip' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('nip', $request->nip)
                   ->where('role', 'wali_kelas')
                   ->where('is_active', true)
                   ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'nip' => ['NIP atau password tidak valid.'],
            ]);
        }

        Auth::login($user, $request->boolean('remember_me'));

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'redirect' => url ('/waliKelas/dashboard')
        ]);
    }

    // Proses login admin
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'nip' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('nip', $request->nip)
                   ->where('role', 'admin')
                   ->where('is_active', true)
                   ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'nip' => ['NIP atau password tidak valid.'],
            ]);
        }

        Auth::login($user, $request->boolean('remember_me'));

        return response()->json([
            'success' => true,
            'message' => 'Login berhasil',
            'redirect' => url ('/dashboard')
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'success' => true,
            'message' => 'Logout berhasil',
            'redirect' => route('login')
        ]);
    }
}