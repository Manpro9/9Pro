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
    <small>hasil pencarian berdasar kata kunci : "..."</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK AGENDA -->
@section('content')
    <!-- ISIKAN DISINI -->
        <section class="content">
                <div class="container">
                    <div class="row">
                        <table id="t01">
                            <tr>
                                <th>Berita terkait</th>
                            </tr>
                            <tr>
                                <td id="isi">Jill</td>
                            </tr>
                            <tr>
                                <td id="isi">Eve</td>
                            </tr>
                            <tr>
                                <td id="isi">John</td>
                            </tr>
                            <tr>
                                <th>Kegiatan terkait</th>
                            </tr>
                            <tr>
                                <td id="isi">Jill</td>
                            </tr>
                            <tr>
                                <td id="isi">Eve</td>
                            </tr>
                            <tr>
                                <td id="isi">John</td>
                            </tr>
                        </table>
                        
                    </div>
                </div>

     

    </section>

@endsection