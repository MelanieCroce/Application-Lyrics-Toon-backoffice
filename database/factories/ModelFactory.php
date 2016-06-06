<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Video::class, function(Faker\Generator $faker) {
return [
 'title' => $faker->name, // Génère un faux nom
 'url' => $faker->url, // Génère une adresse e-mail fictive
 'lyric' => $faker->text, // Génère un mot de passe crypté d'une chaîne de 10 caractères
 ]

});
