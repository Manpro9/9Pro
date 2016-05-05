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
    @foreach($artikel as $data)
        <h1>
            Edit Artikel
            <small>{{ ucfirst($data->type) }}</small>
        </h1>
    @endforeach
@endsection

<!-- CUSTOM CONTENT UNTUK CONTENT EDITOR -->
@section('content')
	<!-- ISIKAN DISINI -->
    @foreach($artikel as $data)
    {!! Form::open(['method' => 'post', 'files' => true, 'action' => array('ArtikelController@update', $data->id)]) !!}
	<section class="content">
        <div class="container">
        	<div class="form-group">
                <label for="document-name">Judul :</label>
                    <input type="text" class="form-control" id="document-name" value="{{ $data->title }}" name="title">
            </div>
            <div class="form-group">
                <label for="keterangan">Deskripsi :</label>
                    <input type="text" class="form-control" id="document-desc" value="{{ $data->description }}" name="desc">
            </div>
            
            <!-- display image dari database -->
            <div>
                <img src="{{ asset($data->image) }}">
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
                            <span class="image-preview-input-title">Ganti Gambar</span>
                            <input type="file" accept="image/png, image/jpg, image/jpeg" name="image"/> <!-- rename it -->
                            <img src="" id="hidden-image" hidden>
                        </div>
                    </span>
                </div><!-- /input-group image-preview [TO HERE]-->
            </div>     
            <?php 
                    $checkedValue = array('', '');
                    if ($data['type'] == 'berita')
                        $checkedValue[0] = 'checked';
                    else if ($data['type'] == 'kegiatan')
                        $checkedValue[1] = 'checked';
                ?>       
            <div class="form-group">
                
                <div class="panel-heading" style="text-align: center"><strong>Tipe Artikel</strong> <small> </small></div>
                    
                        <label class="radio-inline">
                            <input type="radio" name="type" value="berita" <?php echo $checkedValue[0]; ?>>BERITA
                        </label>                                              

                        <label class="radio-inline">
                            <input type="radio" name="type" value="kegiatan" <?php echo $checkedValue[1]; ?>>KEGIATAN
                        </label>
                   
            </div>

                <!-- Container untuk tulis artikel -->
                <div id="summernote"><?php echo $data['content'] ?></div>
                    
                </br>
                <div class="form-group" style="text-align: right">
                    <button type="submit" class="btn btn-default btn-edit-artikel" role="published" value="{{ $data->id }}"><i class="fa fa-check"></i>Publish</button>
                    <button type="submit" class="btn btn-default btn-edit-artikel" role="draft" value="{{ $data->id }}"><i class="fa fa-check"></i>Simpan Sebagai Draft</button>
               	    <input type="hidden" id="tempContent" name="temp_content">
                    <input type="hidden" id="tempStatus" name="temp_status">
                </div>

        </div>

   
        
    </section>
    {!! Form::close() !!}
    @endforeach
@endsection