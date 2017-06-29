<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('Pid');
			$table->string('Pname')->unique();
			$table->string('Category');
			$table->integer('Pcost');
			$table->integer('Ptotal');
			$table->integer('Pnow');
			$table->string('Pdes');
			$table->string('Plink');
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
		Schema::drop('products');
	}

}
