@extends('layout.master')

<!-- CUSTOM CSS UNTUK BERITA -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK BERITA -->
@section('js')
	<script type="text/javascript" src="{{asset('public/js/admin/delete_artikel.js')}}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) BERITA -->
@section('content-header')
  <h1>
    <span>Berita</span>
    <small>Berita mengenai PSDM UKDW</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK BERITA -->
@section('content')
	<section class="content">
        <div class="container">
        	@if(Auth::user())
	            @if (Auth::user()->auth_level == 1)
	            <form style="text-align: right">
	                <span>
	                    <a href="{{ url('content/create') }}">
	                    	<label class="btn btn-default">
		                        <i class="fa fa-bullhorn"></i> Buat Berita Baru
		                    </label>
		                </a>
		                <a href="{{ url('content/panelberita') }}">
	                    	<label class="btn btn-default">
		                        <i class="fa fa-bullhorn"></i> Panel Berita
		                    </label>
		                </a>
	                </span>
	            </form>
	            @endif
            @endif
            <div class="row">
            	<div class="well">
                	<h1 class="text-center">Berita teratas</h1>
                	<div class="list-group">
                		@foreach($dataBerita as $berita)
                		<?php $title = str_slug($berita['title']); ?>
	                		<a href="{{ route('berita.show', $title) }}" class="list-group-item">
			                  	<div class="media col-md-3">
			                        <figure class="pull-left">
			                            <img class="media-object img-rounded img-responsive" style="height:150px;" src="{{ asset($berita->image) }}" alt="gambar berita" >
			                        </figure>
			                    </div>
		                        <div class="col-md-6">
		                            <h4 class="list-group-item-heading title-delete"> {{ $berita->title }} </h4>
		                            <p class="list-group-item-text">
		                            	{{ $berita->description }}
		                            </p>
		                        </div>
		                        @if(Auth::user())
			                        @if (Auth::user()->auth_level == 1)
			                        <div class="col-md-3 text-center">
			                            <button type="button" class="btn btn-info btn-lg btn-sm edit_artikel" href="#" value="{{ $berita->id }}"  from="berita" role="edit"> Ubah </button>
			                            <button type="button" class="btn btn-danger btn-lg btn-sm delete_artikel" href="#" value="{{ $berita->id }}"> Hapus </button>
			                        </div>
			                       	@endif
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