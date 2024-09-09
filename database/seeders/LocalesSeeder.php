<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CommunityFeaturesSeeder::class,
            MediaTypesSeeder::class,
            ContactInfoSeeder::class,
            StaticValueSeeder::class,
            SocialLinksSeeder::class
        ]);
    }
}
