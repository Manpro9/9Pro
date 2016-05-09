@extends('layout.master')

<!-- CUSTOM CSS UNTUK DOKUMEN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK DOKUMEN -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('public/js/admin/dokumen.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) DOKUMEN -->
@section('content-header')
  <h1>
    Dokumen
    <small>Kelola file-file</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK DOKUMEN -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
    		<div class="container">
                <div class="row">
                @if(Session::has('error_message'))
                  <div class="alert alert-danger">
                    <strong>Warning!</strong> {{ Session::get('error_message') }}
                  </div>    
                @elseif (Session::has('success_message'))
                  <div class="alert alert-info">
                    <strong>Success!</strong> {{ Session::get('success_message') }}
                  </div>   
                @endif                                       
                    <div class="col-md-12">
                    	<h4>Dokumen arsip</h4>
                        <div class="table-responsive">
                            <?php 
                                if(isset($_GET['page']))
                                    $count = $_GET['page']; 
                                else
                                    $count = 1;

                                $counter = 5 * $count - 4; ?>
                            @if (count($documents) <= 0)
                                <p>Saat ini tidak ada dokumen yang tersedia.</p>
                            @else
							<table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th><center>Judul</center></th>
                                    <th><center>Jenis File</center></th>
                                    <th><center>Keterangan</center></th>
                                    @if (Auth::user())
                                    <th><center>Unduh</center></th>
                                    @endif
                                    @if(Auth::user())
                                        @if (Auth::user()->auth_level == 1)
                                        <th><center>Unggah Ulang</center></th>
                                        <th><center>Hapus</center></th>
                                        @endif
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach($documents as $document)        
                                    <tr>
                                        <td>{{ $counter }}</td>
                                        <td>{{ $document->title }}</td>
                                        <td><center>{{ $document->type }}</center></td>
                                        <td>{{ $document->description }}</td>
                                        <td>
                                            <center><p>
                                                <?php $link = 'document/download/' . $document->id ?>
                                                <a href="{{ url($link) }}" class="btn btn-primary btn-xs download-document" value="{{ $document->id }}" role="button">
                                                    <span class="glyphicon glyphicon-download"></span>
                                                </a>
                                            </p>
                                            </center>
                                        </td>
                                        @if(Auth::user())
                                            @if (Auth::user()->auth_level == 1)
                                            <td>
                                                <center><p>
                                                    <button class="btn btn-primary btn-xs document-role" value="{{ $document->id }}" role="re_upload">
                                                        <span class="glyphicon glyphicon-open"></span>
                                                    </button>
                                                </p>
                                                </center>
                                            </td>
                                            <td>
                                                <center><p>
                                                    <button class="btn btn-danger btn-xs document-role" value="{{ $document->id }}" role="delete">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </p>
                                                </center>
                                            </td>
                                            @endif
                                        @endif
                                    </tr> 
                                    <?php $counter++; ?>
                                    @endforeach 
                                </tbody>                 
                            </table>
                            @endif
                        	<div class="clearfix"></div>
                            {{ $documents->links() }}                        
                        </div>                          
                    </div>
                    @if(Auth::user())
                        @if (Auth::user()->auth_level == 1)
        				<form>
                            <span>
                            <a href="{{ url('/content/upload') }}">
                            <label class="btn btn-default">
                            <i class="fa fa-upload"></i> Unggah file
                            </label></a>
                            </span>
                        </form>
                        @endif
                    @endif
                </div>
            </div>
    </section>
@endsection