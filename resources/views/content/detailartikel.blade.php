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
    Jenis Artikel
    <small>Detail Artikel</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK BERITA -->
@section('content')
<div class="col-sm-9" style="text-align:left;">

	<div class="row-fluid sortable">

		<div class="box-content">
			  <div class="page-header">
				  <h1>Entah Berhasil atau Gagal Memotret Gerhana, Belitung Telah Berpesta <small class="date">Mar 31, 2016</small></h1>
			  </div>     
        <div class="col-sm-8">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/02.jpg') }}" alt="gambar1" style="width:100%;">
                </div>
              </div>
        </div>

			  <div class="row-fluid">            
				  <div class="span4">
					<h3>Sample text and paragraphs</h3>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.
					</p>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. Nulla tellus elit, varius non commodo eget, mattis vel eros. In sed ornare nulla. Donec consectetur, velit a pharetra ultricies, diam lorem lacinia risus, ac commodo orci erat eu massa. Sed sit amet nulla ipsum. Donec felis mauris, vulputate sed tempor at, aliquam a ligula. Pellentesque non pulvinar nisi.
					</p>
				  </div>
			  </div>
		</div>

    </div>
</div>

@endsection