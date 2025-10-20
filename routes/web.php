<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Themes\DixHuilesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KenkoWebController;
use App\Http\Controllers\KenkoHoController;
use App\Http\Controllers\QuiSuisJeController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\Themes\BasesController;
use App\Http\Controllers\Themes\CuisineController;
use App\Http\Controllers\Themes\DouleursController;
use App\Http\Controllers\Themes\EmotionsController;
use App\Http\Controllers\Themes\EnfantsController;
use App\Http\Controllers\Themes\MicrobiomeController;
use App\Http\Controllers\Themes\PeauController;
use App\Http\Controllers\Themes\ReikiController;
use App\Http\Controllers\Themes\SommeilController;
use Illuminate\Support\Facades\Route;

//Routes principales :
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kenko-web', [KenkoWebController::class, 'show'])->name('kenko-web');
Route::get('/qui-suis-je', [QuiSuisJeController::class, 'show'])->name('qui-suis-je');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/faq', [FaqController::class, 'show'])->name('faq');


// Route POST pour vérifier le code d'accès Kenko-Ho (hors middleware)
Route::post('/check-access', [KenkoHoController::class, 'checkAccess'])->name('check-access');

//Routes : pages thématiques + Routes vers Kenko-ho et pages à thèmes protégées :
Route::middleware(['kenko.access'])->group(function () {
    Route::get('/kenko-ho', [KenkoHoController::class, 'show'])->name('kenko-ho');

    Route::prefix('themes')->group(function () {
    Route::get('/dix-huiles', [DixHuilesController::class, 'show'])->name('themes.dix-huiles');
    Route::get('/cuisine', [CuisineController::class, 'show'])->name('themes.cuisine');
    Route::get('/emotions', [EmotionsController::class, 'show'])->name('theme.emotions');
    Route::get('/sommeil', [SommeilController::class, 'show'])->name('theme.sommeil');
    Route::get('/enfants', [EnfantsController::class, 'show'])->name('theme.enfants');
    Route::get('/peau', [PeauController::class, 'show'])->name('theme.peau');
    Route::get('/microbiome', [MicrobiomeController::class, 'show'])->name('theme.microbiome');
    Route::get('/douleurs', [DouleursController::class, 'show'])->name('theme.douleurs');
    Route::get('/reiki', [ReikiController::class, 'show'])->name('theme.reiki');
    Route::get('/bases', [BasesController::class, 'show'])->name('theme.bases');

    });

});


//Route : vérification du code d'acces à Kenko-ho :
Route::post('/check-access', [KenkoHoController::class, 'checkAccess'])->name('check-access');

//Route : formululaire (témoignages) :
Route::post('/kenko-ho/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');

//Route : Formulaire de contact :
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
