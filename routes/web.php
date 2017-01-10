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

<<<<<<< HEAD
/*Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('documents/', function () {
    return view('documents');
});

Route::get('dashboard', function () {
=======
Route::get('/', function () {
    return view('login');
});

Route::get('documents/', function () {
    return view('documents');
});

Route::get('dashboard/', function () {
>>>>>>> origin/master
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
<<<<<<< HEAD

Auth::routes();

Route::get('/','HomeController@index');
/*
 * Route::get('dashboard','DashboardController@view');
Route::post('dashboard','DashboardController@create');
Route::get('documents','DocumentsController@view');
Route::get('index','DashboardController@index');
Route::get('dashboardedit', 'DashboardController@edit');
 */
Route::group(['prefix' => 'menu'], function () {

    // Route::resource('/', 'HomeController');
    Route::resource('dashboard', 'DashboardController');
    Route::resource('documents', 'DocumentsController');

});
Route::get('/getExport', 'ExcelController@getExport');
=======
>>>>>>> origin/master
