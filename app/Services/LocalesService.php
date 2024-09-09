<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class LocalesService
{
    public function __construct(CommunityFeaturesService $communityFeaturesService, MediaTypesService $mediaTypesService, SocialLinksService $socialLinksService, StaticValuesService $staticValuesService, ContactInformationService $contactInformationService)
    {
        $this->communityFeaturesService = $communityFeaturesService;
        $this->mediaTypesService = $mediaTypesService;
        $this->socialLinksService = $socialLinksService;
        $this->staticValuesService = $staticValuesService;
        $this->contactInformationService = $contactInformationService;
    }

    public function getLocalResources(string $locale)
    {
        $locale_collection = new Collection();

        $communityFeatures = $this->communityFeaturesService->getCommunityFeaturesByLocale($locale);
        $mediaTypes = $this->mediaTypesService->getMediaTypesByLocale($locale);
        $social_links = $this->socialLinksService->getSocialLinks();
        $staticValues = $this->staticValuesService->getStaticValuesByLocale($locale);
        $contactInformation = $this->contactInformationService->getContactInformationByLocale($locale);

        $locale_collection = collect($staticValues);
        $locale_collection->put('socialContent', $social_links);
        $locale_collection->put('communityFeatures', $communityFeatures);
        $locale_collection->put('mediaTypesOptions', $mediaTypes);
        $locale_collection->put('contactInfo', $contactInformation);

        return $locale_collection;
    }
}
