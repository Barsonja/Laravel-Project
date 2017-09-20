<?php

use Faker\Generator as Faker;


$factory->define(App\Inquiry::class, function (Faker $faker) {
	$user = App\User::all()->random();
	return [
		'email' => $user->email,
		'name' => $user->name,
		'subject' => $faker->sentence(5),
		'message' => $faker->text(500),
		'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now')
	];
});
