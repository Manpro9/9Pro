@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<!-- ISIKAN DISINI -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/summernote/summernote.css') }}">
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script type="text/javascript" src="{{ asset('public/js/admin/content-editor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/summernote/summernote.min.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) CONTENT EDITOR -->
@section('content-header')
  <h1>
    Publish Artikel
    <small>Berita - Kegiatan</small>
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
                <label for="keterangan">Deskripsi :</label>
                    <input type="text" class="form-control" id="document-name" placeholder="">
            </div>
            <div class="form-group">
                <div class="input-group image-preview">
                    <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                    <span class="input-group-btn">
                        <!-- image-preview-clear button -->
                        <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                            <span class="glyphicon glyphicon-remove"></span> Clear
                        </button>
                        <!-- image-preview-input -->
                        <div class="btn btn-default image-preview-input">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="image-preview-input-title">Browse</span>
                            <input type="file" accept="image/png, image/jpg, image/jpeg" name="client"/> <!-- rename it -->
                            <img src="" id="hidden-image" hidden>
                        </div>
                    </span>
                </div><!-- /input-group image-preview [TO HERE]-->
            </div>            
            <div class="form-group">
                <div class="panel-heading" style="text-align: center"><strong>Tipe Artikel</strong> <small> </small></div>
                    <form role="form" style="text-align:center">
                        <label class="radio-inline">
                            <input type="radio" name="optradio">BERITA
                        </label>                                              

                        <label class="radio-inline">
                            <input type="radio" name="optradio">KEGIATAN
                        </label>
                    </form>
                </div>

                <!-- Container untuk tulis artikel -->
                <div id="summernote"></div>
                    
                </br>
                <div class="form-group">
                    <form style="text-align: right">
                        <span >                        
                        <a href="#" target="blank"><label class="btn btn-default"><i class="fa fa-check"></i>Publish
                            </label></a>
                        </span>
                        <span >                        
                        <a href="#" target="blank"><label class="btn btn-default"><i class="fa fa-check"></i>Simpan Sebagai Draft
                            </label></a>
                        </span>
                    </form>
                    
               	</div>
        </div>

   

    </section>
@endsection