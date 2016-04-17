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
              <li class="user-header">
                <img src="{{ asset('public/images/dist/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                  <p>
                    {{ Auth::user()->name }}
                  </p>
              </li>
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
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
          <li class="login-user">Login</li>
        </ul>
      @endif
    </div>

  </nav>
</header>