<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CidadesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::table('cidades')->insert([
				'id' => 2878,
				'nome' => 'Curitiba',
				'estado_id' => '18',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
		DB::table('cidades')->insert([
				'id' => 3135,
				'nome' => 'São José dos Pinhais',
				'estado_id' => '18',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
		DB::table('cidades')->insert([
				'id' => 5270,
				'nome' => 'São Paulo',
				'estado_id' => '26',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
		DB::table('cidades')->insert([
				'id' => 5253,
				'nome' => 'São Caetano do Sul',
				'estado_id' => '26',
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}