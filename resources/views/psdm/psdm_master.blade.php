<!DOCTYPE hmtl>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PSDM UKDW</title>

    <!-- ICON -->
    <link rel="icon" type="text/css" href="{{asset('public/images/icons/contoh_icon.ico')}}">
    <!-- END OF ICON -->

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}">
    @yield('css')

    <!-- Custom CSS -->
    <link href="{{asset('public/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('public/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- JQuery UI CSS --> 
    <link href="{{asset('public/css/jquery-ui.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('public/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

      <!-- jQuery -->
    <script type="text/javascript" src="{{asset('public/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script type="text/javascript" type="text/javascript" src="{{asset('public/js/plugins/morris/raphael.min.js')}}"></script>
    <script type="text/javascript" type="text/javascript" src="{{asset('public/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('public/js/plugins/morris/morris-data.js')}}"></script>
	@yield('scripts')
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#006699;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
                    <a class="navbar-brand" href="{{url('/')}}" style="padding-top: 0%; padding-right:0%;">
                    <img src="{{ asset('public/images/icons/ukdw_icon.ico') }}" width="39px"></img>
                    </a>
                    <a style="color: #ffffff; padding-top: 5px; padding-rihgt:0%;" class="navbar-brand" href="{{url('/')}}">
                        PENGEMBANGAN SUMBER DAYA MANUSIA </br>
                        Univeristas Kristen Duta Wacana Yogyakarta
                    </a>
            </div>
            <div class="form-group has-feedback" style="float:right; margin-right:1%; margin-top:0.5%; margin-bottom:0%;">
                      <input id="search" type="text" name="search" class="form-control" placeholder="Search. . ." />
                         <i class="glyphicon glyphicon-search form-control-feedback"></i>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="background-color:#ffff99;">
                     <li>
                        <a class="data-toggle='tab'" href="" style="color:#000000;"><i class="fa fa-fw fa-user"></i> Login</a>
                    </li>
                    <li>
                        <a class="data-toggle='tab'" href="" style="color:#000000;"><i class="fa fa-fw fa-bullhorn"></i> Pengumuman</a>
                    </li>
                    <li>
                        <a class="data-toggle='tab'" href="" style="color:#000000;"><i class="fa fa-fw fa-info-circle"></i> Tentang PSDM</a>
                    </li>
                    <li>
                        <a class="data-toggle='tab'" href="" style="color:#000000;"><i class="fa fa-fw fa-mortar-board"></i> Kegiatan</a>
                    </li>                    
                    <li>
                        <a class="data-toggle='tab'" href="" style="color:#000000;"><i class="fa fa-fw fa-image"></i> Galeri</a>
                    </li>
                    <li>
                        <a class="data-toggle='tab'" href="" style="color:#000000;"><i class="fa fa-fw fa-folder"></i> Dokumen SOP</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>
</div>
            
    
	<!-- CONTENT -->
    <div class="container" style="margin-left: 150px;margin-top: 60px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 20px;">
        @yield('content')
    </div>
	<!-- END OF CONTENT -->


</br></br></br>
<nav class="navbar navbar-default navbar-fixed-bottom" style="width:100%; margin-bottom: 0%; margin-left: 0%; border:0px; border-radius:0px;">
                <div class="col-sm-12" style="padding-right: 0%;">
                <div class="col-centered text-left" style="margin-left:2%;">
                        <div class="col-sm-3">
                            <h5 style="color:#ffffff;"><strong>UNIVERSITAS KRISTEN DUTA WACANA</strong></h5>
                            <h6 style="color:#ffffff;">Jl. Dr. Wahidin Sudiro Husodo No. 5 – 25</br>
                            Yogyakarta 55224</br>
                            Telp. 0274 – 563929 Fax. 0274 – 513235</br>
                            Email: humas@staff.ukdw.ac.id</h6>
                        </div>  
                        <div class="col-sm-6">
                        </div>
                    <div class="col-sm-3" style="padding-right:0%;">
                        <h6 style="color:#ffffff;"><strong>KRITIK & SARAN</strong></h6>
                        <form action="" method="post" accept-charset="utf-8">
                                <input type="email" name="email" value="" maxlength="50" style="width:217px;" placeholder="Email" required="required"/>
                                <textarea name="pesan" cols="28" rows="2" required="required" placeholder="Saran/Pesan"></textarea>&nbsp;
                                <input type="submit" name="" value="KIRIM" style="float:right; margin-right:5%; margin-top:5%;"/>
                        </form>
                    </div>  
                </div>              

</nav>
</body>
</html>