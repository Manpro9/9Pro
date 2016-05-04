<div class="artikel-ajax">
	<div class="row" style="padding-left:2%;">
		@foreach($dataArtikel as $data)
			<?php 
				$title = str_slug($data['title']);
				if ($data['type'] == 'berita')
					$route = 'berita.show';
				else if ($data['type'] == 'kegiatan')
					$route = 'kegiatan.show';
			?>
			<a href="{{ route($route, $title) }}">
				<div class="col-sm-6" style="border:1px solid black; width:48%; margin-left:0px; padding-left:0px;padding-right:0px;">
					<img src="{{ asset($data->image) }}" class="topic" alt="gambar1">
					<h5 style="text-align:center;"><b>{{ $data->title }}</b></h5>
				</div>
			</a>
		@endforeach
	</div>
</div>