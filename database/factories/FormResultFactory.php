<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\FormResult::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween($min = 1, $max = 57),
        'creativity' => $faker->numberBetween($min = 0, $max = 8),
        'autonomy' => $faker->numberBetween($min = 0, $max = 4),
        'rigor' => $faker->numberBetween($min = 0, $max = 4),
        'teamwork' => $faker->numberBetween($min = 0, $max = 8),
        'evaluation_method' => $faker->numberBetween($min = 0, $max = 8),
        'digital' => $faker->numberBetween($min = 0, $max = 8),
        'science' => $faker->numberBetween($min = 0, $max = 8),
        'literature' => $faker->numberBetween($min = 0, $max = 4),
        'foreign_lang' => $faker->numberBetween($min = 0, $max = 8),
        'total_score' => $faker->numberBetween($min = 0, $max = 60),
        'user_name' => $faker->name
    ];
});
