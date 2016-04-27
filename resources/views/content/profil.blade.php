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
    Job des
    <small>Detail Artikel</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK BERITA -->
@section('content')
<div class="col-sm-9" style="text-align:left;">

	<div class="row-fluid sortable">

		<div class="box-content">
			  <div class="page-header">
				  <h1>Profil PSDM</h1>
			  </div>     
        <div class="col-sm-8">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/profil/struktur.png') }}" alt="struktur" style="width:100%;">
                </div>
              </div>
        </div>
		</div>

    </div>
</div>

@endsection