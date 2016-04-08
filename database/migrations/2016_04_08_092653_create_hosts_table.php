<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHostsTable extends Migration {

	public function up()
	{
		Schema::create('hosts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('lastname', 255);
			$table->string('firstname', 255);
			$table->date('birth_date');
			$table->string('birth_place', 255);
			$table->string('nationality', 255);
			$table->string('job', 255);
			$table->string('status', 255);
			$table->text('personality');
			$table->string('gender_orientation', 255);
			$table->text('story');
		});
	}

	public function down()
	{
		Schema::drop('hosts');
	}
}