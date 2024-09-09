<?php

namespace App\Services;

use App\Models\CommunityFeature;
use Illuminate\Database\Eloquent\Collection;

class CommunityFeaturesService
{
    public function getCommunityFeaturesByLocale(string $locale)
    {
        $community_features = CommunityFeature::all()->translate($locale, 'en');

        return $community_features;
    }
}
