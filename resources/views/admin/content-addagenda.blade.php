@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('public/datepicker/css/datepicker.css') }}">
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <script type="text/javascript" src="{{ asset('public/js/admin/create-agenda.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/datepicker/js/bootstrap-datepicker.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) CONTENT EDITOR -->
@section('content-header')
  <h1>
    Pengaturan user
    <small>Tambah dan edit user</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK CONTENT EDITOR -->
@section('content')
	<!-- ISIKAN DISINI -->
    {!! Form::open(['method' => 'post']) !!}
    <section class="content">
        <div class="container"> <br />
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Agenda Terbaru PSDM</strong> <small> </small></div>
                        <div class="panel-body">                                                                                         
                            <div class="form-group">
                               <label for="document-name">Name Agenda:</label>
                                     <input type="text" class="form-control" id="document-name" placeholder="Wajib diisi" name="name">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                    <input type="text" class="form-control" id="document-desc" placeholder="Wajib diisi" name="desc">
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Mulai:</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control" id="dpd1" placeholder="Wajib diisi" name="start">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Selesai:</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control" id="dpd2" placeholder="Wajib diisi" name="end">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                                                            
                            <div style="text-align: right">
                                <button type="submit" class="btn btn-default create-agenda">
                                    <i class="fa fa-check"></i>Publish
                                </button>        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {!! Form::close() !!}
	
@endsection