@extends('layouts.app')

@section('title', 'Data Guru - Sawala Edu')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/guru.css') }}">
@endpush

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
  <script src="{{ asset('js/guru.js') }}"></script>

  <!--===============================
            SCRIPT COLLAPSE
  ===============================-->
  <script>
    const ResizeBtn = document.querySelector('[data-resize-btn]');
    if (ResizeBtn) {
      ResizeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        document.body.classList.toggle('sb-expanded');
      });
    }
  </script>
@endpush
