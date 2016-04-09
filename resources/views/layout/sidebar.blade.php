<aside class="main-sidebar">
  <section class="sidebar">
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
        <a href="{{ url('/berita') }}">
          <i class="fa fa-newspaper-o"></i><span>Berita</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/pengumuman') }}">
          <i class="fa fa-volume-up"></i><span>Pengumuman</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/kegiatan') }}">
          <i class="fa fa-list"></i><span>Kegiatan</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/agenda') }}">
          <i class="fa fa-calendar"></i><span>Daftar Agenda</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/dokumen') }}">
          <i class="fa fa-file-archive-o"></i><span>Dokumen</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/gallery') }}">
          <i class="fa fa-picture-o"></i><span>Gallery</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/users') }}">
          <i class="fa fa-users"></i><span>Manage User</span>
        </a>
      </li>
  </section>
</aside>