@extends('layouts.app-parents')

@section('content')
<div class="dashboard-container">
  {{-- MAIN CONTENT DASHBOARD --}}
  <div class="dashboard-main">
    <div class="top-bar">
      <h2>Selamat datang, Sabilla’s Parents 👋</h2>
      <div class="top-actions">
      </div>
    </div>

    <div class="overview-cards">
      <div class="card card-attendance">
        <i class="fas fa-calendar-check card-icon"></i>
        <div class="card-text">
          <h3>97.5%</h3>
          <p>Kehadiran</p>
        </div>
      </div>
      <div class="card card-task">
        <i class="fas fa-file-alt card-icon"></i>
        <div class="card-text">
          <h3>97.5%</h3>
          <p>Penugasan</p>
        </div>
      </div>
    </div>

    <div class="section section-chart">
      <div class="section-header">
        <h3>Grafik Nilai Rata-Rata</h3>
      <div class="custom-select-wrapper">
        <div class="custom-select-trigger">
          <span id="selectedKelas">Kelas 7</span>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="custom-options">
          <div class="custom-option" data-value="kelas7">Kelas 7</div>
          <div class="custom-option" data-value="kelas7-8">Kelas 7 - 8</div>
          <div class="custom-option" data-value="kelas7-9">Kelas 7 - 9</div>
        </div>
      </div>

      </div>
      <div class="chart-wrapper">
        <canvas id="gradeChart"></canvas>
      </div>
      <div class="legend">
        <span><span class="legend-box naik"></span> Naik</span>
        <span><span class="legend-box stagnan"></span> Stagnan</span>
        <span><span class="legend-box turun"></span> Turun</span>
      </div>
    </div>
  </div>

  {{-- RIGHT PANEL: Profile + Notifikasi --}}
  <div class="right-panel">
    <div class="profile-section">
      <h4>Profile</h4>
      <p>Sabilla Anggraeni</p>
      <i class="fas fa-user-circle profile-icon"></i>
    </div>

    <div class="notification-section">
      <h4>Notifikasi</h4>
      <div class="notif-item">
        <i class="fa-solid fa-user notif-icon"></i>
        <div class="notif-text">
          <b>Ichsan Taufik</b>
          <p>Selamat pagi, mohon maaf anak..</p>
        </div>
      </div>
      <div class="notif-item">
         <i class="fa-solid fa-user notif-icon"></i>
        <div class="notif-text">
          <b>Nama Guru</b>
          <p>Assalamualaikum Bapak/Ibu, Saya...</p>
        </div>
      </div>
      <a href="#" class="notif-more">Lebih lengkap..</a>
    </div>
  </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/parents/dashboard.css') }}">
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/parents/dashboard-parent.js') }}"></script>
@endpush
