@extends('layout.master')

<!-- CUSTOM CSS UNTUK USERS -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK USERS -->
@section('js')
    <script type="text/javascript" src="{{ asset('public/js/admin/users.js') }}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) USERS -->
@section('content-header')
  <h1>
    Manage User
    <small>Kelola pengguna</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK USERS -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
		<div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab" >
                     <thead>
                        <a href="{{ url('content/adduser') }}" class="btn btn-primary btn-xs pull-right"><b>+</b>Tambah User</a>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>ID</th>
                                <th>E-mail</th>
                                <th class="text-center">Action</th>
                            </tr>
                    </thead>
                            @foreach($users as $user)
                            <tr>
                                <td>1</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <button class="btn btn-info btn-xs content-users" value="{{ $user->id }}" role="edit">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </button>
                                    <button class="btn btn-danger btn-xs content-users" value="{{ $user->id }}" role="delete">
                                        <span class="glyphicon glyphicon-remove"></span> Del
                                    </button>
                            </tr>
                            @endforeach
                </table>
            </div>
        </div>
    

    </section>
@endsection