@extends('layout.master')

@section('title')
	PSDM - Gallery
@endsection

@section('css')
	<!-- Gallery's CSS -->
@endsection

@section('scripts')
	<!-- Gallery's Javascripts / jQuery -->
@endsection

@section('content')
	<style type="text/css">
  body {
    background-color: #fff;
  }
</style>


<div class="container" style="width:89%; margin-left: 130px;margin-top: 65px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	<div class="col-sm-9" style="text-align:left;">
	      <h3 style="text-align:center;"><b>GALERI</b></h3></br></br>
	      <div class="row">
	        <div class="col-sm-3" style="border:1px solid black; margin-left:70px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	          <h5 style="text-align:center;"><b>judul foto</b></h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:15px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar2">
	          <h5 style="text-align:center;"><b>judul foto</b></h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:15px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar3">
	          <h5 style="text-align:center;"><b>judul foto</b></h5>
	        </div>
	      </div>
	  </br>
	      <div class="row">
	        <div class="col-sm-3" style="border:1px solid black; margin-left:70px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	          <h5 style="text-align:center;"><b>judul foto</b></h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:15px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar2">
	          <h5 style="text-align:center;"><b>judul foto</b></h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:15px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar3">
	          <h5 style="text-align:center;"><b>judul foto</b></h5>
	        </div>
	      </div>
	</div>

	<div class="col-sm-3" style="padding-left:0px; padding-right:0px;">
		    <h4 style="text-align: center; margin-bottom:0px;"><b>TERBARU</b></h4>
		    <hr style="margin-top:3px; margin-bottom:10px;">
		      <div class="col-sm-1" style="padding-left:0%;">
		      	<p>pengumuman nnnnnnnnnnnnnnnnnn nnnnnnnnnnnnnnnnnnnnnnn nnnnnnnnnnnnnnnnnnnnn</p>
		      </br>
		      <p>pengumuman nnnnnnnnnnnnnnnnnn nnnnnnnnnnnnnnnnnnnnnnn nnnnnnnnnnnnnnnnnnnnn</p>
		      </br>
		      <p>pengumuman nnnnnnnnnnnnnnnnnn nnnnnnnnnnnnnnnnnnnnnnn nnnnnnnnnnnnnnnnnnnnn</p>
		      </div>
	</div>
</div>
@endsection