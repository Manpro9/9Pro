<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
                    <a class="navbar-brand" href="{{url('/home')}}" style="padding-top: 0%; padding-right:0%;">
                    <img src="{{ asset('public/images/icons/ukdw_icon.ico') }}" width="39px"></img>
                    </a>
                    <a style="color: #ffffff; padding-top: 5px; padding-rihgt:0%;" class="navbar-brand" href="{{url('/')}}">
                        PENGEMBANGAN SUMBER DAYA MANUSIA </br>
                        Univeristas Kristen Duta Wacana Yogyakarta
                    </a>
            </div>
            <!-- User's Menu -->

<!-- BELUM LOGIN -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="{{url('/login')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Login</a>
                </li>
            </ul>

<!-- kalo udah login
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu" style="width:200px;">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Reset Password</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul> -->
            <!-- End of Navbar -->
            <div class="form-group has-feedback" style="float:right; margin-right:1%; margin-top:0.5%; margin-bottom:0%;">
                      <input id="search" type="text" name="search" class="form-control" placeholder="Search. . ." />
                         <i class="glyphicon glyphicon-search form-control-feedback"></i>
            </div>

    

    <!-- Sidebar -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <!-- kalo dah login
            <li class="home">
                <a href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-home"></i> Beranda</a>
            </li>
            <li class="news">
                <a href="{{ url('/news') }}"><i class="fa fa-fw fa-newspaper-o"></i> Pengumuman</a>
             </li>
            <li class="agenda">
                <a href="{{ url('/agenda') }}"><i class="fa fa-fw fa-calendar"></i> Kegiatan</a>
            </li>
            <li class="documents">
                <a href="{{ url('/documents') }}"><i class="fa fa-fw fa-upload"></i> Dokumen SOP</a>
            </li>
            <li class="gallery">
                <a href="{{ url('/gallery') }}"><i class="fa fa-fw fa-picture-o"></i> Galeri</a>
            </li>
            <li class="admin">
                <a href="{{ url('/admin') }}"><i class="fa fa-fw fa-user"></i> Admin</a>
            </li> -->



            <!-- BELUM LOGIN -->
            <li class="home">
                <a href="{{ url('/home') }}"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li class="news">
                <a href="{{ url('/news') }}"><i class="fa fa-fw fa-newspaper-o"></i> Pengumuman</a>
             </li>
            <li class="agenda">
                <a href="{{ url('/agenda') }}"><i class="fa fa-fw fa-calendar"></i> Kegiatan</a>
            </li>
            <li class="documents">
                <a href="{{ url('/documents') }}"><i class="fa fa-fw fa-upload"></i> Dokumen SOP</a>
            </li>
            <li class="gallery">
                <a href="{{ url('/gallery') }}"><i class="fa fa-fw fa-picture-o"></i> Galeri</a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->
</nav>
</div>