<?php

namespace Database\Seeders;

use App\Models\ContactInformation;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactInformation::firstOrCreate(
            ['address' => 'Beirut'],
            [
                'value' => '+961 01 234 561',
                'order' => 1
            ]
        );
        ContactInformation::firstOrCreate(
            ['address' => 'Amman'],
            [
                'value' => '+962 6 5823697',
                'order' => 2
            ]
        );
        ContactInformation::firstOrCreate(
            ['address' => 'Cairo'],
            [
                'value' => '+20 012 345 6789',
                'order' => 3
            ]
        );
        ContactInformation::firstOrCreate(
            ['address' => 'contact@belight.com'],
            [
                'value' => null,
                'order' => 4
            ]
        );
    }
}
