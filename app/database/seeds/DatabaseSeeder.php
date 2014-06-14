<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PetsTableSeeder');
		//$this->call('DrugsTableSeeder');
		$this->call('AppointmentsTableSeeder');
		//$this->call('FurmigationsTableSeeder');
		//$this->call('PrescriptionsTableSeeder');
	}

}
