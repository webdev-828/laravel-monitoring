<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEaeuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eaeu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date_created')->nullable();
			$table->decimal('out_amount_ar', 18)->nullable();
			$table->decimal('in_amount_ar', 18)->nullable();
			$table->decimal('out_amount_by', 18)->nullable();
			$table->decimal('in_amount_by', 18)->nullable();
			$table->decimal('out_amount_kg', 18)->nullable();
			$table->decimal('in_amount_kg', 18)->nullable();
			$table->decimal('out_amount_kz', 18)->nullable();
			$table->decimal('in_amount_kz', 18)->nullable();
			$table->decimal('out_amount_ru', 18)->nullable();
			$table->decimal('in_amount_ru', 18)->nullable();
			$table->decimal('out_amout_total', 18)->nullable();
			$table->decimal('in_amout_total', 18)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eaeu');
	}

}
