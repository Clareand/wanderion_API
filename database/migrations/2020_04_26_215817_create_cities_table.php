<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->bigInteger('id_city', true)->unsigned();
			$table->integer('id_province')->unsigned()->index('fk_cities_provinces');
			$table->string('city_name', 200);
			$table->string('city_type', 200);
			$table->char('city_postal_code', 5);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}
