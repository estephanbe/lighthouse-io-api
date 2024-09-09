<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialLink::firstOrCreate(
            ['icon' => 'fa-brands fa-facebook-f'],
            [
                'url' => 'https://www.facebook.com',
                'order' => 1
            ]
        );
        SocialLink::firstOrCreate(
            ['icon' => 'fa-brands fa-twitter'],
            [
                'url' => 'https://www.instagram.com',
                'order' => 1
            ]
        );
        SocialLink::firstOrCreate(
            ['icon' => 'fa-brands fa-instagram'],
            [
                'url' => 'https://www.twitter.com',
                'order' => 1
            ]
        );
        SocialLink::firstOrCreate(
            ['icon' => 'fa-solid fa-link'],
            [
                'url' => 'https://www.tiktok.com',
                'order' => 1
            ]
        );
    }
}
