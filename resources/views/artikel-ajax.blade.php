<div class="artikel-ajax">
	<div class="row" style="padding-left:2%;">
		@foreach($dataArtikel as $data)
			<?php 
				$title = str_slug($data['title']);
				if ($data['type'] == 'berita')
					$route = 'berita.show';
				else if ($data['type'] == 'kegiatan')
					$route = 'kegiatan.show';

				$image = substr($data['image'], 1);
				$image = strtr($image, "\\", "/");
			?>
			<a href="{{ route($route, $title) }}">
				<div class="col-sm-6" style="border:1px solid black; width:49%; margin-left:0px; padding-left:0px;padding-right:0px;">
					<center><img src="{{ asset($image) }}" class="topic" alt="gambar1"></center>
					<h5 style="text-align:center;"><b>{{ $data->title }}</b></h5>
					<p style="text-align:center;"><b>{{ $data->description }}</b></p>
				</div>
			</a>
		@endforeach
	</div>
</div>