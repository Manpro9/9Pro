<aside class="main-sidebar">
  <section class="sidebar">
    
  <a href="{{ url('/') }}" class="logo">
    <div class="sidebar-logo">
        <div id="isi-logo">
          <img src="public/images/ukdw.gif">
          <h4>Pengembangan Sumber Daya Manusia</h4>
        </div>
    </div>
  </a>

    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>

    <ul class="sidebar-menu">
       <li>
        <a href="{{ url('/profil') }}" class="hvr-sweep-to-right">
          <i class="fa fa-university"></i><span>Tentang PSDM</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/berita') }}" class="hvr-sweep-to-right">
          <i class="fa fa-newspaper-o"></i><span>Berita</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/kegiatan') }}" class="hvr-sweep-to-right">
          <i class="fa fa-list"></i><span>Kegiatan</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/agenda') }}" class="hvr-sweep-to-right">
          <i class="fa fa-calendar"></i><span>Daftar Agenda</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/dokumen') }}" class="hvr-sweep-to-right">
          <i class="fa fa-file-archive-o"></i><span>Dokumen</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/gallery') }}" class="hvr-sweep-to-right">
          <i class="fa fa-picture-o"></i><span>Gallery</span>
        </a>
      </li>
     
      @if (Auth::user())
      <li>
        <a href="{{ url('/users') }}" class="hvr-sweep-to-right">
          <i class="fa fa-users"></i><span>Manage User</span>
        </a>
      </li>
      @endif
  </section>
</aside>