<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaldoTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saldo_total', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date_created')->nullable();
			$table->decimal('amount_year', 18)->nullable();
			$table->decimal('amount_month', 18)->nullable();
			$table->decimal('amount_day', 18)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('saldo_total');
	}

}
