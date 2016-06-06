<?php

use Illuminate\Database\Seeder;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create(); 
 
        foreach(range(1,30) as $index)
        {
            Video::create([                
			 'title' => $faker->name, // Génère un faux nom
			 'url' => $faker->url, // Génère une adresse e-mail fictive
			 'lyric' => $faker->text, // Génère un mot de passe crypté d'une chaîne de 10 caractères
            ]);
        }
    }
}
