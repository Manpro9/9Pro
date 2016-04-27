<header class="main-header">
  <a href="{{ url('/') }}" class="logo">
    <span class="logo-mini"><b>PSDM</b></span>
    <span class="logo-lg"><b>PSDM</b>&nbsp UKDW</span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      @if (Auth::user())
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('public/images/dist/user2-160x160.jpg') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              
              
              <li class="user-footer">
                <div class="pull-left">
                  <p>Akhiri sesi sekarang?</p>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-info btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- LI DIBAWAH JANGAN DIHAPUS -->
          <!-- *UNTUK ADMIN -->
          <li>
            <!-- JANGAN DI HAPUS -->
          </li>
        </ul>
      @else
        <ul>
          <span >
          <a href="login" class="login-btn"><i class="fa fa-user" style="margin-top:30%;"></i><span > Login &nbsp;&nbsp;</span></a>
        </ul>
      @endif
    </div>

  </nav>
</header>