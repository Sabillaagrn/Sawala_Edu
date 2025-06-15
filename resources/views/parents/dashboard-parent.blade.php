@extends('layouts.app-parents')

@section('content')
<div class="dashboard-container">

@push('styles')
<link rel="stylesheet" href="{{ asset('css/parents/dashboard.css') }}">
@endpush

  <main class="main-content">
    <div class="top-bar">
      <h2>Selamat datang, Sabilla’s Parents 👋</h2>
        <button class="logout-btn">Log Out</button>
    </div>

    <div class="overview-cards">
      <div class="card card-attendance">
        <i class="fas fa-calendar-check card-icon"></i>
        <div>
          <h3>97.5%</h3>
          <p>Kehadiran</p>
        </div>
      </div>
      <div class="card card-task">
        <i class="fas fa-file-alt card-icon"></i>
        <div>
          <h3>97.5%</h3>
          <p>Penugasan</p>
        </div>
      </div>
    </div>

    <div class="section section-chart">
      <div class="section-header">
        <h3>Grafik Nilai Rata-Rata</h3>
        <select class="select-kelas" id="kelasSelect">
          <option>Kelas 7</option>
          <option>Kelas 7 - 8</option>
          <option>Kelas 7 - 9</option>
        </select>
      </div>
      <canvas id="gradeChart"></canvas>
      <div class="legend">
        <span><span class="legend-box naik"></span> Naik</span>
        <span><span class="legend-box stagnan"></span> Stagnan</span>
        <span><span class="legend-box turun"></span> Turun</span>
      </div>
    </div>
  </main>

    <div class="profile-section">
      <h4>Profile</h4>
      <p>Sabilla Anggraeni</p>
      <img src="{{ asset('image/image_guru.png') }}" alt="Foto Profil">
    </div>

    <div class="notification-section">
      <h4>Notifikasi</h4>
      <div class="notif-item">
        <img src="{{ asset('image/sidebar/user1.png') }}" alt="User">
        <div>
          <b>Ichsan Taufik</b>
          <p>Selamat pagi, mohon maaf anak..</p>
        </div>
      </div>
      <div class="notif-item">
        <img src="{{ asset('image/sidebar/user2.png') }}" alt="User">
        <div>
          <b>Nama Guru</b>
          <p>Assalamualaikum Bapak/Ibu, Saya...</p>
        </div>
      </div>
      <a href="#">Lebih lengkap..</a>
    </div>
</div>
@endsection

  @push('scripts')
  <script src="{{ asset('js/guru.js') }}"></script>
  @endpush
