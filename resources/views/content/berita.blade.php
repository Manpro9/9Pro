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
    Berita
    <small>Berita mengenai PSDM UKDW</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK BERITA -->
@section('content')
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
	                <a href="{{ url('content/panelberita') }}">
                    	<label class="btn btn-default">
	                        <i class="fa fa-bullhorn"></i>Panel Berita
	                    </label>
	                </a>
                </span>
            </form>
            @endif
            <div class="row">
            	<div class="well">
                	<h1 class="text-center">Berita teratas</h1>
                	<div class="list-group">
                		@foreach($dataBerita as $berita)
	                		<a href="#" class="list-group-item">
			                  	<div class="media col-md-3">
			                        <figure class="pull-left">
			                            <img class="media-object img-rounded img-responsive"  src="{{ asset($berita->image) }}" alt="gambar berita" >
			                        </figure>
			                    </div>
		                        <div class="col-md-6">
		                            <h4 class="list-group-item-heading"> {{ $berita->title }} </h4>
		                            <p class="list-group-item-text">
		                            	{{ $berita->description }}
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
	                {{ $dataBerita->links() }}
	            </div>
          	</div>
       	</div>
    </section>
@endsection