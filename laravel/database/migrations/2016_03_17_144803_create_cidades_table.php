<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
	private $tabela = 'cidades';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create($this->tabela, function(Blueprint $table) {
    		$table->increments('id');
    		$table->string('nome', 200);
    		$table->integer('estado_id')->unsigned();
    		$table->timestamps();
    		$table->softDeletes();
    	});
    		 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {    		 
    	Schema::drop($this->tabela);
    }
}
