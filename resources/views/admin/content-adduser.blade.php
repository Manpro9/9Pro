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
    <small>Tambah dan edit user</small>
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
                        <div class="panel-heading"><strong>Tambah User</strong> <small> </small></div>
                            <div class="panel-body">
                                                      
                                                                                                                   
                                <div class="form-group">
                                    <label for="document-name">Name User:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Username:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">E-mail:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Password:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="">
                                </div>
                                                        
                                    <form style="text-align: right">
                                        <span >
                                            <a href="#" target="blank"><label class="btn btn-default">
                                            <i class="fa fa-check"></i>Simpan
                                            </label></a>
                                        </span>
                                    </form>

                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
	
@endsection