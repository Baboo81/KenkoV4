<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KenkoHoController;
use App\Http\Controllers\KenkoWebController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuiSuisJeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\TestimonialsController;
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
use App\Http\Middleware\CheckKenkoAccess;
use Illuminate\Support\Facades\Route;

// =======================
// ROUTES PUBLIQUES / LANDING
// =======================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kenko-web', [KenkoWebController::class, 'show'])->name('kenko-web');
Route::get('/qui-suis-je', [QuiSuisJeController::class, 'show'])->name('qui-suis-je');
//Page : contact (GET) :
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
//Page : contact (POST) pour l'envoi du form :
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/faq', [FaqController::class, 'show'])->name('faq');
//Route pour envoyer un témoignage (POST)
Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');


// =======================
// ROUTES PROTÉGÉES (auth)
// =======================

Route::middleware(['auth'])->group(function () {
    Route::get('/kenko-ho', [KenkoHoController::class, 'show'])->name('kenko-ho');
    Route::get('/themes/dix-huiles', [DixHuilesController::class, 'show'])->name('theme.dix-huiles');
    Route::get('/themes/cuisine', [CuisineController::class, 'show'])->name('theme.cuisine');
    Route::get('/themes/bases', [BasesController::class, 'show'])->name('theme.bases');
    Route::get('/themes/douleurs', [DouleursController::class, 'show'])->name('theme.douleurs');
    Route::get('/themes/emotions', [EmotionsController::class, 'show'])->name('theme.emotions');
    Route::get('/themes/enfants', [EnfantsController::class, 'show'])->name('theme.enfants');
    Route::get('/themes/microbiome', [MicrobiomeController::class, 'show'])->name('theme.microbiome');
    Route::get('/themes/peau', [PeauController::class, 'show'])->name('theme.peau');
    Route::get('/themes/reiki', [ReikiController::class, 'show'])->name('theme.reiki');
    Route::get('/themes/sommeil', [SommeilController::class, 'show'])->name('theme.sommeil');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware([CheckKenkoAccess::class])->group(function () {
    Route::get('/kenko-ho', [KenkoHoController::class, 'show'])->name('kenko-ho');
});

// Route : vérification du MP vers kenko-ho :
Route::post('/check-access', [KenkoHoController::class, 'checkAccess'])->name('check-access');

// =======================
// INSCRIPTION
// =======================

Route::get('/signup', [SignupController::class, 'show'])->name('signup.show');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

require __DIR__.'/auth.php';
