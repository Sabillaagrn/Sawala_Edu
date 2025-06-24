@extends('layouts.app-admin')

@section('title', content: 'Kelola Akun Siswa')

@push('styles')
  <link rel="stylesheet" href="{{ asset("css/admin/kelola_akun_siswa.css") }}">
  @endpush
@section(section: 'content')
  <div id="content">
  <div id="container">
    <div class="title">
      <h3>Detail Siswa</h3>
    </div>
    
    <!-- ini untuk link -->
    <!-- <img id="profile" style="width: 250px;" src="{{ asset('image/profile-icon.jpg') }}" alt="foto profile"> -->

     <form id="studentForm">

      <!-- ini untuk input file -->

        <div class="form-group">
            <label for="foto">Foto *</label>
            <input type="file" id="foto" name="foto" required>
        </div>
        
        <!-- ini untuk input link -->

        <!-- <div class="form-group">
            <label for="foto">Foto *</label>
            <input type="text" id="foto" name="foto" required>
        </div> -->
        <div class="form-group">
            <label for="namaSiswa">Nama Siswa *</label>
            <input type="text" id="namaSiswa" name="namaSiswa" required>
        </div>
        <div class="form-group">
            <label for="tempatLahir">Tempat, Tanggal Lahir *</label>
            <input type="text" id="tempatLahir" name="tempatLahir" required>
            <input type="date" id="tanggalLahir" name="tanggalLahir" required>
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat *</label>
            <textarea id="alamat" name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label for="namaOrangTua">Nama Orang Tua *</label>
            <input type="text" id="namaOrangTua" name="namaOrangTua" required>
        </div>
        <div class="form-group">
            <label for="nisn">NISN *</label>
            <input type="text" id="nisn" name="nisn" required>
        </div>
        <div class="form-group">
            <label for="kataSandi">Kata Sandi *</label>
            <input type="password" id="kataSandi" name="kataSandi" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas *</label>
            <select id="kelas" name="kelas" required>
                <option value="">Pilih Kelas</option>
                <option value="7">Kelas 7</option>
                <option value="8">Kelas 8</option>
                <option value="9">Kelas 9</option>
            </select>
        </div>
        <button style="height: 30px;"type="submit">Submit</button>
    </form>
  </div>
@endsection
@section(section: 'title-nav')
  <h1>Kelola Akun Siswa</h1>
  @endsection
@push('script')
  <script src="{{ asset('js/admin/kelola_akun_siswa.js') }}" defer></script>
  @endpush