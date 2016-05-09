@extends('layout.master')

<!-- CUSTOM CSS UNTUK AGENDA -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK AGENDA -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script src="{{ asset('public/js/content/artikel.js')}}"></script>
  	
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) AGENDA -->
@section('content-header')
  <h1>
    Panel Berita
    <small>Berita</small>
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
                        <h4>Panel Berita</h4>
                        <div class="table-responsive">
							<table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    <th><input type="checkbox" id="checkall" /></th>
                                    <th>No.</th>
                                    <th>Artikel</th>
                                    <th>Tanggal</th>
                                   	<th>Keterangan</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>
                                <tbody>
                                    <?php 
                                        if(isset($_GET['page']))
                                            $count = $_GET['page']; 
                                        else
                                            $count = 1;

                                        $counter = 5 * $count - 4; ?>
                                    @foreach($artikel as $data)       
                                        <tr>
                                            <td><input type="checkbox" class="checkthis" /></td>
                                            <td>{{ $counter }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->created_at->format('d M Y') }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs edit_artikel" data-title="Edit" data-toggle="modal" data-target="#edit" value="{{ $data->id }}" from="berita" role="edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                                            </td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs delete-content-artikel" data-title="Delete" data-toggle="modal" data-target="#delete" value="{{ $data->id }}" from="berita" role="delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                                            </td>
                                        </tr>
                                        <?php $counter++; ?>
                                    @endforeach    
                                </tbody>             
                            </table>

                        	<div class="clearfix"></div>
                            {{ $artikel->links() }}
                        </div>                              
                    </div>         
    				<form>
                        <span>
                            <a href="{{ url('content/create') }}">
                            <label class="btn btn-default"><i class="fa fa-calendar-check-o"></i>Tambah berita
                            </label>
                            </a>
                        </span>
                    </form> 
                </div>
            </div>

                              <!-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                                            </div>
                                            <div class="modal-body">
                                            	<div class="form-group">
                                                	<input class="form-control " type="text" placeholder="Mohsin">
                                               	</div>
                                                <div class="form-group">
                                                    <input class="form-control " type="text" placeholder="Irshad">
                                                </div>
                                                <div class="form-group">
                                                    <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                                                </div>
                                            </div>
                                                
                                                <div class="modal-footer ">
                                                    <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                                </div>
                                            
                                                             
                                                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    	<div class="modal-content">
                                                          	<div class="modal-header">
                                                        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                        			<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                                                      		</div>
                                                          	<div class="modal-body">
                                                       
                                                       			<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
                                                       		</div>
                                                       
                                                      	</div>
                                                        	<div class="modal-footer ">
                                                        		<button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                                                        		<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                                                      		</div>
                                                    </div>

                                                    
                                                </div>
                                                      
                                                                   
                                           </div>
                                                       



      		</div> -->
     

    </section>

@endsection