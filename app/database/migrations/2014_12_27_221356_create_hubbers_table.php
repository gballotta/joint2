<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHubbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hubbers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nome', 32);
			$table->string('cognome', 32);
			$table->string('indirizzo', 64);
			$table->string('cap', 5)->nullable();
			$table->string('localita', 64);
			$table->string('provincia', 2)->nullable();
			$table->string('telefono', 16)->nullable();
			$table->string('email', 64)->nullable();
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
		Schema::drop('hubbers');
	}

}
