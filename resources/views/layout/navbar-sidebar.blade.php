<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
    <!-- Navbar -->
    <div class="navbar-header">
        <!-- Toogle untuk resolusi kecil (mobile) -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Title -->
        <a class="navbar-brand" href="{{ url('/') }}">Pengembangan Sumber Daya Manusia Universitas Kristen Duta Wacana</a>
    </div>

    <!-- User's Menu -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Reset Password</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- End of Navbar -->

    <!-- Sidebar -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="home">
                <a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</a>
            </li>
            <li class="news">
                <a href="{{ url('/news') }}"><i class="fa fa-fw fa-newspaper-o"></i> News</a>
             </li>
            <li class="agenda">
                <a href="{{ url('/agenda') }}"><i class="fa fa-fw fa-calendar"></i> Agenda</a>
            </li>
            <li class="documents">
                <a href="{{ url('/documents') }}"><i class="fa fa-fw fa-upload"></i> Documents</a>
            </li>
            <li class="gallery">
                <a href="{{ url('/gallery') }}"><i class="fa fa-fw fa-picture-o"></i> Gallery</a>
            </li>
            <li class="admin">
                <a href="{{ url('/admin') }}"><i class="fa fa-fw fa-user"></i> Admin</a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->
</nav>