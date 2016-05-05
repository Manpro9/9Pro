@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <!-- ISIKAN DISINI -->
    
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) CONTENT EDITOR -->
@section('content-header')
  <h1>
    Pengaturan user
    <small>Tambah</small>
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
                        <div class="panel-heading"><strong>Tambah User</strong> <small> </small></div>
                            <div class="panel-body">
                                                      
                                                                                                                   
                                <div class="form-group">
                                    <label for="document-name">Name User:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Username:</label>
                                        <input type="text" class="form-control" id="document-username" placeholder="" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">E-mail:</label>
                                        <input type="text" class="form-control" id="document-email" placeholder="" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Password:</label>
                                        <input type="text" class="form-control" id="document-password" placeholder="" name="password">
                                </div>
                                                        
                                <div class="form-group" style="text-align: right">
                                    <button type="submit">
                                        <i class="fa fa-check"></i>Simpan
                                    </button>
                                </div>

                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
	{!! Form::close() !!}
@endsection