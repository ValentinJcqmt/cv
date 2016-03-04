<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'NewCarController@home']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Neuf
    Route::get('voitures-neuves', ['as' => 'new-cars', 'uses' => 'NewCarController@display']);
    Route::get('voitures-neuves/{slug}/{id}', ['as' => 'show-one-new', 'uses' => 'NewCarController@show']);
    //Occasions
    Route::get('voitures-occasions', ['as' => 'used-cars', 'uses' => 'UsedCarsController@display']);
    Route::get('voitures-occasions/{slug}/{id}', ['as' => 'show-one-used', 'uses' => 'UsedCarsController@show']);
    /*
     * Mails
     */
    Route::put('send-mail-for-car', ['uses' => 'MailsController@sendCarMail']);
});
