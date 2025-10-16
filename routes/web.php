<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KenkoWebController;
use App\Http\Controllers\KenkoHoController;
use App\Http\Controllers\QuiSuisJeController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;

//Routes principales :
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kenko-web', [KenkoWebController::class, 'show'])->name('kenko-web');
Route::get('/kenko-ho', [KenkoHoController::class, 'show'])->name('kenko-ho');
Route::get('/qui-suis-je', [QuiSuisJeController::class, 'show'])->name('qui-suis-je');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

//Route : vérification du code d'acces à Kenko-ho :
Route::post('/check-access', [KenkoHoController::class, 'checkAccess'])->name('check-access');

//Route : formululaire (témoignages) :
Route::post('/kenko-ho/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');

//Route : Formulaire de contact :
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
