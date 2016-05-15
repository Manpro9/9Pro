<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse neque purus, cursus a dignissim non, pellentesque sit amet est. Nunc pharetra vehicula sem sit amet eleifend. Etiam facilisis et est ac dignissim. Nullam rutrum eleifend nisl non sodales. Phasellus auctor interdum imperdiet. Integer ut lacus id metus tristique congue. Vivamus sollicitudin sapien ut eleifend condimentum. Aenean dictum sem ut magna condimentum, in laoreet mi convallis.

Morbi maximus eu erat at blandit. Morbi euismod finibus sem sed lobortis. Pellentesque sit amet ex sagittis, suscipit nibh eget, gravida elit. Morbi placerat lorem non urna congue, a imperdiet arcu dignissim. Donec elementum, orci vitae lacinia euismod, mauris massa pellentesque eros, a semper ante quam in ipsum. Vestibulum eget convallis nunc, quis pretium orci. Donec sit amet commodo magna. Quisque auctor est at vulputate accumsan. Quisque ultrices maximus molestie. Sed vitae sem turpis. Aenean non pharetra arcu, vel tristique magna. Pellentesque metus elit, placerat ut malesuada sed, tristique in erat. Nunc lorem orci, rhoncus sit amet finibus vel, pellentesque eget tellus. Vestibulum pulvinar iaculis dignissim. Curabitur cursus volutpat sagittis.

Quisque eget ultrices tellus, ac tempus sapien. In ac augue bibendum dui dictum ultricies ac a diam. Duis rhoncus sollicitudin tellus, non semper lectus fermentum sit amet. Etiam consequat, tellus quis semper commodo, massa lacus sodales mauris, a laoreet lectus leo vitae ipsum. Maecenas arcu quam, sollicitudin non erat quis, egestas consequat lacus. Morbi dictum, nibh eget finibus lobortis, velit nunc vehicula elit, vitae ornare risus tellus vitae magna. Nunc facilisis, tortor et vulputate semper, tortor velit efficitur augue, id blandit nisl ante vel mi. Curabitur sit amet ipsum facilisis nibh consequat finibus. Mauris eu eleifend leo, at sollicitudin ipsum. Sed eu nunc rutrum, gravida odio non, hendrerit erat. Duis vel ipsum auctor eros pulvinar tincidunt.';


    	// Berita
    	for($i = 1; $i <= 20; $i++) {
	        $berita = array (
				'title' => 'Ini Judul Berita' . $i,
				'description' => 'Ini contoh deskripsi singkat di artikel Berita ' . $i,
				'image' => '/public/images/berita/contoh_berita.jpg',
				'type' => 'berita',
				'content' => 'Content Berita ' . $i . ' ' . $content,
				'status' => 'published',
				'created_at' => DB::raw('NOW()'),
				'updated_at' => DB::raw('NOW()'),
				);
			DB::table('artikel')->insert($berita);
		}

		// Kegiatan
    	for($i = 1; $i <= 20; $i++) {
	        $kegiatan = array (
				'title' => 'Ini Judul Kegiatan' . $i,
				'description' => 'Ini contoh deskripsi singkat di artikel Kegiatan ' . $i,
				'image' => '/public/images/kegiatan/contoh_kegiatan.jpg',
				'type' => 'kegiatan',
				'content' => 'Content Kegiatan ' . $i . ' ' . $content,
				'status' => 'published',
				'created_at' => DB::raw('NOW()'),
				'updated_at' => DB::raw('NOW()'),
				);
			DB::table('artikel')->insert($kegiatan);
		}
    }
}
