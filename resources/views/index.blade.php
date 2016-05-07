@extends('layout.master')

<!-- CUSTOM CSS UNTUK INDEX -->
@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/content/index/index.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/content/index/slider.css' )}}">

@endsection

<!-- CUSTOM JS UNTUK INDEX -->
@section('js')
    <script type="text/javascript" src="{{ asset('public/js/slider/slider.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/index/ajax-artikel.js') }}"></script>
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
              kalender
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
    </div>
    <div class="col-sm-3">
          <h4 style="text-align: left; margin-bottom:0px;"><b>Daftar Agenda - bulan dan tahun yg aktif </b></h4>
          <HR style="margin-top: 5px; margin-bottom: 15px;">
          <p style="padding-left:20px; color:maroon;"><b>1-5 Februari 2016</b></p>
          <h5 style="padding-left:40px;">Kuliah Minggu II</h5></br>

          <p style="padding-left:20px; color:maroon;"><b>1-5 Februari 2016</b></p>
          <h5 style="padding-left:40px;">Kuliah Minggu II</h5></br>

          <p style="padding-left:20px; color:maroon;"><b>1-5 Februari 2016</b></p>
          <h5 style="padding-left:40px;">Kuliah Minggu II</h5></br>
      </div>
  </div>
  </section>
@endsection