<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('groups')->delete();

		// godSeeder
		Group::create(array(
				'name' => "Dieux",
				'class' => "god",
				'description' => "soon",
				'number' => 14
			));

		// titanSeeder
		Group::create(array(
				'name' => "Titans",
				'class' => "titan",
				'description' => "soon",
				'number' => 10
			));

		// nymphSeeder
		Group::create(array(
				'name' => "Nymphes",
				'class' => "nymph",
				'description' => "soon",
				'number' => 20
			));

		// creatureSeeder
		Group::create(array(
				'name' => "Créatures",
				'class' => "creature",
				'description' => "soon",
				'number' => 10
			));

		// humanSeeder
		Group::create(array(
				'name' => "Humains",
				'class' => "human",
				'description' => "soon",
				'number' => 10
			));
	}
}