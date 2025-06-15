@extends('layouts.app-admin')

@section('title', 'Profile Admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/admin/profile.css') }}">
    {{-- Font Awesome sudah di app.blade.php, tidak perlu diulang di sini --}}
@endsection

{{-- Inject judul halaman ke section 'page-title' di app.blade.php --}}
@section('page-title')
    <h1>Profile Admin</h1>
@endsection

@section('no-search', true)
@section('content')
<div class="container-profile">
    <div class="profile-header">
        <div class="profile-banner"></div>

        <div class="profile-picture">
            <i class="fa-solid fa-user"></i>
        </div>

<div class="profile-menu">
  <div class="dropdown">
    <i class="fas fa-ellipsis-v dropdown-toggle-icon" onclick="toggleDropdown()"></i>
    <div class="dropdown-menu" id="dropdownMenu">
      <a href="#"><i class="fas fa-user"></i> Akun Siswa</a>
      <a href="#"><i class="fas fa-users"></i> Akun Wali Murid</a>
    </div>
  </div>
</div>
    
    <div class="profile-body">
        <h2 class="name">Aida Meriska</h2>
        <p class="role">Admin</p>

        <div class="info-group">
            <div class="info-item"><i class="fas fa-map-marker-alt"></i> Bandung, Indonesia</div>
            <div class="info-item"><i class="fas fa-phone-alt"></i> 087581426812</div>
            <div class="info-item"><i class="fas fa-envelope"></i> Aime98@mail.com</div>
        </div>

        <div class="section">
            <h3><i class="fas fa-user"></i> About:</h3>
            <p>Lorem ipsum dolor sit amet...</p>
        </div>

        <div class="section">
            <h3><i class="fas fa-graduation-cap"></i> Education:</h3>
            <ul>
                <li><strong>History Major</strong>, University Akademi Historia<br><span class="edu-year">2013–2017</span></li>
                <li><strong>Master of History</strong>, University Akademi Historia<br><span class="edu-year">2017–2020</span></li>
            </ul>
        </div>

        <div class="section">
            <h3><i class="fas fa-lightbulb"></i> Expertise:</h3>
            <p>World History, Philosophy, Prehistoric, Culture, Ancient</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function toggleDropdown() {
        const menu = document.getElementById("dropdownMenu");
        // Menggunakan class 'show' untuk toggle display
        menu.classList.toggle("show");
    }

    window.addEventListener("click", function (e) {
        const dropdown = document.querySelector(".dropdown");
        const dropdownMenu = document.getElementById("dropdownMenu");
        // Pastikan klik di luar dropdown dan dropdown-toggle
        if (!dropdown.contains(e.target) && dropdownMenu.classList.contains("show")) {
            dropdownMenu.classList.remove("show");
        }
    });
</script>
@endsection