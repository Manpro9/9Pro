@extends('layout.master')

<!-- CUSTOM CSS UNTUK DOKUMEN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK DOKUMEN -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('public/js/agenda/agenda.js') }}"></script>
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
                                    @if(Auth::user())
                                        @if (Auth::user()->auth_level == 1)
                                        <th><input type="checkbox" id="checkall" /></th>
                                        @endif
                                    @endif
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Jenis File</th>
                                    <th>Keterangan</th>
                                    @if (Auth::user())
                                    <th>Download</th>
                                    @endif
                                    @if(Auth::user())
                                        @if (Auth::user()->auth_level == 1)
                                        <th>re-Upload</th>
                                        <th>Delete</th>
                                        @endif
                                    @endif
                                </thead>
                                <tbody>
                                    @foreach($documents as $document)        
                                    <tr>
                                        @if(Auth::user())
                                            @if (Auth::user()->auth_level == 1)
                                            <td><input type="checkbox" class="checkthis" /></td>
                                            @endif
                                        @endif
                                        <td>{{ $counter }}</td>
                                        <td>{{ $document->title }}</td>
                                        <td>{{ $document->type }}</td>
                                        <td>{{ $document->description }}</td>
                                        <td>
                                            <p>
                                                <?php $link = 'document/download/' . $document->id ?>
                                                <a href="{{ url($link) }}" class="btn btn-primary btn-xs download-document" value="{{ $document->id }}" role="button">
                                                    <span class="glyphicon glyphicon-download"></span>
                                                </a>
                                            </p>
                                        </td>
                                        @if(Auth::user())
                                            @if (Auth::user()->auth_level == 1)
                                            <td>
                                                <p>
                                                    <button class="btn btn-primary btn-xs document-role" value="{{ $document->id }}" role="re_upload">
                                                        <span class="glyphicon glyphicon-open"></span>
                                                    </button>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <button class="btn btn-danger btn-xs document-role" value="{{ $document->id }}" role="delete">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </p>
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
                            <i class="fa fa-upload"></i>upload file
                            </label></a>
                            </span>
                        </form>
                        @endif
                    @endif
                </div>
            </div>
    </section>
@endsection