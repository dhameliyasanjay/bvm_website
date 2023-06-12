<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','home');
Route::view('home','home');
Route::view('web-develop','webdevelop');
Route::view('mobile-develop','mobiledevelop');
Route::view('contact','contact');
Route::view('blog','blog');
Route::view('career','career');
Route::view('event','event');
Route::view('about','about');
Route::view('our-services','our-services');
Route::view('ui-ux','uiux');

Route::view('android','android');
Route::view('website','website');
Route::view('uiux','uiux');
Route::view('cross-platform','crossplatform');
Route::view('project-dev','projectdev');
Route::view('tranding','tranding');
Route::view('digital','digital');
Route::view('android-hiring','hiringPage.android');
Route::view('uiux-hiring','hiringPage.android');
Route::view('unity-hiring','hiringPage.unity');
Route::view('fullstack-hiring','hiringPage.fullstack');
Route::view('laravel-hiring','hiringPage.laravel');
Route::view('reactjs-hiring','hiringPage.reactjs');


