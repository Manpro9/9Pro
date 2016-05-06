@extends('layout.master')

<!-- CUSTOM CSS UNTUK DOKUMEN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK DOKUMEN -->
@section('js')
    <!-- ISIKAN DISINI -->
    <script src="{{ asset('public/js/agenda/agenda.js')}}"></script>
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) DOKUMEN -->
@section('content-header')
  <h1>
    Dokumen
    <small>Kelola file-file</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK DOKUMEN -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
    		<div class="container">
                <div class="row">                                              
                    <div class="col-md-12">
                    	<h4>Dokumen arsip</h4>
                        <div class="table-responsive">
                            <?php 
                                if(isset($_GET['page']))
                                    $count = $_GET['page']; 
                                else
                                    $count = 1;

                                $counter = 5 * $count - 4; ?>
							<table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                    @if (Auth::user())
                                    <th><input type="checkbox" id="checkall" /></th>
                                    @endif
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Jenis File</th>
                                    <th>Keterangan</th>
                                    <th>Download</th>
                                    @if (Auth::user())
                                    <th>re-Upload</th>
                                    <th>Delete</th>
                                    @endif
                                </thead>
                                <tbody> 
                                    @foreach($documents as $document)        
                                    <tr>
                                        @if (Auth::user())
                                        <td><input type="checkbox" class="checkthis" /></td>
                                        @endif
                                        <td>{{ $counter }}</td>
                                        <td>{{ $document->title }}</td>
                                        <td>{{ $document->type }}</td>
                                        <td>{{ $document->description }}</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Unduh"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-download"></span></button></p></td>
                                        
                                        @if (Auth::user())
                                        <td><p data-placement="top" data-toggle="tooltip" title="Upload"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-open"></span></button></p>
                                        </td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                                        </td>
                                        @endif
                                    </tr> 
                                    <?php $counter++; ?>
                                    @endforeach    
                                </tbody>                 
                            </table>
                        	<div class="clearfix"></div>
                            {{ $documents->links() }}                        
                        </div>                          
                    </div>
                    @if (Auth::user())
    				<form>
                        <span>
                        <a href="{{ url('/content/upload') }}">
                        <label class="btn btn-default">
                        <i class="fa fa-upload"></i>upload file
                        </label></a>
                        </span>
                    </form>
                    @endif
                </div>
            </div>

                              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
                                                       



      		</div>
     

    </section>
@endsection