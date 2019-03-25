<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopPayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('top_payers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date_created')->nullable();
			$table->string('p_name1')->nullable();
			$table->decimal('p_amount1', 18)->nullable();
			$table->string('p_name2')->nullable();
			$table->decimal('p_amount2', 18)->nullable();
			$table->string('p_name3')->nullable();
			$table->decimal('p_amount3', 18)->nullable();
			$table->string('s_name1')->nullable();
			$table->decimal('s_amount1', 18)->nullable();
			$table->string('s_name2')->nullable();
			$table->decimal('s_amount2', 18)->nullable();
			$table->string('s_name3')->nullable();
			$table->decimal('s_amount3', 18)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('top_payers');
	}

}
