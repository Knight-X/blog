<?php
use App\User;
use Illuminate\Database\Seeder;
  class UserTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->delete();

		$faker = Faker\Factory::create();

		for ($i = 0; $i < 100; $i++) {
			User::create(array(
			'name' => $faker->userName,
			'password' => Hash::make($faker->name.$faker->year),
			'email' => $faker->email,
		));
		}


	}
	}
