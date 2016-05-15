@extends('layout.master')

<!-- CUSTOM CSS UNTUK BERITA -->
@section('css')
	<!-- ISIKAN DISINI -->
  <link rel="stylesheet" href="{{ asset('public/css/content/profil/profil.css' )}}">
@endsection

<!-- CUSTOM JS UNTUK BERITA -->
@section('js')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) BERITA -->
@section('content-header')
  <h1>
    Profil PSDM
    <small>Visi Misi, Job Description & Struktur Organisasi</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK BERITA -->
@section('content')

</br></br>
<div class="container" style="background-color:#ffffff;">
  <div class="box-content">
    <div class="col-sm-12">
        <div class="page-header">
          <h2>Struktur Organisasi Universitas Kristen Duta Wacana</h2>
        </div>
        <div class="col-sm-8" style="margin-left:160px; margin-bottom:50px;">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/profil/strukturUKDW.jpg') }}" alt="struktur" style="width:100%;">
                </div>
              </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="page-header">
          <h2>Struktur Internal PSDM</h2>
        </div>
      </div>
      <div class="col-sm-8" style="margin-left:160px; margin-bottom:50px;">
            <div class="carousel-inner">
              <div class="item active">
                <img src="{{ asset('public/images/profil/strukturPSDM.png') }}" alt="struktur" style="width:100%;">
              </div>
            </div>
      </div> 

      
      <div class="col-sm-12">
        <div class="page-header">
          </br>
          <h2>Tugas Pokok</h2>
        </div>
      </div>
      <div class="col-sm-8">
        <ul class="isi-profil3">
          <li>
            Membantu rektor dalam proses pengelolaan SDM
            UKDW baik PA maupun PPA. Pengelolaan yang 
            dilakukan meliputi: rekrutmen, adminstrasi 
            kepegawaian, pengembangan dan pensiun.
          </li>
          <li>
            Bekerjasama dengan fakultas dan unit UKDW 
            mengelola SDM UKDW mulai dari rekrutmen, 
            administrasi kepegawaian (kepersonaliaan) 
            pengembangan dan pensiun.
          </li>
          <li>
            Menyediakan data akreditasi bidang SDM.
          </li>
          <li>
            Melakukan perencanaan, pengembangan SDM dan 
            Evaluasi Pengembangan SDM.
          </li>
          <li>
            Melakukan persiapan pensiunan karyawan UKDW.
          </li>
          <li>
            Mengembangkan kesejahteraan karyawan.
          </li>
          <li>
            Mengevaluasi kepuasan karyawan sesuai bidang 
            kerjanya.
          </li>
        </ul>
      </div>

      <div class="col-sm-12">
        <div class="page-header">
          </br>
          <h2>Fungsi</h2>
        </div>
      </div>
      <div class="col-sm-8">
        <ul class="isi-profil4">
          <li style="padding-left:0px;">
            Melakukan pengelolaan SDM.
          </li>
          <li style="padding-left:0px;">
            Melaksanakan rekrutmen.
          </li>
          <li style="padding-left:0px;">
            Melakukan perencanaan SDM masa depan.
          </li>
        </ul>
          </br></br>
      </div>
  </div>
</div>

@endsection