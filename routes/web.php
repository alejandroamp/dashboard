<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('documents/', function () {
    return view('documents');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

/*Route::group(['prefix' => 'dashboard'], function(){

    Route::get('/', [
        'uses'  =>   'DashboardController@view',
        'as'    =>   'dashboardView'
    ]);
    Route::get('documents/', [
        'uses'  =>   'DocumentsController@view',
        'as'    =>   'documentsView'
    ]);

});*/

Auth::routes();

Route::get('/','HomeController@index');
Route::get('dashboard','DashboardController@view');
Route::post('dashboard','DashboardController@create');
Route::get('document','DocumentsController@view');
