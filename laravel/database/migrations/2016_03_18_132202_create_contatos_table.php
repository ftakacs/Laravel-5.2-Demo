<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
	private $tabela = 'contatos';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create($this->tabela, function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('nome');
    		$table->string('email');
    		$table->text('mensagem');
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
