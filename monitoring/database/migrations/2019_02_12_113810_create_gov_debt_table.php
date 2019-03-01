<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGovDebtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gov_debt', function(Blueprint $table)
		{
			$table->bigInteger('id')->primary('gov_debt_pkey');
			$table->date('date_created')->nullable();
			$table->decimal('total_amount', 18)->nullable();
			$table->decimal('ext_amount', 18)->nullable();
			$table->decimal('int_amount', 18)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gov_debt');
	}

}
