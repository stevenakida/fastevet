<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drugs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('drugname');
			$table->string('quantity');
			$table->string('availability');
			$table->date('expirydate');
			$table->string('company');
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
		Schema::drop('drugs');
	}

}
