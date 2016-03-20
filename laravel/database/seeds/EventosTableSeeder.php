<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		DB::table('eventos')->insert([
				'nome' => 'Grande Prêmiodo Brasil de F1',
				'local' => 'Interlagos',
				'cidade_id' => 5270,
				'estado_id' => 26,
				'descricao' => 'Etapa do circuito mundial de Fórmula 1 de 2016',
				'data' => date('Y-m-d',mktime(14,0,0,11,13,2016)),
				'ativo' => 0,
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
		
		DB::table('eventos')->insert([
				'nome' => 'Show de Maria Rita',
				'local' => 'Teatro Paulo Machado de Carvalho',
				'cidade_id' => 5253,
				'estado_id' => 26,
				'descricao' => 'Maria Rita começou a cantar profissionalmente aos 24 anos. Seu primeiro disco lançado em 2003. O primeiro DVD, que traz o mesmo titulo e foi para as lojas na primeira semana de novembro chegou á marca de 180 mil cópias.

O reconhecimento foi de público e de crítica. Maria Rita venceu prêmios importantes em 2004, Grammy Latino- Revelação do ano, melhor álbum e de MPB e Melhor canção em português (a festa).

Em 2005, chegou ás lojas o novo trabalho de Maria Rita, “Segundo”. O primeiro single foi “Caminho das águas”. O terceiro CD “Samba meu”, teve lançamento simultâneo nos Estados Unidos, América Latina, México, Portugal, Israel e Reino Unido.

Em 2008, a ABPD concedeu o Disco de Platina a “Samba Meu”, e o premio de melhor CD no Prêmio Multishow de Música Brasileira. E ganhou seu sexto Grammy Latino, como “Melhor Álbum de Samba”

Em 2011, começou a se preparar um show em homenagem a Elis Regina, que fazia parte do projeto Nivea Viva Elis. Em principio seriam 5 apresentações gratuitas, mas o sucesso foi tão grande que a cantora decidiu seguir com o show, rebatizando-o de “Redescobrir”. Ganhou o Grammy Latino da categoria Melhor Álbum de Música Popular Brasileira.

Em 2014, Maria Rita lança o sexto álbum de sua carreira, “Coração a batucar”.

VENDAS:

https://www.ingressorapido.com.br/compras/?id=47060#!/',
				'data' => date('Y-m-d',mktime(19,0,0,4,2,2016)),
				'ativo' => 1,
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
		
		DB::table('eventos')->insert([
				'nome' => '4º Congresso Brasileiro de Nutrição Estética',
				'local' => 'Interlagos',
				'cidade_id' => 2878,
				'estado_id' => 18,
				'descricao' => 'O 4º Congresso Brasileiro de Nutrição Estética tem por objetivo promover o intercâmbio de informações e experiências de natureza prática e técnica entre os profissionais, os estudantes, as empresas e entidades que atuam no setor da Nutrição Estética, possibilitando a busca de maior transdisciplinaridade profissional e, consequentemente, a qualidade do serviço oferecido pelo setor da saúde à população através da participação coletiva.',
				'data' => date('Y-m-d',mktime(0,0,0,4,8,2016)),
				'ativo' => 1,
				'created_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);

	}
}