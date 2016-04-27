<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRelationshipsTable extends Migration {

	public function up()
	{
		Schema::create('relationships', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 255);
			$table->text('description');
			$table->tinyInteger('pv1_id')->unsigned();
			$table->tinyInteger('pv2_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('relationships');
	}
}