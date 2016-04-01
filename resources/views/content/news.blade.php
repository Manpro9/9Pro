@extends('layout.master')

@section('title')
	PSDM - News
@endsection

@section('css')
	<!-- News's CSS -->
@endsection

@section('scripts')
	<!-- News's Javascripts / jQuery -->
@endsection

@section('content')
	<!-- News's Content -->
<div class="container" style="width:89%; margin-left: 130px;margin-top: 40px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	    <div class="col-sm-9" style="text-align:left;">
	    <div class="col-sm-3" style="padding-left:0px; padding-right:0px;">
	        <h4 style="text-align: left; margin-bottom:0px;"><b>Pengumuman PSDM</b></h4>
	        <hr style="margin-top:3px; margin-bottom:10px;">
	    </div>
	    </div>
	    <div class="col-sm-9" style="text-align:left;">
			<div class="row">
				<div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
     				<a href="{{ url('/detailnews') }}"><img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1"></a>
				</div>
				<div class="col-sm-3" style=" margin-left:10px; padding-left:0px;padding-right:0px;">
     				<div class="title"><a href="{{ url('/detailnews') }}">Entah Berhasil atau Gagal Memotret Gerhana, Belitung Telah Berpesta</a></div>
					<div class="time">
						<div class="date">Mar 31, 2016</div>
						<div>2 menit yang lau</div>
					</div>
				</div>
			</div>
	        <hr style="margin-top:30px; margin-bottom:30px;">
			
					

			<div class="row">
				<div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
					<a href="{{ url('/detailnews') }}"><img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1"></a>
				</div>
				<div class="col-sm-3" style=" margin-left:10px; padding-left:0px;padding-right:0px;">
					<div class="title"><a href="{{ url('/detailnews') }}">Ivanka "Slank": Gerhana Matahari Total Bikin Gue Takut</a></div>
					<div class="time">
						<div class="date">Mar 31, 2016</div>
						<div>7 menit yang lau</div>
					</div>	
				</div>
			</div>
	        <hr style="margin-top:30px; margin-bottom:30px;">
					

			<div class="row">
				<div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
					<a href="{{ url('/detailnews') }}"><img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1"></a>
				</div>
				<div class="col-sm-3" style=" margin-left:10px; padding-left:0px;padding-right:0px;">
					<div class="title"><a href="{{ url('/detailnews') }}">Iran Kembali Gelar Uji Coba Misil Balistik</a></div>
					<div class="time">
						<div class="date">Mar 31, 2016</div>
						<div>8 menit yang lau</div>
					</div>	
				</div>
			</div>
	        <hr style="margin-top:30px; margin-bottom:30px;">
	    </div>
   	    </div>
</div>

@endsection