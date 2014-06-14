<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PetsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Pet::create([
				'petname' => $faker->firstName('female'),
			    'ownersname' => $faker->name,
			    'address' => $faker->address,
			    'phonenum' => $faker->phoneNumber,
			    'email' => $faker->email,
			]);
		}
	}

}