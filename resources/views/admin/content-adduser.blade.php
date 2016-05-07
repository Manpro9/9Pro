@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <script type="text/javascript" src="{{ asset('public/js/admin/create-user.js') }}"></script>
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
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Tambah User</strong> <small> </small></div>
                            <!-- jangan dihapus -->
                            <div class="ajax-warning-message"></div>
                            <div class="panel-body">                                                              
                                <div class="form-group">
                                    <label for="document-name">Name User:</label>
                                        @if(Session::has('flash_name'))
                                            <input type="text" class="form-control" id="document-name" placeholder="Masukan nama" name="name" value="{{ Session::get('flash_name') }}">
                                        @else 
                                            <input type="text" class="form-control" id="document-name" placeholder="Masukan nama" name="name">
                                        @endif
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Username:</label>
                                        @if(Session::has('flash_username'))
                                            <input type="text" class="form-control" id="document-username" placeholder="Masukan username" name="username" value="{{ Session::get('flash_username') }}">
                                        @else 
                                            <input type="text" class="form-control" id="document-username" placeholder="Masukan username" name="username">
                                        @endif
                                        
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">E-mail:</label>
                                        @if(Session::has('flash_email'))
                                            <input type="email" class="form-control" id="document-email" placeholder="Masukan email" name="email" value="{{ Session::get('flash_email') }}">
                                        @else 
                                            <input type="email" class="form-control" id="document-email" placeholder="Masukan email" name="email">
                                        @endif
                                        
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Password:</label>
                                        @if(Session::has('flash_password'))
                                            <input type="password" class="form-control" id="document-password" placeholder="Masukan password" name="password"  value="{{ Session::get('flash_password') }}">
                                        @else 
                                            <input type="password" class="form-control" id="document-password" placeholder="Masukan password" name="password">
                                        @endif
                                        
                                </div>
                                                        
                                <div class="form-group" style="text-align: right">
                                    <button type="submit" class="create-user">
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