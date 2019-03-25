<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncomeTotalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('income_total', function(Blueprint $table)
		{
			$table->bigInteger('id');
			$table->date('date_created')->nullable();
			$table->decimal('tax_plan', 18)->nullable();
			$table->decimal('tax_fact', 18)->nullable();
			$table->decimal('tax_plan_old', 18)->nullable();
			$table->decimal('tax_fact_old', 18)->nullable();
			$table->decimal('customs_plan', 18)->nullable();
			$table->decimal('customs_plan_old', 18)->nullable();
			$table->decimal('customs_fact', 18)->nullable();
			$table->decimal('customs_fact_old', 18)->nullable();
			$table->decimal('non_tax_plan', 18)->nullable();
			$table->decimal('non_tax_plan_old', 18)->nullable();
			$table->decimal('non_tax_fact', 18)->nullable();
			$table->decimal('non_tax_fact_old', 18)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('income_total');
	}

}
