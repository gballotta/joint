<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaccioColumnsToHubbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hubbers', function($table) {
			$table->date('datanascita');
			$table->string('luogonascita');
			$table->string('comune');
			$table->string('codicefiscale', 16);
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hubbers', function($table) {
			$table->dropColumn(array('datanascita', 'luogonascita', 'comune', 'codicefiscale'));
		});
	}

}
