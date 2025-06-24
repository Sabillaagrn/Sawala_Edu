<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nis_siswa',
        'nip',
        'name',
        'email',
        'password',
        'role',
        'class',
        'phone',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    // Relasi
    public function kelasWali()
    {
        return $this->hasMany(Classes::class, 'wali_kelas_id');
    }

    // Scope untuk role
    public function scopeSiswa($query)
    {
        return $query->where('role', 'siswa');
    }

    public function scopeWaliKelas($query)
    {
        return $query->where('role', 'wali_kelas');
    }

    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    // Helper methods
    public function isSiswa()
    {
        return $this->role === 'siswa';
    }

    public function isWaliKelas()
    {
        return $this->role === 'wali_kelas';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}