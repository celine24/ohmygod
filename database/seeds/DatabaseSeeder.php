<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('PvTableSeeder');
		$this->command->info('Pv table seeded!');

		$this->call('GroupTableSeeder');
		$this->command->info('Group table seeded!');

		$this->call('GreekTableSeeder');
		$this->command->info('Greek table seeded!');

		$this->call('HostTableSeeder');
		$this->command->info('Host table seeded!');
	}
}