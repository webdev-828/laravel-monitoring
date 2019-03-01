<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpensesByFunctionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expenses_by_function', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date_created')->nullable();
			$table->decimal('amount_701', 18)->nullable();
			$table->decimal('amount_702', 18)->nullable();
			$table->decimal('amount_703', 18)->nullable();
			$table->decimal('amount_704', 18)->nullable();
			$table->decimal('amount_705', 18)->nullable();
			$table->decimal('amount_706', 18)->nullable();
			$table->decimal('amount_707', 18)->nullable();
			$table->decimal('amount_708', 18)->nullable();
			$table->decimal('amount_709', 18)->nullable();
			$table->decimal('amount_710', 18)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('expenses_by_function');
	}

}
