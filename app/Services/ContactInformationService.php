<?php

namespace App\Services;

use App\Models\ContactInformation;

class ContactInformationService
{
    public function getContactInformationByLocale(string $locale)
    {
        $contact_information = ContactInformation::orderBy('order')->get()->translate($locale, 'en');

        return $contact_information;
    }
}
