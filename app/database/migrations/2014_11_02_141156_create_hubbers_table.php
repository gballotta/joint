<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hubbers', function($table) {
			  $table->increments('id');
			  $table->string('cognome', 24);
			  $table->string('nome', 24);
			  $table->string('indirizzo');
			  $table->string('cap', 5)->nullable();
			  $table->string('localita');
			  $table->string('provincia', 3);
			  $table->string('telefono', 16)->nullable();
			  $table->string('email');
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
		Schema::drop('hubbers');
	}

}
