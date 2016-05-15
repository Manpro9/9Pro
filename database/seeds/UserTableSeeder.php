<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = array (
			'name' => 'Admin PSDM',
            'username' => 'Admin',
			'email' => 'admin@admin.com',
			'password' => bcrypt('psdm2016'),
            'auth_level' => 1,
			'created_at' => DB::raw('NOW()'),
			'updated_at' => DB::raw('NOW()'),
			);
		DB::table('users')->insert($user);


        for ($i=1; $i <= 20 ; $i++) { 
           $user = array (
            'name' => $i,
            'username' => 'Username ' . $i,
            'email' => $i. '@'. $i .'.com',
            'password' => bcrypt($i),
            'auth_level' => 2,
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
            );
        DB::table('users')->insert($user);
        }
    }
}
