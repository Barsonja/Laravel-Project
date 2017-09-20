<?php

use Faker\Generator as Faker;

$factory->define(App\Contractor::class, function (Faker $faker) {
	return [
		'email' => $faker->unique()->safeEmail,
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'phone' => $faker->phoneNumber,
		'available' => $faker->boolean(50),
		'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')
	];
});