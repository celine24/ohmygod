<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePowersTable extends Migration {

	public function up()
	{
		Schema::create('powers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->text('description');
			$table->text('level1');
			$table->text('level2');
			$table->text('level3');
			$table->tinyInteger('greek_id');
		});
	}

	public function down()
	{
		Schema::drop('powers');
	}
}