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
			'name' => 'admin',
			'email' => 'admin@admin.com',
			'password' => bcrypt('psdm2016'),
			'created_at' => DB::raw('NOW()'),
			'updated_at' => DB::raw('NOW()'),
			);
		DB::table('users')->insert($user);
    }
}
