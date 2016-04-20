@extends('layout.master')

<!-- CUSTOM CSS UNTUK KEGIATAN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK KEGIATAN -->
@section('js')
    <!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) KEGIATAN -->
@section('content-header')
  <h1>
    Kegiatan
    <small>Berita Kegiatan PSDM</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK KEGIATAN -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
        <div class="container">
        	@if (Auth::user())
            <form style="text-align: right">
                <span>
                    <a href="{{ url('content/edit') }}">
                    	<label class="btn btn-default">
	                        <i class="fa fa-bullhorn"></i>Update Berita Baru
	                    </label>
	                </a>
                </span>
            </form>
            @endif
            <div class="row">
            	<div class="well">
                	<h1 class="text-center">Kegiatan Terbaru</h1>
                	<div class="list-group">
                		@foreach($dataKegiatan as $kegiatan)
	                		<a href="#" class="list-group-item">
			                  	<div class="media col-md-3">
			                        <figure class="pull-left">
			                            <img class="media-object img-rounded img-responsive"  src="{{ asset($kegiatan->image) }}" alt="gambar kegiatan" >
			                        </figure>
			                    </div>
		                        <div class="col-md-6">
		                            <h4 class="list-group-item-heading"> {{ $kegiatan->title }} </h4>
		                            <p class="list-group-item-text">
		                            	{{ $kegiatan->description }}
		                            </p>
		                        </div>
		                        @if (Auth::user())
		                        <div class="col-md-3 text-center">
		                            <button type="button" class="btn btn-info btn-lg btn-sm" href="/asdasd"> Edit </button>
		                            <button type="button" class="btn btn-danger btn-lg btn-sm" href="/asdasd"> Delete </button>
		                        </div>		                        
		                        @endif
		                    </a>
		                @endforeach
                	</div>

                	<!--page number-->
	                {{ $dataKegiatan->links() }}
                </div>
      		</div>
    	</div>
    </section>
@endsection