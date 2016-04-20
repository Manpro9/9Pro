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
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg?width=300&height=200&scale=upscalecanvas" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                              
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg?width=300&height=200&scale=upscalecanvas" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg?width=300&height=200&scale=upscalecanvas" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>
                                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" />
                <p class="deskripsifoto">Deskripsi Foto</p>
                </div>

                <div class="clearfix"></div>
                            <ul class="pagination pull-right">
                              <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                              <li class="active"><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                            </ul>
                
                @if(Auth::user())
                <form>
                    <span >
                        <a href="{{ url('/content/upload') }}">
                        <label class="btn btn-default">
                            <i class="fa fa-upload"></i>upload file
                        </label>
                        </a>
                    </span>
                </form>
                @endif                                    
                        
                        
            </div>
        </div>

      

    </section>
@endsection