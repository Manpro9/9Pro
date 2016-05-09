@extends('layout.master')

<!-- CUSTOM CSS UNTUK AGENDA -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK AGENDA -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script src="{{ asset('public/js/agenda/agenda.js')}}"></script>
  	
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) AGENDA -->
@section('content-header')
  <h1>
    Agenda
    <small>Agenda Sepekan</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK AGENDA -->
@section('content')
	<!-- ISIKAN DISINI -->
	    <section class="content">
    		<div class="container">
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
                    <div class="col-md-12">
                        <h4>Daftar agenda kegiatan PSDM</h4>
                        <div class="table-responsive">
                            @if(count($agenda) <= 0)
                                <p>Saat ini tidak ada agenda.</p>
                            @else
							<table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Nama Kegiatan</th>
                                   	<th>Keterangan</th>
                                    @if(Auth::user())
                                        @if (Auth::user()->auth_level == 1)
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                        @endif
                                    @endif
                                </thead>
                                <tbody>
                                    <?php 
                                        if(isset($_GET['page']))
                                            $count = $_GET['page']; 
                                        else
                                            $count = 1;

                                        $counter = 5 * $count - 4; 
                                    ?>
                                    @foreach($agenda as $data)
                                        <?php
                                            $start = date('d/m/Y', strtotime($data['start']))
                                         ?>   
                                    <tr>
                                        <td>{{ $counter }}</td>
                                        <td>{{ $start }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->description }}</td>
                                        @if(Auth::user())
                                            @if(Auth::user()->auth_level == 1)  
                                            <td>
                                                <p>
                                                    <button class="btn btn-primary btn-xs role-agenda" value="{{ $data->id }}" role="edit">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                </p>
                                            </td>
                                            <td>
                                                <p>
                                                    <button class="btn btn-danger btn-xs role-agenda" value="{{ $data->id }}" role="delete" >
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </p>
                                            </td>
                                            @endif
                                        @endif
                                    </tr>     
                                    <?php $counter++; ?>
                                    @endforeach
                                    @endif
                                </tbody>             
                            </table>

                        	<div class="clearfix"></div>
                            {{ $agenda->links() }}
                        </div>                              
                    </div>
                    @if(Auth::user())
                        @if(Auth::user()->auth_level == 1)           
        				<form>
                            <span>
                                <a href="{{ url('content/addagenda') }}">
                                <label class="btn btn-default"><i class="fa fa-calendar-check-o"></i> Tambah Agenda baru
                                </label>
                                </a>
                            </span>
                        </form>
                        @endif
                    @endif
                </div>
            </div>
    </section>

@endsection