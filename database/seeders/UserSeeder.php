<?php
// database/seeders/UserSeeder.php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Admin
        User::create([
            'nip' => 'ADM001',
            'name' => 'Admin Sawala Edu',
            'email' => 'admin@sawalaedu.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        // Wali Kelas
        User::create([
            'nip' => 'WK001',
            'name' => 'Ibu Sari Wali Kelas',
            'email' => 'sari@sawalaedu.com',
            'password' => Hash::make('walikelas123'),
            'role' => 'wali_kelas',
            'is_active' => true,
        ]);

        // Siswa
        User::create([
            'nis_siswa' => '2024001',
            'name' => 'Ahmad Siswa',
            'email' => 'ahmad@sawalaedu.com',
            'password' => Hash::make('siswa123'),
            'role' => 'siswa',
            'class' => 'X-IPA-1',
            'is_active' => true,
        ]);
    }
}