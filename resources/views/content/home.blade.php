@extends('layout.master')

@section('title')
	PSDM - Home
@endsection

@section('css')
	<!-- Home's CSS -->
@endsection

@section('scripts')
	<!-- Home's Javascripts / jQuery -->
@endsection

@section('content')
<style type="text/css">
  body {
    background-color: #fff;
  }
</style>


<div class="container" style="width:89%; margin-left: 130px;margin-top: 65px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	  <div class="col-sm-9">
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li id="c1" data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	        <li id="c2" data-target="#carousel-example-generic" data-slide-to="1"></li>
	        <li id="c3" data-target="#carousel-example-generic" data-slide-to="2"></li>
	      </ol>

	      <!-- Wrapper for slides -->
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img src="{{ asset('public/images/test.jpg') }}" class="banner" alt="gambar1">
	          <div class="carousel-caption">
	            <font size="4" face="Cooper Black"><strong></strong></font>
	          </div>
	        </div>
	        <div class="item">
	          <img src="{{ asset('public/images/test.jpg') }}" class="banner" alt="gambar2">
	          <div class="carousel-caption">
	            <font size="4" face="Cooper Black"><strong></strong></font>
	          </div>
	        </div>
	         <div class="item">
	          <img src="{{ asset('public/images/test.jpg') }}" class="banner" alt="gambar3">
	          <div class="carousel-caption">
	            <font size="4" face="Cooper Black"><strong></strong></font>
	          </div>
	        </div>

	        <!-- Controls -->
	        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	      </div>
	    </div>
	  </div>  
	  <div class="col-sm-3" style="padding-left:0px; padding-right:0px;">
	    <h4 style="text-align: left; margin-bottom:0px;"><b>AGENDA</b></h4>
	    <hr style="margin-top:3px; margin-bottom:10px;">
	      <div class="col-sm-12" style="padding-left:0%;">
	        <script language="javascript" type="text/javascript" src="{{ asset('public/js/calendar.js') }}"> </script>
	      </div>
	  </div>
</div>
<div class="container" style="width:89%; margin-left: 130px;margin-top: 40px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	    <div class="col-sm-9" style="text-align:left;">
	      <h4><b>News Topic</b></h4>
	      <div class="row">
	        <div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	          <h5>judul berita</h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:5px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar2">
	          <h5>judul berita</h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:5px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar3">
	          <h5 >judul berita</h5>
	          
	        </div>
	      </div>
	    </div>

	    <div class="col-sm-3" style="padding-left:0px; padding-right:0px;">
	        <h4 style="text-align: left; margin-bottom:0px;"><b>Daftar Agenda (bulan yg aktif - April 2016)</b></h4>
	        <hr style="margin-top:3px; margin-bottom:10px;">
	    </div>
</div>
@endsection