@extends('layouts.app-admin')

@section('title', 'Data Guru - Sawala Edu')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/admin/guru.css') }}"
@endsection


@section('content')
  <div class="header">
    <h1>Data Guru</h1>
  </div>

  <div class="grid">
    <div class="card">
      <i class="fa-solid fa-user table-icon"></i>
      <h3>Hendra Saputra S.Pd</h3>
      <p>Matematika</p>
      <div class="actions">
        <button><i class="fas fa-phone"></i></button>
        <button><i class="fas fa-envelope"></i></button>
      </div>
    </div>

    <div class="card">
      <i class="fa-solid fa-user table-icon"></i>
      <h3>Rina Kusuma M.Pd</h3>
      <p>Fisika</p>
      <div class="actions">
        <button><i class="fas fa-phone"></i></button>
        <button><i class="fas fa-envelope"></i></button>
      </div>
    </div>

    <div class="card">
      <i class="fa-solid fa-user table-icon"></i>
      <h3>Dewi Lestari S.Pd</h3>
      <p>Kimia</p>
      <div class="actions">
        <button><i class="fas fa-phone"></i></button>
        <button><i class="fas fa-envelope"></i></button>
      </div>
    </div>

    <div class="card">
      <i class="fa-solid fa-user table-icon"></i>
      <h3>Adi Nugroho M.Pd</h3>
      <p>Biologi</p>
      <div class="actions">
        <button><i class="fas fa-phone"></i></button>
        <button><i class="fas fa-envelope"></i></button>
      </div>
    </div>

    <div class="card">
      <i class="fa-solid fa-user table-icon"></i>
      <h3>Nina Marlina S.Pd</h3>
      <p>Bahasa Inggris</p>
      <div class="actions">
        <button><i class="fas fa-phone"></i></button>
        <button><i class="fas fa-envelope"></i></button>
      </div>
    </div>

    <div class="card">
      <i class="fa-solid fa-user table-icon"></i>
      <h3>Arief Rahman M.Pd</h3>
      <p>Sejarah</p>
      <div class="actions">
        <button><i class="fas fa-phone"></i></button>
        <button><i class="fas fa-envelope"></i></button>
      </div>
    </div>

    <!-- Tambahkan data card lainnya di sini -->
  </div>

  <!--===============================
              SLIDE PAGING
  ===============================-->
  <div class="pagination-container">
    <div class="pagination-info" id="pagination-info">
      Showing <strong>1-5</strong> from <strong>100</strong> data
    </div>
    <div class="pagination-controls" id="pagination-controls">
      <button class="pagination-arrow">
        <i class="fa-solid fa-angle-left"></i>
      </button>
      <button class="pagination-btn active">1</button>
      <button class="pagination-btn">2</button>
      <button class="pagination-btn">3</button>
      <button class="pagination-arrow">
        <i class="fa-solid fa-angle-right"></i>
      </button>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('js/admin/guru.js') }}"></script>
@endpush
