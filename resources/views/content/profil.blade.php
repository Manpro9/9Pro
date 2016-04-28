@extends('layout.master')

<!-- CUSTOM CSS UNTUK BERITA -->
@section('css')
	<!-- ISIKAN DISINI -->
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

	<div class="row-fluid sortable">

		<div class="box-content">
        <div class="page-header">
          <h1>Struktur Organisasi Universitas Kristen Duta Wacana</h1>
        </div>
        <div class="col-sm-8">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/profil/strukturUKDW.jpg') }}" alt="struktur" style="width:100%;">
                </div>
              </div>
        </div>             

			  <div class="page-header">
				  <h1>Struktur Internal PSDM</h1>
			  </div>
        <div class="col-sm-8">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/profil/strukturPSDM.png') }}" alt="struktur" style="width:100%;">
                </div>
              </div>
        </div>             
        <div class="page-header">
          <h1>Visi & Misi</h1>
        </div>

        <div class="page-header">
          <h1>Job Description</h1>
        </div>
        <ul>
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

</div>

@endsection