<?php

/* @var $factory Factory */

use App\Model;
use App\Models\Author;
use App\Models\MangaType;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(\App\Models\Manga::class, function (Faker $faker) {
    return [
        'name' => 'manga ' . $faker->name,
        'year' => $faker->year,
        'status' => 'status',
        'description' => $faker->text,
        'manga_type_id' => MangaType::all()->random()->id,
        'author_id' => Author::all()->random()->id
    ];
});
