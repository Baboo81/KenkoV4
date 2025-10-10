<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KenkoWebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kenko-web', [KenkoWebController::class, 'index'])->name('kenko-web');
