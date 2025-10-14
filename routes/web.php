<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KenkoWebController;
use App\Http\Controllers\KenkoHoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kenko-web', [KenkoWebController::class, 'show'])->name('kenko-web');
Route::get('/kenko-ho', [KenkoHoController::class, 'show'])->name('kenko-ho');
Route::post('/check-access', [KenkoHoController::class, 'checkAccess'])->name('check-access');
