<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableAddRole extends Migration
{
	private $tabela = 'users';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table($this->tabela, function($table){
    		$table->integer('role_id')->unsigned()->after('password')->default(1);
    		$table->string('pic')->after('role_id')->nullable();
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
    		$table->dropColumn('role_id');
    		$table->dropColumn('pic');
    	});
    }
}
