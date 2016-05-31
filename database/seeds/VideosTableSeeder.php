<?php

use Illuminate\Database\Seeder;
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
		DB::table('videos')->insert([
		 'title' => str_random(10),
		 'url' => str_random(10),
		 'lyric' => str_random(10)
		 ]);
    }
}
