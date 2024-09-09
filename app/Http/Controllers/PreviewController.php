<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;
use App\Models\Media;
use Inertia\Inertia;
use App\Services\LocalesService;

class PreviewController extends Controller
{

    protected $localesService;


    public function __construct(LocalesService $localesService)
    {
      $this->localesService = $localesService;
    }

    public function getPreview(Request $request, $uuid, $lang = 'en')
    {
        if($lang === 'en' || $lang==='ar') {
            $media = Media::where('uuid', '=' , $uuid)->firstOrFail();
            return $this->render($media, $lang);
        } else {
            return '404'; // to be handled
        }
    }

    public function getCreator(Request $request, $uuid, $lang = 'en')
    {
        if($lang === 'en' || $lang==='ar') {
            $media = Creator::where('uuid', '=' , $uuid)->firstOrFail();
            $media->type = 'creator';
            return $this->render($media, $lang);
        } else {
            return '404'; // to be handled
        }
    }


    public function render($media, $lang)
    {
        $locales = $this->localesService->getLocalResources($lang);
        return Inertia::render('Preview', [
            "uuid" => $media->uuid,
            "lang" => $lang,
            "locales" => $locales,
            "media" => $media->toArray(),
        ])->withViewData([
            'media' => $media,
            'includeMetaReference' => true
        ]);
    }



}
