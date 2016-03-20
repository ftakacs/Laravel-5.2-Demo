<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
	private $tabela = 'eventos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create($this->tabela, function(Blueprint $table) {
    		$table->increments('id');
    		$table->string('nome', 200)->unique();
    		$table->string('local', 200);
    		$table->integer('cidade_id')->unsigned();
    		$table->integer('estado_id')->unsigned();
			$table->date('data');
			$table->text('descricao');
    		$table->timestamps();
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
