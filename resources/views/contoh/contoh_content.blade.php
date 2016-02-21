@extends('contoh.contoh_master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/contoh_css/contoh_content_css.css') }}">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('public/js/contoh_js/contoh_content_js.js') }}"></script>
@endsection

@section('content')
    <div id="wrapper" style="padding-left: 0px;">
            <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
                        <li>                
                        </li>
                         <li>
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-tags fa-stack-1x "></i></span>Pengumuman</a>
                            <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                                <li class="lists"><a href="#">Sertifikasi Dosen</a></li>
                                <li class="lists"><a href="#">Ajuan CPP</a></li>
                                <li class="lists"><a href="#">Publikasi</a></li>
                                <li class="lists"><a href="#">Rekruitmen Pegawai</a></li>
                                <li class="lists"><a href="#">Beasiswa Pegawai</a></li>
                            </ul>
                        </li>
                        <li class="lists">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ban fa-stack-1x "></i></span>Tentang PSDM</a>
                        </li>
                        <li class="lists">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ban fa-stack-1x "></i></span>Kegiatan</a>
                        </li>
                        <li class="lists">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ban fa-stack-1x "></i></span>Galeri</a>
                        </li>
                        <li class="lists">
                            <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-ban fa-stack-1x "></i></span>Dokumen SOP</a>
                        </li>
                        <br/>
                    </ul>
                </div>
                <!-- END OF SIDEBAR-->
         

        <!-- INCLUDED CONTENT -->
            @include('contoh.contoh_included_content')
        <!-- END OF INCLUDED CONTENT -->
    </div>

@endsection