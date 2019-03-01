<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfDefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prof_def', function(Blueprint $table)
		{
			$table->bigInteger('id')->primary('prof_def_pkey');
			$table->date('date_created')->nullable();
			$table->decimal('amount', 18)->nullable();
			$table->date('date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prof_def');
	}

}
