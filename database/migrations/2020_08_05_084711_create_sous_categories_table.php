<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSousCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sous_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom', 191);
			$table->string('slug', 191);
			$table->timestamps();
			$table->integer('parent_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sous_categories');
	}

}
