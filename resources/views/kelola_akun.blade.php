@extends('layout')

@section('title', content: 'Kelola Akun')

@push('styles')
  <link rel="stylesheet" href="{{ asset("css/kelola_akun.css") }}">
  @endpush

  @section('title-nav')
  <h1>Kelola Akun</h1>
  @endsection

@section(section: 'content')
  <div id="content">
  <div id="container">
    <div class="title">
      <h3>Pilih Akun</h3>
    </div>
    <div class="wraps">
      <div class="wrap_button">
        <button id="dropdown" class="dropdown">Akun</button>
        <div id="dropdown_list" class="button_account">
          <button id="button_siswa">Akun Siswa</button>
          <button id="button_wali">Akun Wali Kelas</button>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection

@push('script')
  <script src="{{ asset('js/kelola_akun.js') }}" defer></script>
  @endpush