@extends('layout.master')

<!-- CUSTOM CSS UNTUK KEGIATAN -->
@section('css')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM JS UNTUK KEGIATAN -->
@section('js')
    <!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) KEGIATAN -->
@section('content-header')
  <h1>
    Kegiatan
    <small>Berita Kegiatan PSDM</small>
  </h1>
@endsection

<!-- CUSTOM CONTENT UNTUK KEGIATAN -->
@section('content')
	<!-- ISIKAN DISINI -->
	<section class="content">
        <div class="container">
            <form style="text-align: right">
                <span>
                    <a href="{{ url('content/edit') }}">
                    	<label class="btn btn-default">
	                        <i class="fa fa-bullhorn"></i>Update Berita Baru
	                    </label>
	                </a>
                </span>
            </form>
            <div class="row">
            	<div class="well">
                	<h1 class="text-center">Berita teratas</h1>
                	<div class="list-group">
                		<a href="#" class="list-group-item">
		                  	<div class="media col-md-3">
		                        <figure class="pull-left">
		                            <img class="media-object img-rounded img-responsive"  src="http://placehold.it/350x250" alt="placehold.it/350x250" >
		                        </figure>
		                    </div>
	                        <div class="col-md-6">
	                            <h4 class="list-group-item-heading"> List group heading </h4>
	                            <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum. 
	                                Vel et nonumy gubergren, ad has tota facilis probatus. Ea legere legimus tibique cum, sale tantas vim ea, eu vivendo expetendis vim. Voluptua vituperatoribus et mel, ius no elitr deserunt mediocrem. Mea facilisi torquatos ad.
	                            </p>
	                        </div>
	                        <div class="col-md-3 text-center">
	                            <button type="button" class="btn btn-default btn-lg btn-block"> Edit </button>
	                        </div>
	                    </a>
		                <a href="#" class="list-group-item">
	                        <div class="media col-md-3">
	                            <figure class="pull-left">
	                                <img class="media-object img-rounded img-responsive" src="http://placehold.it/350x250" alt="placehold.it/350x250" >
	                            </figure>
	                        </div>
	                        <div class="col-md-6">
	                            <h4 class="list-group-item-heading"> List group heading </h4>
	                            <p class="list-group-item-text"> Eu eum corpora torquatos, ne postea constituto mea, quo tale lorem facer no. Ut sed odio appetere partiendo, quo meliore salutandi ex. Vix an sanctus vivendo, sed vocibus accumsan petentium ea. 
	                                Sed integre saperet at, no nec debet erant, quo dico incorrupte comprehensam ut. Et minimum consulatu ius, an dolores iracundia est, oportere vituperata interpretaris sea an. Sed id error quando indoctum, mel suas saperet at.                         
	                            </p>
	                        </div>
	                        <div class="col-md-3 text-center">
	                            <button type="button" class="btn btn-default btn-lg btn-block"> Edit </button>
	                        </div>
		                </a>
		                <a href="#" class="list-group-item">
	                        <div class="media col-md-3">
	                            <figure class="pull-left">
	                                <img class="media-object img-rounded img-responsive" src="http://placehold.it/350x250" alt="placehold.it/350x250">
	                            </figure>
	                        </div>
	                        <div class="col-md-6">
	                            <h4 class="list-group-item-heading"> List group heading </h4>
	                            <p class="list-group-item-text"> Ut mea viris eripuit theophrastus, cu ponderum accusata consequuntur cum. Suas quaestio cotidieque pro ea. Nam nihil persecuti philosophia id, nam quot populo ea. 
	                                Falli urbanitas ei pri, eu est enim volumus, mei no volutpat periculis. Est errem iudicabit cu. At usu vocibus officiis, ad ius eros tibique appellantur.                         
	                            </p>
	                        </div>
	                        <div class="col-md-3 text-center">
	                            <button type="button" class="btn btn-default btn-lg btn-block"> Edit </button>
	                        </div>
		                </a>
                </div>

	                <!--page number-->
	                 <div class="clearfix"></div>
	                    <ul class="pagination pull-right">
	                      <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
	                      <li class="active"><a href="#">1</a></li>
	                      <li><a href="#">2</a></li>
	                      <li><a href="#">3</a></li>
	                      <li><a href="#">4</a></li>
	                      <li><a href="#">5</a></li>
	                      <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
	                    </ul>
	                </div>
          		</div>
        	</div>
    </section>
@endsection