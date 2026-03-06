<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\ExamplesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\LazyController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThemingController;
use Illuminate\Support\Facades\Route;

/**
 * Components
 */
Route::get('/', HomeController::class)->name('home');
Route::get('/examples', ExamplesController::class)->name('example');

/**
 * Lazy
 */
Route::get('/lazy/codelight', [LazyController::class, 'codeLight'])->name('lazy.codelight');

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
Route::view('/playground', 'pages.playground');
Route::get('/live-example/sidebar', fn() => view('examples.components.sidebar.hero'))->name('live.sidebar');
Route::get('/live-example/dashboard', fn() => view('examples.blocks.dashboard'))->name('live.dashboard');
Route::get('/test', TestController::class);
Route::get('/ping', fn() => response()->json(['ok' => true]));
