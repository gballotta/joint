<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCowosubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cowosubscriptions', function($table) {
			  $table->increments('id');
			  $table->integer('hubber_id');
			  $table->integer('cowoprice_id');
			  $table->date('datainizio');
			  $table->date('datatermine');
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
		Schema::drop('cowosubscriptions');
	}

}
