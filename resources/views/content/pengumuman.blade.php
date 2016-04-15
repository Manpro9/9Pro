@extends('layout.master')

<!-- CUSTOM CSS UNTUK PENGUMUMAN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK PENGUMUMAN -->
@section('js')
    <!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) PENGUMUMAN -->
@section('content-header')
  <h1>
    Pengumuman
    <small>Publish pengumuman</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK PENGUMUMAN -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
        <div class="container">
            <form style="text-align: right">
                <span>
                    <a href="{{ url('content/edit') }}">
                    	<label class="btn btn-default">
	                        <i class="fa fa-bullhorn"></i>Update Berita Baru
	                    </label>
	                </a>
                </span>
            </form>
            <div class="row">
            	<div class="well">
                	<h1 class="text-center">Berita teratas</h1>
                	<div class="list-group">
                		@foreach($dataPengumuman as $pengumuman)
	                		<a href="#" class="list-group-item">
			                  	<div class="media col-md-3">
			                        <figure class="pull-left">
			                            <img class="media-object img-rounded img-responsive"  src="{{ asset($pengumuman->image) }}" alt="gambar pengumuman" >
			                        </figure>
			                    </div>
		                        <div class="col-md-6">
		                            <h4 class="list-group-item-heading"> {{ $pengumuman-> title }} </h4>
		                            <p class="list-group-item-text">
		                            	{{ $pengumuman->description }}
		                            </p>
		                        </div>
		                        <div class="col-md-3 text-center">
		                            <button type="button" class="btn btn-default btn-lg btn-block"> Edit </button>
		                        </div>
		                    </a>
	                    @endforeach
	                </div>

					<!--page number-->
	                {{ $dataPengumuman->links() }}
                </div>
      		</div>
    	</div>
    </section>
@endsection