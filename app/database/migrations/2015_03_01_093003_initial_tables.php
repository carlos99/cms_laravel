<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sections', function(Blueprint $table){

			$table->increments('id');
			$table->string('name');
			$table->string('slug_url');
			$table->boolean('menu')->default(true);
			$table->tinyInteger('menu_order')->unsigned()->default(200);
			$table->string('type');
			$table->boolean('published')->default(false);

			$table->timestamps();
			$table->timestamp('published_at');
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
		Schema::drop('sections');
	}

}
