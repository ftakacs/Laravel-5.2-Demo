<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
	private $tabela = 'roles';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create($this->tabela, function($table) {
    		$table->increments('id');
    		$table->string('name', 40);
    		$table->string('description', 255);
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
