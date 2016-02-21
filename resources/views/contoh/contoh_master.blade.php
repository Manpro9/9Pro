<!DOCTYPE hmtl>
<html  lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PSDM UKDW</title>

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
	<div style="margin-bottom:-1px;" id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
	    <div class="container-fluid">
	        <div class="navbar-header">
	        	</br> 
	        	<div class="form-group has-feedback" style="float:right;">
                      <input id="search" type="text" name="search" class="form-control" placeholder="Search. . ." />
                         <i class="glyphicon glyphicon-search form-control-feedback"></i>
                </div>
	        	<div class="container">
	        		<a class="navbar-brand" href="{{url('/')}}">
	        		<img src="{{ asset('public/images/contoh_image.jpg') }}" width="40px"></img>
	        		</a>
		        	<h4>PENGEMBANGAN SUMBER DAYA MANUSIA</h4>
		        	<h4><strong>UNIVERSITAS KRISTEN DUTA WACANA</strong></h4>
	        	</div>
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
	            	<span class="sr-only">Toggle navigation</span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            </button>
	        </div>
	    </div>
	    <div class="collapse navbar-collapse navbar-menubuilder " style="background-color:#ffffcc">
	        	<ul class="nav navbar-nav navbar-left">
	            	<li><a href="#" style="color: #000000"><strong>Beranda</strong></a></li>
	            </ul>
	            <ul class="nav navbar-nav navbar-right">
	            	<li><a href="#" style="color: #000000"><strong>Login</strong></a></li>
	            </ul>
	        </div>
	</div>
	<!-- END OF NAVBAR -->

	<!-- CONTENT -->
	<div class="container" style="margin-right:0;">
		@yield('content')
	</div>
	<!-- END OF CONTENT -->

	<!-- FOOTER -->
</br></br></br>
	<nav class="navbar navbar-default" style="background-color:#337ab7; padding-left: 0px; padding-right: 0px;">
		<div class="container-fluid">
		<div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
                <div class="col-centered text-left" style="margin-left:10px;">
                    <div class="row" style="padding-left: 0px; padding-right: 0px;">
                        <div class="col-sm-5">
                            <h5 style="color:#ffffff;">UNIVERSITAS KRISTEN DUTA WACANA</h5>
							<h6 style="color:#ffffff;">Jl. Dr. Wahidin Sudiro Husodo No. 5 – 25</h6>
							<h6 style="color:#ffffff;">Yogyakarta 55224</h6>
							<h6 style="color:#ffffff;">Telp. 0274 – 563929 Fax. 0274 – 513235</h6>
							<h6 style="color:#ffffff;">Email: humas@staff.ukdw.ac.id</h6>
              			</div>  
              			<div class="col-centered text-left">
                		<div class="col-sm-3">
		                  <form action="" method="post" accept-charset="utf-8">
							<h5 style="color:#ffffff;">KRITIK & SARAN</h5>
								<h6 style="color:#ffffff;">Email</h6>
								<input type="email" name="email" value="" maxlength="50" required="required"  />
								<h6></h6>
								<textarea name="pesan" cols="22" rows="2" required="required" ></textarea>
							</br>
								<input type="submit" name="" value="KIRIM" style="float:right; margin-right:28px;"  />
							</form>
                    	</div>
                    </div>
                    <div class="col-centered text-left">
                    <div class="col-sm-4">
                        <h5 style="color:#ffffff;"><strong>PSDM Universitas Kristen Duta Wacana</strong></h5>
              		</div>  
				</div>				
			</div>
		</div>
	</div>
		</nav>
	<!-- END OF FOOTER -->
</body>
</html>