@extends('layout.master')

<!-- CUSTOM CSS UNTUK KEGIATAN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK KEGIATAN -->
@section('js')
    <script type="text/javascript" src="{{asset('public/js/admin/delete_artikel.js')}}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) KEGIATAN -->
@section('content-header')
  <h1>
    <span>Kegiatan</span>
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
	                        <i class="fa fa-bullhorn"></i>Update Kegiatan Baru
	                    </label>
	                </a>
	                <a href="{{ url('content/panelkegiatan') }}">
                    	<label class="btn btn-default">
	                        <i class="fa fa-bullhorn"></i>Panel Kegiatan
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
                		<?php $title = str_slug($kegiatan['title']); ?>
	                		<a href="{{ route('kegiatan.show', $title) }}" class="list-group-item">
			                  	<div class="media col-md-3">
			                        <figure class="pull-left">
			                            <img class="media-object img-rounded img-responsive"  src="{{ asset($kegiatan->image) }}" alt="gambar kegiatan" >
			                        </figure>
			                    </div>
		                        <div class="col-md-6">
		                            <h4 class="list-group-item-heading title-delete"> {{ $kegiatan->title }} </h4>
		                            <p class="list-group-item-text">
		                            	{{ $kegiatan->description }}
		                            </p>
		                        </div>
		                        @if (Auth::user())
		                        <div class="col-md-3 text-center">
		                            <button type="button" class="btn btn-info btn-lg btn-sm edit_artikel" href="#" value="{{ $kegiatan->id }}"  from="kegiatan" role="edit"> Edit </button>
		                            <button type="button" class="btn btn-danger btn-lg btn-sm delete_artikel" href="#" value="{{ $kegiatan->id }}"> Delete </button>
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