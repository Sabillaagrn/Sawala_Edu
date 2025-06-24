@extends('layouts.app-parents')

@section('title', 'Laporan Nilai')

@section('page-title')
    <h1>Laporan Nilai</h1>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/parents/laporan-nilai.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/parents/laporan-nilai.js') }}"></script>
@endpush

@section('content')
<div class="laporan-nilai-container">
  <div class="student-info">
    <img src="{{ asset('image/karinacakepbgt.jpg') }}" alt="Avatar" class="student-avatar">
    <div class="student-details">
      <p><strong>Nama</strong> : Sabilla Anggraeni</p>
      <p><strong>NISN</strong> : 122482090</p>
      <p><strong>Nilai Rata - rata</strong> : 87</p>
    </div>
  </div>

  <div class="filters">
    <div class="custom-select-wrapper" id="kelasWrapper">
      <div class="custom-select-trigger" tabindex="0">
        <span id="selectedKelas">Kelas 10</span>
        <i class="fa-solid fa-chevron-down"></i>
      </div>
      <div class="custom-options">
        <div class="custom-option selected" data-value="10">Kelas 10</div>
        <div class="custom-option" data-value="11">Kelas 11</div>
        <div class="custom-option" data-value="12">Kelas 12</div>
      </div>
    </div>

    <div class="custom-select-wrapper" id="semesterWrapper">
      <div class="custom-select-trigger" tabindex="0">
        <span id="selectedSemester">Semester 1</span>
        <i class="fa-solid fa-chevron-down"></i>
      </div>
      <div class="custom-options">
        <div class="custom-option selected" data-value="1">Semester 1</div>
        <div class="custom-option" data-value="2">Semester 2</div>
      </div>
    </div>

    <button class="btn-cetak-rapor" onclick="window.print()">
      <i class="fa-solid fa-file-arrow-up"></i> Cetak Rapor
    </button>
  </div>

  <div class="print-info" style="display:none; margin-bottom: 10px; font-weight: bold;">
    <!-- This will be updated dynamically by JS -->
  </div>

  <div class="table-container">
    <table class="laporan-table">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Mapel</th>
          <th>Nama Mata Pelajaran</th>
          <th>Nilai</th>
          <th>Nilai Huruf</th>
        </tr>
      </thead>
      <tbody>
        <!-- Table rows will be dynamically generated -->
      </tbody>
    </table>
  </div>
</div>
@endsection
