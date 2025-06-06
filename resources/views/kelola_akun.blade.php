@extends('layout')

@section('title', content: 'Kelola Akun')

@push('styles')
  <link rel="stylesheet" href="{{ asset("css/kelola_akun.css") }}">
  @endpush
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
          <button id="button_wali">Akun Wali Murid</button>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
@push('script')
  <script src="{{ asset('js/kelola_akun.js') }}" defer></script>
  @endpush




















<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sawala Edu</title>
  <link rel="stylesheet" href="{{ asset('css/kelola_akun.css') }}">
  <script src="{{ asset('js/kelola_akun.js') }}" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="icon" type="image/png" href="{{ asset('logo.jpg') }}">
</head>
<body>
  <main id="main">
    <div id="header">
      <div class="title">
          <h1>Kelola Akun</h1>
      </div>
      <div class="buttons">
        <button>
          Logout
        </button>
        <img src="../image/img.jpg" alt=""/>
      </div>
    </div>

    <div id="content">
    </div>
  </main>
  <div id="title">

  </div>
  <aside class ="sidebar">
    <div class="sidebar-header">
      <h2>Sawala Edu</h2>
    </div>
    <nav>
      <a href="#" class="active">Dashboard</a>
      <a href="#">Guru</a>
      <a href="#">Siswa</a>
      <a href="#">Kelola Akun</a>
      <a href="#">Profile</a>
    </nav>
  </aside>
</body>
</html> -->