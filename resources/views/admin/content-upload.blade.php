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
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                            <div class="panel-body">

                                <form role="form" style="text-align:center">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">Upload Gambar
                                    </label>
                                                                    
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio">Upload Dokumen
                                    </label>
                                </form>
                                                     
                                <div class="form-group">
                                    <label for="document-name">Name File:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="">
                                </div>
                               	<div class="form-group">
                                    <label for="keterangan">Keterangan:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="">
                                </div>
                                                        
                                <div class="input-group image-preview">
                                    <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                                              <!-- don't give a name === doesn't send on POST/GET --> 
         									<span class="input-group-btn"> 
                                              <!-- image-preview-clear button -->
                                             	<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> 	<span class="glyphicon glyphicon-remove"></span> Clear 
                                             	</button>
                                              <!-- image-preview-input -->
                                        <div class="btn btn-default image-preview-input"> 
                                        	<span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
                                                <!-- rename it --> 
                                       	</div>
                                             
                                            <button type="button" class="btn btn-labeled btn-default"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
                                              </span> </div>
                                            <!-- /input-group image-preview [TO HERE]--> 
                                            
                                            <br />
                                            
                                            <!-- Drop Zone -->
                                            <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                                            
                                            <br />
                                            <!-- Progress Bar -->
                                            <div class="progress">
                                              	<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> 
                                              	</div>
                                            </div>
                                            
                                            <br />
                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      	</div>
      
    </section>
@endsection