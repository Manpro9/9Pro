@extends('layout.master')

<!-- CUSTOM CSS UNTUK INDEX -->
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/content/index/index.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/content/index/slider.css' )}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/calendar/css/responsive-calendar.css') }}">

@endsection

<!-- CUSTOM JS UNTUK INDEX -->
@section('js')
    <script type="text/javascript" src="{{ asset('public/js/slider/slider.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/index/ajax-artikel.js') }}"></script>
@endsection

@section('jsInsideBody')
  <script type="text/javascript" src="{{ asset('public/calendar/js/responsive-calendar.js') }}"></script>
  <script type="text/javascript" src="{{ asset('public/js/index/calendar.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT UNTUK INDEX -->
@section('content')
  <section class="content" style="padding-top:0%;">
    <div class="container">
      <div class="row">
        @if(Session::has('error_message'))
            <div class="alert alert-danger">
                <strong>Warning!</strong> {{ Session::get('error_message') }}
            </div>
        @endif
        <div class="col-sm-9">
          <div id="Carousel1" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/02.jpg') }}" alt="gambar1" style="width:100%;">
                  <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
                   Slide 1
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('public/images/04.jpg') }}" alt="gambar2"  style="width:100%;">
                   <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
                   Slide 2
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('public/images/05.jpg') }}" alt="gambar3"  style="width:100%;">
                   <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
                   Slide 3
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('public/images/09.jpg') }}" alt="gambar4"  style="width:100%;">
                   <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
                   Slide 4
                  </div>
                </div> 

                <!-- Controls -->
              <a class="left carousel-control" href="#Carousel1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#Carousel1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>          
              </div>
            </div>
        </div>
        <div class="col-sm-3">
          <h4 style="text-align:left; margin-bottom:0px;"><b>AGENDA</b></h4>
        </br>
            <div class="col-sm-12">
              <!-- Responsive calendar - START -->
              <div class="responsive-calendar">
                <div class="controls">
                    <a class="pull-left change-month" data-go="prev"><div class="btn btn-info"><i class="fa fa-angle-double-left" aria-hidden="true"></i></div></a>
                    <h4><span data-head-year class="thisYear"></span> <span data-head-month class="thisMonth"></span></h4>
                    <a class="pull-right change-month" data-go="next"><div class="btn btn-info"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div></a>
                </div><hr/>
                <div class="day-headers">
                  <div class="day header">Min</div>
                  <div class="day header">Sen</div>
                  <div class="day header">Sel</div>
                  <div class="day header">Rab</div>
                  <div class="day header">Kam</div>
                  <div class="day header">Jum</div>
                  <div class="day header">Sab</div>     
                </div>
                <div class="days" data-group="days">
                  <!-- the place where days will be generated -->
                </div>
              </div>
              <!-- Responsive calendar - END -->
            </div>
        </div>
      </div>  
      </br></br>
      <div class="row">
          <div class="col-sm-7">
            <h3><b>KATEGORI</b></h3>
             <ul class="nav nav-pills nav-justified">
            <li class="ajax-artikel active" style="text-align:center;"><a>Berita</a></li>
            <li class="ajax-artikel" style="text-align:center;"><a>Kegiatan</a></li>
            </ul>
            <br>
              <div id="content-artikel-ajax">
                 @include('artikel-ajax')
              </div>
          </div>
                <div class="col-sm-2">
                <h3><b>Tautan</b></h3>
                    <a href="http://ukdw.ac.id/" target="blank"><button class="buttonT" style="vertical-align:middle"><span>UKDW </span></button></a>
                    <a href="http://vhost.ti.ukdw.ac.id/~manpro7" target="blank"><button class="buttonT" style="vertical-align:middle"><span>Humas </span></button></a>
                    <a href="#" ><button class="buttonT" style="vertical-align:middle"><span>Biro 1 </span></button></a>
                    <a href="#" ><button class="buttonT" style="vertical-align:middle"><span>Biro 3 </span></button></a>
                    <a href="#" ><button class="buttonT" style="vertical-align:middle"><span>PPP </span></button></a>
                                        
                </div>
      


      <div class="col-sm-3">
          <h4 style="text-align: left; margin-bottom:0px;"><b>Daftar Agenda - <span class="active-month-ajax">bulan dan tahun yg aktif</span> </b></h4>
          <HR style="margin-top: 5px; margin-bottom: 15px;">
          <!-- Jangan dihapus -->
          <div class="month-agenda-ajax">

          </div>
      </div>
  </div>
  </section>
@endsection