<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\FormResult::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween($min = 1, $max = 57),
        'creativity' => $faker->numberBetween($min = 0, $max = 4),
        'autonomy' => $faker->numberBetween($min = 0, $max = 4),
        'rigor' => $faker->numberBetween($min = 0, $max = 4),
        'teamwork' => $faker->numberBetween($min = 0, $max = 4),
        'evaluation_method' => $faker->numberBetween($min = 0, $max = 4),
        'digital' => $faker->numberBetween($min = 0, $max = 4),
        'science' => $faker->numberBetween($min = 0, $max = 4),
        'literature' => $faker->numberBetween($min = 0, $max = 4),
        'foreign_lang' => $faker->numberBetween($min = 0, $max = 4),
        'total_score' => $faker->numberBetween($min = 0, $max = 36),
    ];
});
