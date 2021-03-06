<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupsTable extends Migration {

	public function up()
	{
		Schema::create('groups', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 200);
			$table->string('class', 255);
			$table->text('description');
			$table->smallInteger('number')->default('0');
		});
	}

	public function down()
	{
		Schema::drop('groups');
	}
}