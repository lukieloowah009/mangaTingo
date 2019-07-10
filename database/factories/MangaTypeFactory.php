<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\MangaType::class, function (Faker $faker) {
    return [
        'name' => 'type ' . $faker->company
    ];
});
