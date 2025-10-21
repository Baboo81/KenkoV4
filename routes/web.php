<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KenkoHoController;
use App\Http\Controllers\KenkoWebController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuiSuisJeController;
use App\Http\Controllers\Themes\BasesController;
use App\Http\Controllers\Themes\CuisineController;
use App\Http\Controllers\Themes\DixHuilesController;
use App\Http\Controllers\Themes\DouleursController;
use App\Http\Controllers\Themes\EmotionsController;
use App\Http\Controllers\Themes\EnfantsController;
use App\Http\Controllers\Themes\MicrobiomeController;
use App\Http\Controllers\Themes\PeauController;
use App\Http\Controllers\Themes\ReikiController;
use App\Http\Controllers\Themes\SommeilController;
use Illuminate\Support\Facades\Route;

// =======================
// ROUTES PUBLIQUES / LANDING
// =======================

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kenko-web', [KenkoWebController::class, 'show'])->name('kenko-web');
Route::get('/qui-suis-je', [QuiSuisJeController::class, 'show'])->name('qui-suis-je');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/faq', [FaqController::class, 'show'])->name('faq');


// =======================
// ROUTES PROTÉGÉES (auth)
// =======================

Route::middleware(['auth'])->group(function () {
    Route::get('/kenko-ho', [KenkoHoController::class, 'show'])->name('kenko-ho');
    Route::get('/dix-huiles', [DixHuilesController::class, 'show'])->name('theme.dix-huiles');
    Route::get('/cuisine', [CuisineController::class, 'show'])->name('theme.cuisine');
    Route::get('/bases', [BasesController::class, 'show'])->name('theme.bases');
    Route::get('/douleurs', [DouleursController::class, 'show'])->name('theme.douleurs');
    Route::get('/emotions', [EmotionsController::class, 'show'])->name('theme.emotions');
    Route::get('/enfants', [EnfantsController::class, 'show'])->name('theme.enfants');
    Route::get('/microbiome', [MicrobiomeController::class, 'show'])->name('theme.microbiome');
    Route::get('/peau', [PeauController::class, 'show'])->name('theme.peau');
    Route::get('/reiki', [ReikiController::class, 'show'])->name('theme.reiki');
    Route::get('/sommeil', [SommeilController::class, 'show'])->name('theme.sommeil');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// =======================
// INSCRIPTION
// =======================

Route::get('/signup', [SignupController::class, 'show'])->name('signup.show');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

require __DIR__.'/auth.php';
