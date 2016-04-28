<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePvsTable extends Migration {

	public function up()
	{
		Schema::create('pvs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->tinyInteger('group_id')->unsigned();
			$table->string('status', 255);
			$table->string('gender', 10);
			$table->string('celebrity', 200);
			$table->text('entente');
			$table->text('test_rp');
			$table->boolean('already_played');
			$table->tinyInteger('greek_id')->unsigned();
			$table->tinyInteger('host_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('pvs');
	}
}