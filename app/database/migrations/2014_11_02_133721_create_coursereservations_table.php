<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursereservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coursereservations', function($table) {
			  $table->increments('id');
			  $table->integer('data_id');
			  $table->integer('hubber_id');
			  $table->integer('statopagamento');
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
		Schema::drop('coursereservations');
	}

}
