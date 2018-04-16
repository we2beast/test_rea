<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Document_fields::class, function (Faker $faker) {        
  return [
      'doc_json' => [
          "format" => $faker->randomElement(['DOC', 'DOCX']),
          "text" => $faker->text,
          "some_text" => $faker->text,
          "data" => $faker->date
      ],
      'created_at' => $faker->date,
      'updated_at' => $faker->date
  ];
});
