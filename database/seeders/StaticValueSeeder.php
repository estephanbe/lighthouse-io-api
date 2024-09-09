<?php

namespace Database\Seeders;

use App\Models\StaticValue;
use Illuminate\Database\Seeder;

class StaticValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StaticValue::firstOrCreate(
            ['key' => 'heroTitle'],
            ['value' => "Bringing Light into the Darkness"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'heroSubtitle'],
            ['value' => "we need to future-proof this win-win-win. great plan! let me diarize this, and we can..."]
        );
        StaticValue::firstOrCreate(
            ['key' => 'downloadButton'],
            ['value' => "download app"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'communitySlogan'],
            ['value' => "A community for Everyone"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'mediaTypesTitle'],
            ['value' => "Enjoy the widest variety of Christian Arabic media"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'browseAll'],
            ['value' => "Browse All"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'testimonyTitle'],
            ['value' => "Offering a Lamp for their Feet"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'testimonyDescription'],
            ['value' => "we need to future-proof this win-win-win. Great plan! let me diarize this, and..."]
        );
        StaticValue::firstOrCreate(
            ['key' => 'testimonyBody'],
            ['value' => "We need to future-proof this win-win-win. Great plan! Let me diarize this, and we can synchronize ourselves at a later timeframe, for strategic staircase wiggle room. Idea shower: what's our go to market strategy? Table the discussion; I just wanted to give you a heads-up, and run it up the flag pole for a performance review. It's a simple lift and shift job. Throughput criticality, pre-think our..."]
        );
        StaticValue::firstOrCreate(
            ['key' => 'testimonySignature'],
            ['value' => "nancy sami, 25 years old"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'testimonyLocation'],
            ['value' => "cairo, egypt"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'downloadText'],
            ['value' => "Over 1,000,000 members connecting from the middle east"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'downloadApp'],
            ['value' => "Download App"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'contactUsTitle'],
            ['value' => "Become a part of the Belight Family"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'contactUsDescription'],
            ['value' => "We need to future-proof this win-win-win. Great plan! Let me diarize this, and we can synchronize ourselves at a later timef..."]
        );
        StaticValue::firstOrCreate(
            ['key' => 'contactUs'],
            ['value' => "Contact Us"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'socialTitle'],
            ['value' => "Connect with us"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'footerDownload'],
            ['value' => "Download our Mobile App"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'appStoreURL'],
            ['value' => "https://www.google.com"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'googlePlayURL'],
            ['value' => "https://www.bing.com"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'copyrights'],
            ['value' => "Ⓒ Copyright 2022 Lighthouse Arab world"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'previewPageTitle'],
            ['value' => "Don't have an account?"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'previewPageSubtitle'],
            ['value' => "Get the belight app to join the community"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'previewPageDescription'],
            ['value' => "Lorem ipsum dolor sit amet conseptetur shiep y adipiscing floren balet lorem ipsum dolor sit amet conseptetur shiep y adipiscing floren balet"]
        );
        StaticValue::firstOrCreate(
            ['key' => 'belightCommunityHero'],
            ['image' => 'images/belight-community-hero.mp4']
        );
        StaticValue::firstOrCreate(
            ['key' => 'testimonyImage'],
            ['image' => 'images/testimony-image.png']
        );
        StaticValue::firstOrCreate(
            ['key' => 'contactUsImage'],
            ['image' => 'images/contact-us.png']
        );
    }
}
