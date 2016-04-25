<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'CvController@home');

Route::get('creations', 'CvController@creation');

Route::get('cv', 'CvController@cv');

Route::post('/', 'CvController@mail');



Route::get('creations/portfolioJS', 'PortfolioJSController@home');



Route::get('creations/lightningCanvas', 'LightningCanvasController@home');



Route::get('creations/touitteur', 'TouitteurController@home');

Route::get('creations/touitteur/del/{id}', 'TouitteurController@delete');

Route::get('creations/touitteur/plus/{id}', 'TouitteurController@addPlus');

Route::get('creations/touitteur/moins/{id}', 'TouitteurController@addMoins');

Route::post('creations/touitteur', 'TouitteurController@addTouit');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('logout', 'HomeController@logout');
