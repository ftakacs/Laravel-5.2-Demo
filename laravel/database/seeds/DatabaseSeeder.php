<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(RoleTableSeeder::class);
        // $this->call(EstadosTableSeeder::class);
    	// $this->call(CidadesTableSeeder::class);
    	$this->call(EventosTableSeeder::class);
    }
}
