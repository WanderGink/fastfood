<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donhangs', function(Blueprint $table)
		{
			$table->increments('Did');
			$table->string('status');
			$table->string('Pname');
			$table->integer('Pid');
			$table->integer('Pcost');
			$table->integer('amount');
			$table->integer('total');
			$table->integer('Uid');
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
		Schema::drop('donhangs');
	}

}
