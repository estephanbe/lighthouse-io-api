<?php

namespace App\Services;

use App\Models\MediaType;
use Illuminate\Database\Eloquent\Collection;

class MediaTypesService
{
    public function getMediaTypesByLocale(string $locale)
    {
        $media_types = MediaType::orderBy('order')->get()->translate($locale, 'en');

        return $media_types;
    }
}
