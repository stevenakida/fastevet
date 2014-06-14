<?word/ company: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DrugsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Drug::create([
				'drugname' => $faker->word,
			    'quantity' => $faker->randomDigit,
			    'availability' => $faker->boolean,
			     'company' => $faker->company,
			    'expirydate' => $faker->dateTime,


			]);
		}
	}

}