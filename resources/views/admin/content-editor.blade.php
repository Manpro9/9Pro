@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('resources/views/admin/ckeditor.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) CONTENT EDITOR -->
@section('content-header')
  <h1>
    Publish Artikel
    <small>Berita - Pengumuman - Kegiatan</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK CONTENT EDITOR -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
        <div class="container">
        	<div class="form-group">
                <label for="document-name">Judul :</label>
                    <input type="text" class="form-control" id="document-name" placeholder="">
            </div>
            <div class="form-group">
                <label for="keterangan">Kategori :</label>
                    <input type="text" class="form-control" id="document-name" placeholder="">
            </div>
            <div class="form-group">
            <label for="file-gambar">Gambar Artikel :</label>
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
                        </span> 
            </div>
            </div>            
            <div class="form-group">
                <div class="panel-heading" style="text-align: center"><strong>Tipe Artikel</strong> <small> </small></div>
                    <form role="form" style="text-align:center">
                        <label class="radio-inline">
                            <input type="radio" name="optradio">BERITA
                        </label>
                                                                    
                        <label class="radio-inline">
                            <input type="radio" name="optradio">PENGUMUMAN
                        </label>

                        <label class="radio-inline">
                            <input type="radio" name="optradio">KEGIATAN
                        </label>
                    </form>
                </div>

                    
                    <form>
                        <textarea name="editor1" id="editor1" rows="10" cols="80" ></textarea>
                            <script>
                                          // Replace the <textarea id="editor1"> with a CKEditor
                                          // instance, using default configuration.
                                          CKEDITOR.replace( 'editor1' );
                            </script>
                    </form>
                    
                    </br>
                    <div class="form-group">
                        <form style="text-align: right">
                            <span >                        
                            <a href="#" target="blank"><label class="btn btn-default"><i class="fa fa-check"></i>Publish
                                </label></a>
                            </span>
                            <span >                        
                            <a href="#" target="blank"><label class="btn btn-default"><i class="fa fa-check"></i>Simpan
                                </label></a>
                            </span>
                        </form>
                        
                   	</div>
        </div>

   

    </section>
@endsection