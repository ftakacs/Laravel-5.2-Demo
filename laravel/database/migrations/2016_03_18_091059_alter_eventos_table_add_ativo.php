<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEventosTableAddAtivo extends Migration
{
	private $tabela = 'eventos';
	
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table($this->tabela, function($table){
    		$table->boolean('ativo')->after('descricao')->default(0);
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table($this->tabela, function($table){
    		$table->dropColumn('ativo');
    	});
    }
}
