<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EstadosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::table('estados')->insert([
				'id' => 26, 
				'nome' => 'São Paulo',
				'sigla' => 'SP',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
		DB::table('estados')->insert([
				'id' => 18,
				'nome' => 'Paraná',
				'sigla' => 'PR',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}