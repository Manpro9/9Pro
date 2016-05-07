@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('public/js/upload/upload.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) CONTENT EDITOR -->
@section('content-header')
  <h1>
    Upload
    <small>Unggah Media</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK CONTENT EDITOR -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
        <div class="container"> <br />
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

                <div class="col-md-6 col-md-offset-3">
                  {!! Form::open(['method' => 'post', 'files' => true]) !!}
                    <div class="panel panel-default">
                        
                        <div class="panel-heading"><strong>Upload file</strong> <small> </small></div>
                            <div class="panel-body">
                                
                                <form role="form" style="text-align:center">
                                    <label class="radio-inline">
                                        <input type="radio" name="type" value="gambar" class="type" checked>Upload Gambar
                                    </label>
                                                                    
                                    <label class="radio-inline">
                                        <input type="radio" name="type" value="dokumen" class="type">Upload Dokumen
                                    </label>
                                </form>
                                                     
                                <div class="form-group">
                                    <label for="document-name">Name File:</label>
                                        <input type="text" class="form-control title" id="document-name" placeholder="Wajib diisi" name="title">
                                </div>
                               	<div class="form-group">
                                    <label for="keterangan">Keterangan:</label>
                                        <input type="text" class="form-control desc" id="document-name" placeholder="Wajib diisi" name="desc">
                                </div>
                                                        
                                <label class="control-label">Select File</label>
                                <input type="file" class="file" name="file">

                                <br />
                                <br /> 
                                <div style="text-align:center">
                                  <button type="submit" class="btn btn-labeled btn-default submit-upload"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                                  </span>
                                </div>
                                
                                <br />
                                
                                <!-- Drop Zone -->
                               <!--  <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                                
                                <br /> -->
                                <!-- Progress Bar -->
                                <!-- <div class="progress">
                                  	<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> 
                                  	</div>
                                </div>
                                
                                <br /> -->
                            </div>
                            
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
      	</div>
      
    </section>
@endsection