<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGreeksTable extends Migration {

	public function up()
	{
		Schema::create('greeks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 200);
			$table->text('titles');
			$table->string('parents', 255);
			$table->text('descendants');
			$table->string('status', 255);
			$table->text('attributes');
			$table->tinyInteger('power_id')->unsigned();
			$table->tinyInteger('power_level');
			$table->text('strengths');
			$table->text('weaknesses');
			$table->text('personality');
			$table->string('gender_orientation', 255);
			$table->text('story');
			$table->tinyInteger('opinion_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('greeks');
	}
}