<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AppointmentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Appointment::create([
				'petname' => $faker->firstName('female'),
			    'ownersname' => $faker->name,
			    'appdate' => $faker->dateTime,


			]);
		}
	}

}