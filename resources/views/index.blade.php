@extends('layout.master')

<!-- CUSTOM CSS UNTUK INDEX -->
@section('css')
  <link rel="stylesheet" href="{{ asset('public/css/content/index/slider.css' )}}">
@endsection

<!-- CUSTOM JS UNTUK INDEX -->
@section('js')
    <script src="{{ asset('public/js/slider/slider.js')}}"></script>
@endsection

<!-- CUSTOM CONTENT UNTUK INDEX -->
@section('content')
  <section class="content" style="padding-top:0%;">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div id="Carousel1" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('public/images/02.jpg') }}" alt="gambar1" style="width:100%;">
                </div>
                <div class="item">
                  <img src="{{ asset('public/images/04.jpg') }}" alt="gambar2" style="width:100%;">
                </div>
                <div class="item">
                  <img src="{{ asset('public/images/05.jpg') }}" alt="gambar3" style="width:100%;">
                </div>
                <div class="item">
                  <img src="{{ asset('public/images/09.jpg') }}" alt="gambar4" style="width:100%;">
                </div>           
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
      <div class="col-sm-9">
        <h3><b>KATEGORI</b></h3>
        <ul class="nav nav-pills nav-justified">
            <li data-target="#target" data-slide-to="0" class="active" style="text-align:center;"><a href="#">Berita</a></li>
            <li data-target="" data-slide-to="1" style="text-align:center;"><a href="#">Kegiatan</a></li>
            <li data-target="" data-slide-to="2" style="text-align:center;"><a href="#">Pengumuman</a></li>
        </ul>
        <br>
        <div class="row" style="padding-left:2%;">
          <div class="col-sm-6" style="border:1px solid black; width:48%; margin-left:0px; padding-left:0px;padding-right:0px;">
            <img src="{{ asset('public/images/04.jpg') }}" class="topic" alt="gambar1">
            <h5 style="text-align:center;"><b>judul</b></h5>
          </div>
          <div class="col-sm-6" style="border:1px solid black; width:48%; margin-left:10px; padding-left:0px;padding-right:0px;">
            <img src="{{ asset('public/images/05.jpg') }}" class="topic" alt="gambar2">
            <h5 style="text-align:center;"><b>judul</b></h5>
          </div>
      </div>
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