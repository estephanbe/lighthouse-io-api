<?php

use App\Enums\PreviewMediaType;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\PreviewController;
use App\Services\LocalesService;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/terms-and-conditions', function () {
  return Inertia::render('TermsAndConditions', []);
})->name('terms-and-conditions');

Route::get('/privacy-policy', function () {
    return Inertia::render('PrivacyPolicy', []);
  })->name('privacy-policy');

Route::get('/{lang?}', function (LocalesService $localesService, $lang = 'en') {
    $locales = $localesService->getLocalResources($lang);
    return Inertia::render('Home', [
        "lang" => $lang,
        "locales" => $locales
    ]);
})->name('home');

Route::get('/preview/{uuid}/{lang?}', [PreviewController::class, 'getPreview'])->name('preview');
Route::get('/creator/{uuid}/{lang?}', [PreviewController::class, 'getCreator'])->name('creator');

// catering for mobile deep links while keeping meta tags
foreach (PreviewMediaType::cases() as $mediaType) {
    Route::get('/' . $mediaType->value . '/{uuid}/{lang?}', [PreviewController::class, 'getPreview'])
        ->name('preview.' . $mediaType->value);
}

require __DIR__.'/auth.php';
