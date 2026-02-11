<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ExamplesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThemingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', fn () => view('welcome'));

/**
 * Components
 */
Route::get('/', HomeController::class)->name('home');
Route::get('/examples', ExamplesController::class)->name('example');

/**
 * Docs
 */
Route::get('/docs', IntroductionController::class)->name('docs');
Route::get('/docs/installation', InstallationController::class)->name('docs.installation');
Route::get('/docs/theming', ThemingController::class)->name('docs.theming');
Route::get('/docs/components/{component?}', ComponentController::class)->name('component');

/**
 * For testing
 */
Route::get('/playground', fn() => view('pages.playground'));
Route::get('/live-example/sidebar', fn() => view('examples.components.sidebar.hero'))->name('live.sidebar');
Route::get('/live-example/dashboard', fn() => view('examples.blocks.dashboard'))->name('live.dashboard');
Route::get('/test', TestController::class);
