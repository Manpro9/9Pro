@extends('layout.master')

<!-- CUSTOM CSS UNTUK USERS -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK USERS -->
@section('js')
    <!-- ISIKAN DISINI -->
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
                                    <a class='btn btn-info btn-xs' href="#">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </a> 
                                    <a href="#" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-remove"></span> Del
                                    </a></td>
                            </tr>
                            @endforeach
                </table>
            </div>
        </div>
    

    </section>
@endsection