<!DOCTYPE hmtl>
<html  lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ini Contoh</title>

    <!-- ICON -->
    <link rel="icon" type="text/css" href="{{asset('public/images/icons/contoh_icon.ico')}}">
    <!-- END OF ICON -->

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}">
	@yield('css')
	<!-- END OF CSS -->

	<!-- SCRIPTS -->
	<script type="text/javascript" src="{{ asset('public/js/jquery-2.2.0.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
	@yield('scripts')
	<!-- END OF SCRIPTS -->
</head>
<body>
	<!-- NAV BAR -->
	<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
	    <div class="container-fluid">
	        <div class="navbar-header">
	        	<a class="navbar-brand" href="{{url('/')}}">
	        		<img src="{{ asset('public/images/contoh_image.jpg') }}" width="20px" />
	        	</a>
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
	            	<span class="sr-only">Toggle navigation</span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            </button>
	        </div>
	        <div class="collapse navbar-collapse navbar-menubuilder">
	            <ul class="nav navbar-nav navbar-left">
	            	<li><a href="#">Right Navbar 1</a></li>
	                <li><a href="#">Right Navbar 2</a></li>
	                <li><a href="#">Right Navbar 3</a></li>
	                <li><a href="#">Right Navbar 4</a></li>
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	            	<li><a href="#">Left Navbar 1</a></li>
	            	<li><a href="#">Left Navbar 2</a></li>
	            	<li><a href="#">Left Navbar 3</a></li>
	            </ul>
	        </div>
	    </div>
	</div>
	<!-- END OF NAVBAR -->

	<!-- CONTENT -->
	<div class="container">
		@yield('content')
	</div>
	<!-- END OF CONTENT -->

	<!-- FOOTER -->
	<footer>
		<nav class="navbar navbar-default">
		  <div class="container">
		    <div class="col-sm-12 text-center navbar-text">
		        <p style="font-family:'Dosis';">Ini Footer Contoh</p>
		    </div>
		  </div>
		</nav>
	</footer>
	<!-- END OF FOOTER -->
</body>
</html>