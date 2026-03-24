<?php

use App\Http\Controllers\LazyController;
use Illuminate\Support\Facades\Route;

/**
 * Roots
 */
Route::view('/', 'home')->name('home');
Route::view('/examples', 'pages.examples')->name('examples');

/**
 * Docs
 */
Route::view('/docs', 'pages.introduction')->name('docs');
Route::view('/docs/installation', 'pages.installation')->name('docs.installation');
Route::view('/docs/theming', 'pages.theming')->name('docs.theming');
Route::view('/docs/components/{name?}', 'pages.components')->name('components');

/**
 * Lazy
 */
Route::get('/lazy/codelight', [LazyController::class, 'codeLight'])->name('lazy.codelight');

/**
 * Live examples
 */
Route::view('/live-example/sidebar', 'examples.components.sidebar.hero')->name('live.sidebar');
Route::view('/live-example/dashboard', 'examples.blocks.dashboard')->name('live.dashboard');
