<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCowopricesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cowoprices', function($table) {
			  $table->increments('id');
			  $table->string('nomepiano', 12);
			  $table->string('descrizione1', 64);
			  $table->string('descrizione2', 64)->nullable();
			  $table->string('descrizione3', 64)->nullable();
			  $table->string('descrizione4', 64)->nullable();
			  $table->integer('pianoattivo')->nullable();
			  $table->integer('prezzomensile');
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
		Schema::drop('cowoprices');
	}

}
