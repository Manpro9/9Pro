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
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg?width=300&height=200&scale=upscalecanvas" />
                </div>

                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" />
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" />
                </div>
                              
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg?width=300&height=200&scale=upscalecanvas" />
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://th03.deviantart.net/fs70/200H/f/2010/256/0/9/painting_of_nature_by_dhikagraph-d2ynalq.jpg" />
                </div>
                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://2.bp.blogspot.com/-H6MAoWN-UIE/TuRwLbHRSWI/AAAAAAAABBk/89iiEulVsyg/s400/Free%2BNature%2BPhoto.jpg" />
                </div>
                                
                <div class="col-md-3 col-sm-4 col-xs-6"><img id="gallery" class="img-responsive" src="http://blog.arborday.org/wp-content/uploads/2013/02/NEC1-300x200.jpg" />
                </div>
                           
                        <form>
                            <span >
                                <a href="{{ url('/content/upload') }}">
                                <label class="btn btn-default">
                                    <i class="fa fa-upload"></i>upload file
                                </label>
                                </a>
                            </span>
                        </form>
                                                            
                        
                        
            </div>
        </div>

      

    </section>
@endsection