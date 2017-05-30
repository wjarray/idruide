<?php

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

// Accueil

Route::get('/', 'ImageController@imageUpload');
Route::post('pages.image-upload','ImageController@imageUploadPost');
Route::get('pages.image-display','ImageController@imageDisplay');


// Routes d'authentification

// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
