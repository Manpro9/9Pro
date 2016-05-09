@extends('layout.master')

<!-- CUSTOM CSS UNTUK GALLERY -->
@section('css')
	<!-- ISIKAN DISINI -->
	<link rel="stylesheet" href="{{ asset('public/css/content/gallery/gallery.css' )}}">
@endsection

<!-- CUSTOM JS UNTUK GALLERY -->
@section('js')
    <!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) GALLERY -->
@section('content-header')
  <h1>
    Gallery
    <small>Foto-foto</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK GALLERY -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
                                     
        <div class="container">
            <div class="row">
                @foreach($data as $gallery)
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <?php 
                        $title = str_slug($gallery['title']);
                        if ($gallery['type'] == 'berita')
                            $route = 'berita.show';
                        else if ($gallery['type'] == 'kegiatan')
                            $route = 'kegiatan.show';

                        $image = substr($gallery['image'], 1);
                        $image = strtr($image, "\\", "/");    
                     ?>
                    <a href="{{ route($route, $title) }}">
                        <img id="gallery" class="img-responsive" style="width: 220px; height: 171px;"  src="{{ asset($image) }}" />
                    </a>
                <p class="deskripsifoto">{{ $gallery->description }}</p>
                </div>
                @endforeach

                <div class="clearfix"></div>
                {{ $data->links() }}
                
                @if(Auth::user())
                    @if(Auth::user()->auth_level == 1)
                    <form>
                        <span >
                            <a href="{{ url('/content/upload') }}">
                            <label class="btn btn-default">
                                <i class="fa fa-upload"></i> Unggah file
                            </label>
                            </a>
                        </span>
                    </form>
                    @endif                                    
                @endif
                        
            </div>
        </div>

      

    </section>
@endsection