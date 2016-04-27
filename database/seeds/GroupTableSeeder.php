<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('groups')->delete();

		// olympianSeeder
		Group::create(array(
				'name' => "Olympiens",
				'class' => "olympian",
				'description' => "soon",
				'number' => 14
			));

		// minorGodSeeder
		Group::create(array(
				'name' => "Mineurs",
				'class' => "minorGod",
				'description' => "soon",
				'number' => 20
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

		// museSeeder
		Group::create(array(
				'name' => "Muses",
				'class' => "muse",
				'description' => "soon",
				'number' => 7
			));
	}
}