<?php

namespace Database\Seeders;

use App\Models\CommunityFeature;
use Illuminate\Database\Seeder;

class CommunityFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommunityFeature::firstOrCreate(
            ['name' => 'listen'],
            [
                'image' => 'images/listen.png', #TODO: determine the real link
                'description' => 'We need to future-proof this win-win-win. Great plan! Let me diarize this, and we can synchronize ourselves at a later timeframe, for strategic staircase wiggle room. Idea shower: what\'s our go to market strategy? Table the discussion; I just wanted to give you a heads...',
                'order' => 1,
                'stroke' => 'listen'
            ]
        );
        CommunityFeature::firstOrCreate(
            ['name' => 'watch'],
            [
                'image' => 'images/watch.png', #TODO: determine the real link
                'description' => 'We need to future-proof this win-win-win. Great plan! Let me diarize this, and we can synchronize ourselves at a later timeframe, for strategic staircase wiggle room. Idea shower: what\'s our go to market strategy? Table the discussion; I just wanted to give you a heads...',
                'order' => 2,
                'stroke' => 'watch'
            ]
        );
        CommunityFeature::firstOrCreate(
            ['name' => 'connect'],
            [
                'image' => 'images/connect.png', #TODO: determine the real link
                'description' => 'We need to future-proof this win-win-win. Great plan! Let me diarize this, and we can synchronize ourselves at a later timeframe, for strategic staircase wiggle room. Idea shower: what\'s our go to market strategy? Table the discussion; I just wanted to give you a heads...',
                'order' => 3,
                'stroke' => 'connect'
            ]
        );
    }
}
