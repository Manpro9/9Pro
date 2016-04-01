@extends('layout.master')

@section('title')
	PSDM - Agenda
@endsection

@section('css')
	<!-- Agenda's CSS -->
@endsection

@section('scripts')
	<!-- Agenda's Javascripts / jQuery -->
@endsection

@section('content')
	<style type="text/css">
  body {
    background-color: #fff;
  }
</style>


<div class="container" style="width:89%; margin-left: 130px;margin-top: 65px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	<div class="col-sm-9">
	  <div class="col-sm-12">
	    <h3 style="text-align:center;"><b>KEGIATAN</b></h3></br></br>
	    	<div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	        </div>
	        <div class="col-sm-3" style="margin-left:10px; padding-left:0px;padding-right:0px;">
	          <h4><b>Judul</b></h4>
	          <h6>detail (tanggal pembuatan dll)</h6>
	          <p>penjelasan singkat kegiatan</p>
	        </div>
	  </div> 
	  <div class="col-sm-12">
	  	<hr>
	    <h4 style="text-align:center;"></h5>
	    	<div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	        </div>
	        <div class="col-sm-3" style="margin-left:10px; padding-left:0px;padding-right:0px;">
	          <h4><b>Judul</b></h4>
	          <h6>detail (tanggal pembuatan dll)</h6>
	          <p>penjelasan singkat kegiatan</p>
	        </div>
	  </div> 
	  <div class="col-sm-12">
	  	<hr>
	    <h4 style="text-align:center;"></h5>
	    	<div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	        </div>
	        <div class="col-sm-3" style="margin-left:10px; padding-left:0px;padding-right:0px;">
	          <h4><b>Judul</b></h4>
	          <h6>detail (tanggal pembuatan dll)</h6>
	          <p>penjelasan singkat kegiatan</p>
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