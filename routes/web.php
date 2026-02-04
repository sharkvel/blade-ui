<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\IntroductionController;
use Illuminate\Support\Facades\Route;

// Route::get('/', fn () => view('welcome'));

/**
 * Components
 */
Route::get('/', HomeController::class)->name('home');
Route::get('/playground', fn () => view('pages.playground'));

Route::get('/docs', IntroductionController::class)->name('docs');
Route::get('/docs/installation', InstallationController::class)->name('docs.installation');
Route::get('/docs/components/{component?}', ComponentController::class)->name('component');
