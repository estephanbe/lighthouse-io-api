<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\LocalesService;

class LocalesController extends Controller
{
    public function __construct(LocalesService $localesService)
    {
        $this->localesService = $localesService;
    }

    public function getLocaleResources(string $locale)
    {
        $response = $this->localesService->getLocalResources($locale);

        return response()->success($response);
    }
}
