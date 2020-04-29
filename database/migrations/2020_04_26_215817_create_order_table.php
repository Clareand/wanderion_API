<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('order_code', 191)->index('FK_order_code');
			$table->string('coordinate', 191)->nullable();
			$table->text('text_line_1', 65535);
			$table->text('text_line_2', 65535);
			$table->text('text_line_3', 65535);
			$table->date('date');
			$table->time('time');
			$table->boolean('time_format')->default(0);
			$table->boolean('design');
			$table->boolean('moon')->default(0);
			$table->boolean('galaxy')->default(0);
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
		Schema::drop('order');
	}

}
