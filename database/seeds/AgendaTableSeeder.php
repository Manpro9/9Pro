<?php

use Illuminate\Database\Seeder;

class AgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 9 ; $i++) { 
           $user = array (
            'title' => 'Judul Agenda ke-' . $i,
            'description' => 'Ini Contoh Deskripsi ke- ' . $i,
            'start' => '2016-06-0' . $i,
            'end' => '2016-06-0' . $i,
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
            );
        DB::table('agenda')->insert($user);
        }

        for ($i=10; $i <= 20 ; $i++) { 
           $user = array (
            'title' => 'Judul Agenda ke-' . $i,
            'description' => 'Ini Contoh Deskripsi ke- ' . $i,
            'start' => '2016-06-' . $i,
            'end' => '2016-06-' . $i,
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
            );
        DB::table('agenda')->insert($user);
        }
    }
}
