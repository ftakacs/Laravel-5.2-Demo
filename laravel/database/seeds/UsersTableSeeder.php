<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$name = str_random(10);
    	DB::table('users')->insert([
    			'name' => $name,
    			'email' => $name .'@gmail.com',
    			'password' => bcrypt('secret'),
    			'role_id' => 1, 
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);
    	
    	DB::table('users')->insert([
    			'name' => 'user',
    			'email' => 'user@user.com',
    			'password' => bcrypt('secret'),
    			'role_id' => 1, 
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);
    	

    	DB::table('users')->insert([
    			'name' => 'admin',
    			'email' => 'admin@gmail.com',
    			'password' => bcrypt('secret'),
    			'role_id' => 2,
    			'created_at' => Carbon::now()->format('Y-m-d H:i:s')
    	]);
    }
}
