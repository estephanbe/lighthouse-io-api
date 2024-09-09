<?php

namespace Database\Seeders;

use App\Models\MediaType;
use Illuminate\Database\Seeder;

class MediaTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaType::firstOrCreate(
            ['name' => 'movies'],
            [
                'image' => 'images/movies.gif', #TODO: determine the real link
                'url' => 'https://www.google.com', #TODO: determine the real link
                'order' => 1
            ]
        );
        MediaType::firstOrCreate(
            ['name' => 'shows'],
            [
                'image' => 'images/shows.gif', #TODO: determine the real link
                'url' => 'https://www.google.com', #TODO: determine the real link
                'order' => 2
            ]
        );
        MediaType::firstOrCreate(
            ['name' => 'courses'],
            [
                'image' => 'images/courses.gif', #TODO: determine the real link
                'url' => 'https://www.google.com', #TODO: determine the real link
                'order' => 3
            ]
        );
        MediaType::firstOrCreate(
            ['name' => 'audiobooks'],
            [
                'image' => 'images/audiobooks.gif', #TODO: determine the real link
                'url' => 'https://www.google.com', #TODO: determine the real link
                'order' => 4
            ]
        );
        MediaType::firstOrCreate(
            ['name' => 'podcasts'],
            [
                'image' => 'images/podcasts.gif', #TODO: determine the real link
                'url' => 'https://www.google.com', #TODO: determine the real link
                'order' => 5
            ]
        );
        MediaType::firstOrCreate(
            ['name' => 'music'],
            [
                'image' => 'images/music.gif', #TODO: determine the real link
                'url' => 'https://www.google.com', #TODO: determine the real link
                'order' => 6
            ]
        );
    }
}
