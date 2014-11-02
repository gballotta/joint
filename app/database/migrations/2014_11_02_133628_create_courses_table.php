<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function($table) {
			$table->increments('id');
			$table->string('nomecorso');
			$table->string('tagline');
			$table->integer('coursetype_id');
			$table->text('programmabase');
			$table->text('programmadettagliato');
			$table->integer('teacher_id');
			$table->integer('minpartecipanti');
			$table->integer('maxpartecipanti');
			$table->integer('prezzo');
			$table->string('tags')->nullable();
			$table->integer('corsoattivo');
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
		Schema::drop('courses');
	}

}
