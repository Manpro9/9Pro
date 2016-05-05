@extends('layout.master')

<!-- CUSTOM CSS UNTUK CONTENT EDITOR -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK CONTENT EDITOR -->
@section('js')
    <script type="text/javascript" src="{{ asset('public/js/admin/users.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) CONTENT EDITOR -->
@section('content-header')
  <h1>
    Pengaturan user
    <small>Ganti</small>
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
                        <div class="panel-heading"><strong>Ganti User</strong> <small> </small></div>
                            <div class="panel-body">
                                                      
                                @foreach($users as $user)                                                                  
                                <div class="form-group">
                                    <label for="document-name">Name User:</label>
                                        <input type="text" class="form-control" id="document-name" placeholder="Wajib diisi!" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Username:</label>
                                        <input type="text" class="form-control" id="document-username" placeholder="Wajib diisi!" name="username" value="{{ $user->username }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">E-mail:</label>
                                        <input type="email" class="form-control" id="document-email" placeholder="Wajib diisi!" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Password:</label>
                                        <input type="password" class="form-control" id="document-password" placeholder="Kosongi jika tidak ingin mengganti password" name="password">
                                </div>
                                                        
                                <div class="form-group" style="text-align: right">
                                    <button type="submit" class="submit">
                                        <i class="fa fa-check"></i>Ganti
                                    </button>
                                </div>
                                @endforeach

                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
	{!! Form::close() !!}
    
@endsection