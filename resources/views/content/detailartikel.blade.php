@extends('layout.master')

<!-- CUSTOM CSS UNTUK BERITA -->
@section('css')
	<!-- ISIKAN DISINI -->
		<link rel="stylesheet" href="{{ asset('public/css/content/comment/post.css' )}}">
@endsection

<!-- CUSTOM JS UNTUK BERITA -->
@section('js')
	<!-- ISIKAN DISINI -->
@endsection

<!-- CUSTOM CONTENT HEADER (JUDUL) BERITA -->
@section('content-header')
	@foreach($artikel as $data)
	<h1>
		{{ ucfirst($data->type) }}
		<!-- <small>Detail Artikel</small> -->
	</h1>
	@endforeach
@endsection

<!-- CUSTOM CONTENT UNTUK BERITA -->
@section('content')

		@foreach($artikel as $data)

		<div class="container">
			<div class="box-content">
				<div class="page-header">
				  <h1>{{ $data->title }} <small class="date">{{ $data->created_at->format('d M Y') }}</small></h1>
			  	</div>
			  	<div class="col-sm-4">
	              <div class="carousel-inner">
	                <div class="item active">
	                  <img src="{{ asset($data->image) }}" alt="gambar1" style="width:300px; height:250px; margin-bottom:10px;">
	                </div>
	              </div>
        		</div>
        		<div class="row-fluid">            
				  <div class="span4">
				  	<?php echo $data['content'] ?>
				  </div>
			  </div>
			</div>
		</div>
		</br></br>
		@endforeach

		<div class="container"> <!-- Untuk Posting Comment -->
			<div>
				<h3>Post komentar Anda di sini</h3>
			</div>
			<div class="row">
		    	<div class="col-md-6">
					<div class="widget-area no-padding blank" style="margin-top:0px;">
						<div class="status-upload">
							<form>
								<textarea placeholder="Apa komentar anda?" ></textarea>
								<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Komentari</button>
							</form>
						</div><!-- Status Upload  -->
					</div><!-- Widget Area -->
				</div>
		    </div>
		</div></br>

		<div class="container">
		  <div class="row">
		    <div class="col-md-8">
		      <h2 class="page-header">Komentar</h2>
		        <section class="comment-list">
		          <!-- First Comment -->
		          <article class="row">
		            <div class="col-md-2 col-sm-2 hidden-xs">
		              <figure class="thumbnail">
		                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
		                <figcaption class="text-center">username</figcaption>
		              </figure>
		            </div>
		            <div class="col-md-10 col-sm-10">
		              <div class="panel panel-default arrow left">
		                <div class="panel-body">
		                  <header class="text-left">
		                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
		                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
		                  </header>
		                  <div class="comment-post">
		                    <p>
		                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                    </p>
		                  </div>
		                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
		                </div>
		              </div>
		            </div>
		          </article>
		          <!-- Second Comment Reply -->
		          <article class="row">
		            <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
		              <figure class="thumbnail">
		                <img class="img-responsive" src="http://www.keita-gaming.com/assets/profile/default-avatar-c5d8ec086224cb6fc4e395f4ba3018c2.jpg" />
		                <figcaption class="text-center">username</figcaption>
		              </figure>
		            </div>
		            <div class="col-md-9 col-sm-9">
		              <div class="panel panel-default arrow left">
		                <div class="panel-heading right">Reply</div>
		                <div class="panel-body">
		                  <header class="text-left">
		                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
		                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
		                  </header>
		                  <div class="comment-post">
		                    <p>
		                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		                    </p>
		                  </div>
		                  <p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>
		                </div>
		              </div>
		            </div>
		          </article>

		        </section>
		    </div>
		  </div>
		</div>

@endsection