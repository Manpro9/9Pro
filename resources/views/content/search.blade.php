@extends('layout.master')

<!-- CUSTOM CSS UNTUK AGENDA -->
@section('css')
    <!-- ISIKAN DISINI -->
    <link rel="stylesheet" href="{{ asset('public/css/content/search/search.css' )}}">
@endsection

<!-- CUSTOM JS UNTUK AGENDA -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script src="{{ asset('public/js/agenda/agenda.js')}}"></script>
    
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) AGENDA -->
@section('content-header')
  <h1>
    Pencarian
    <small>hasil pencarian berdasar kata kunci : "@if (Session::has('search_query')) {{ Session::get('search_query') }} @endif"</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK AGENDA -->
@section('content')
    <!-- ISIKAN DISINI -->
        <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="panel-group" id="accordion">

                            <!-- Judul -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><strong>Berdasarkan Judul</strong></a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <table id="t01">
                                        <tr>
                                            <th>Berita terkait</th>
                                        </tr>
                                        @if (count($dataTitle) == 0)
                                            <tr>
                                                <td id="isi"><a href="#" class="data-search">Data tidak ditemukan</a></td>
                                            </tr>
                                        @else
                                            @foreach($dataTitle as $dataT)
                                                <?php 
                                                    $title = str_slug($dataT['title']);
                                                    if ($dataT['type'] == 'berita')
                                                        $route = 'berita.show';
                                                    else if ($dataT['type'] == 'kegiatan')
                                                        $route = 'kegiatan.show';
                                                 ?>
                                                @if ($dataT->type == 'berita')
                                                    <tr>
                                                        <td id="isi"><a href="{{ route($route, $title) }}" class="data-search">{{ $dataT->title }}</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif

                                        <tr>
                                            <th>Kegiatan terkait</th>
                                        </tr>
                                        @if (count($dataTitle) == 0)
                                            <tr>
                                                <td id="isi"><a href="#" class="data-search">Data tidak ditemukan</a></td>
                                            </tr>
                                        @else
                                            @foreach($dataTitle as $dataT)
                                                <?php 
                                                    $title = str_slug($dataT['title']);
                                                    if ($dataT['type'] == 'berita')
                                                        $route = 'berita.show';
                                                    else if ($dataT['type'] == 'kegiatan')
                                                        $route = 'kegiatan.show';
                                                 ?>
                                                @if ($dataT->type == 'kegiatan')
                                                    <tr>
                                                        <td id="isi"><a href="{{ route($route, $title) }}" class="data-search">{{ $dataT->title }}</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <!-- Deskripsi -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><strong>Berdasarkan Deskripsi</strong></a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <table id="t01">
                                        <tr>
                                            <th>Berita terkait</th>
                                        </tr>
                                        @if (count($dataDescription) == 0)
                                            <tr>
                                                <td id="isi"><a href="#" class="data-search">Data tidak ditemukan</a></td>
                                            </tr>
                                        @else
                                            @foreach($dataDescription as $dataD)
                                                <?php 
                                                    $title = str_slug($dataD['title']);
                                                    if ($dataD['type'] == 'berita')
                                                        $route = 'berita.show';
                                                    else if ($dataD['type'] == 'kegiatan')
                                                        $route = 'kegiatan.show';
                                                 ?>
                                                @if ($dataD->type == 'berita')
                                                    <tr>
                                                        <td id="isi"><a href="{{ route($route, $title) }}" class="data-search">{{ $dataD->title }}</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif

                                        <tr>
                                            <th>Kegiatan terkait</th>
                                        </tr>
                                        @if (count($dataDescription) == 0)
                                            <tr>
                                                <td id="isi"><a href="#" class="data-search">Data tidak ditemukan</a></td>
                                            </tr>
                                        @else
                                            @foreach($dataDescription as $dataD)
                                                <?php 
                                                    $title = str_slug($dataD['title']);
                                                    if ($dataD['type'] == 'berita')
                                                        $route = 'berita.show';
                                                    else if ($dataD['type'] == 'kegiatan')
                                                        $route = 'kegiatan.show';
                                                 ?>
                                                @if ($dataD->type == 'kegiatan')
                                                    <tr>
                                                        <td id="isi"><a href="{{ route($route, $title) }}" class="data-search">{{ $dataD->title }}</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <!-- Konten -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><strong>Berdasarkan Isi (konten)</strong></a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <table id="t01">
                                        <tr>
                                            <th>Berita terkait</th>
                                        </tr>
                                        @if (count($dataContent) == 0)
                                            <tr>
                                                <td id="isi"><a href="#" class="data-search">Data tidak ditemukan</a></td>
                                            </tr>
                                        @else
                                            @foreach($dataContent as $dataC)
                                                <?php 
                                                    $title = str_slug($dataC['title']);
                                                    if ($dataC['type'] == 'berita')
                                                        $route = 'berita.show';
                                                    else if ($dataC['type'] == 'kegiatan')
                                                        $route = 'kegiatan.show';
                                                 ?>
                                                @if ($dataC->type == 'berita')
                                                    <tr>
                                                        <td id="isi"><a href="{{ route($route, $title) }}" class="data-search">{{ $dataC->title }}</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif

                                        <tr>
                                            <th>Kegiatan terkait</th>
                                        </tr>
                                         @if (count($dataContent) == 0)
                                            <tr>
                                                <td id="isi"><a href="#" class="data-search">Data tidak ditemukan</a></td>
                                            </tr>
                                        @else
                                            @foreach($dataContent as $dataC)
                                                <?php 
                                                    $title = str_slug($dataC['title']);
                                                    if ($dataC['type'] == 'berita')
                                                        $route = 'berita.show';
                                                    else if ($dataC['type'] == 'kegiatan')
                                                        $route = 'kegiatan.show';
                                                 ?>
                                                @if ($dataC->type == 'kegiatan')
                                                    <tr>
                                                        <td id="isi"><a href="{{ route($route, $title) }}" class="data-search">{{ $dataC->title }}</a></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

     

    </section>

@endsection