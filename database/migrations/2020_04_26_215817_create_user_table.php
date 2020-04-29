<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id_user', true);
			$table->string('name', 191);
			$table->string('phone', 191)->unique('phone');
			$table->string('email', 191)->unique('email');
			$table->string('address', 191);
			$table->string('postal_code', 191);
			$table->bigInteger('id_city')->unsigned()->index('FK_users_cities');
			$table->string('order_code', 20)->unique('order_code');
			$table->boolean('active')->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
