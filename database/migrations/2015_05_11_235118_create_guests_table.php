<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guests', function(Blueprint $table)
		{
			$table->increments('Gid');
			$table->string('name');
			$table->string('address');
			$table->integer('phone');
			$table->string('status');
			$table->string('Pname');
			$table->integer('Pid');
			$table->integer('Pcost');
			$table->integer('amount');
			$table->integer('total');
			// $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guests');
	}

}
