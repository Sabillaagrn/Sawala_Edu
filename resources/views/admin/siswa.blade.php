@extends('layouts.app')

@section('title', 'Data Siswa')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/siswa.css') }}"
@endsection

@section('content')

<div class="content-toolbar">
  <button class="btn-new-student">
    <i class="fa fa-plus"></i>
    <span>New Student</span>
  </button>
</div>

<div class="table-wrapper">
  <div class="table-container">
    <table class="student-table">
      <thead>
        <tr>
          <th></th>
          <th>Nama</th>
          <th>NISN</th>
          <th>Tanggal</th>
          <th>Orang Tua</th>
          <th>Kota</th>
          <th>Nomor</th>
          <th>Kelas</th>
          <th>More</th>
        </tr>
      </thead>
      <tbody>
        {{-- List data siswa --}}
        <tr>
          <td><input type="checkbox" /></td>
          <td class="cell-nama">
            <div class="avatar-circle"></div>
            <span>Rizki Syukur</span>
          </td>
          <td>#123456777</td>
          <td class="cell-date">17 Mei 2005</td>
          <td>Adam Mahmudin</td>
          <td>Jakarta</td>
          <td class="cell-icons">
            <button class="icon-btn"><i class="fa fa-phone"></i></button>
            <button class="icon-btn"><i class="fa fa-envelope"></i></button>
          </td>
          <td><span class="badge badge-viii-a">VIII A</span></td>
          <td><i class="fa fa-ellipsis-h more-icon"></i></td>
        </tr>

        <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Sabilla Anggraeni</span>
            </td>
            <td>#123456764</td>
            <td class="cell-date">19 Juni 2005</td>
            <td>Rudi Muchtar</td>
            <td>Bandung</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-b">VII B</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Salma Nur Oktavia</span>
            </td>
            <td>#123456789</td>
            <td class="cell-date">30 Oktober 2005</td>
            <td>Dedi Kurniawan</td>
            <td>Cianjur</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-ix-c">IX C</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Sidik Abdul Jabar</span>
            </td>
            <td>#123456766</td>
            <td class="cell-date">25 Maret 2006</td>
            <td>Yoga Permana</td>
            <td>Jakarta</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VII A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Suma Renata Wijaya</span>
            </td>
            <td>#123456785</td>
            <td class="cell-date">01 Maret 2006</td>
            <td>Ahmad Jaenudin</td>
            <td>Jakarta</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-viii-a">VIII A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Tri Febriansyah</span>
            </td>
            <td>#123456797</td>
            <td class="cell-date">28 Februari 2004</td>
            <td>Danni Ahmad</td>
            <td>Jakarta</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VII A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Nama_Siswa</span>
            </td>
            <td>#1234567xx</td>
            <td class="cell-date">28 Februari 2006</td>
            <td>Nama_Ortu</td>
            <td>Kota_Siswa</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VII A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Nama_Siswa</span>
            </td>
            <td>#1234567xx</td>
            <td class="cell-date">28 Februari 2006</td>
            <td>Nama_Ortu</td>
            <td>Kota_Siswa</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VII A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Nama_Siswa</span>
            </td>
            <td>#1234567xx</td>
            <td class="cell-date">28 Februari 2006</td>
            <td>Nama_Ortu</td>
            <td>Kota_Siswa</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VII A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Nama_Siswa</span>
            </td>
            <td>#1234567xx</td>
            <td class="cell-date">28 Februari 2006</td>
            <td>Nama_Ortu</td>
            <td>Kota_Siswa</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VIII C</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Nama_Siswa</span>
            </td>
            <td>#1234567xx</td>
            <td class="cell-date">28 Februari 2006</td>
            <td>Nama_Ortu</td>
            <td>Kota_Siswa</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">VII D</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>

          <tr>
            <td><input type="checkbox" /></td>
            <td class="cell-nama">
              <div class="avatar-circle"></div>
              <span>Nama_Siswa</span>
            </td>
            <td>#1234567xx</td>
            <td class="cell-date">28 Februari 2006</td>
            <td>Nama_Ortu</td>
            <td>Kota_Siswa</td>
            <td class="cell-icons">
              <button class="icon-btn"><i class="fa fa-phone"></i></button>
              <button class="icon-btn"><i class="fa fa-envelope"></i></button>
            </td>
            <td><span class="badge badge-vii-a">IX A</span></td>
            <td><i class="fa fa-ellipsis-h more-icon"></i></td>
          </tr>
      </tbody>
    </table>
  </div>

  <div class="pagination-container">
    <div class="pagination-info">Showing 1–5 from 6 data</div>
    <div class="pagination-controls">
      <button class="pagination-arrow" disabled><i class="fa fa-chevron-left"></i></button>
      <button class="pagination-btn active">1</button>
      <button class="pagination-btn">2</button>
      <button class="pagination-arrow"><i class="fa fa-chevron-right"></i></button>
    </div>
  </div>
</div>

@endsection
