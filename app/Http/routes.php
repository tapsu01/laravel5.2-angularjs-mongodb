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

Route::get('/', function () {
    return view('app');
});
//
// Route::get('/view-admin', 'AdminController@index');
// Route::get('/list-admin', 'AdminController@listAdmin');
//
// Route::auth();
//
// Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
    Route::resource('items', 'ItemController');
});

// Templates
Route::group(array('prefix'=>'/templates/'),function(){
    Route::get('{template}', array( function($template)
    {
        $template = str_replace(".html","",$template);
        View::addExtension('html','php');
        return View::make('templates.'.$template);
    }));
});


Route::resource('employees', 'EmployeesController');
Route::get('/emp', function(){
    return view('index');
});

Route::resource('comments', 'CommentController');

Route::get('/sitepoint', function(){
    return view('sitepoint.index');
});

Route::resource('/sitepoint/books', 'BookController');

Route::group(array('prefix'=>'/sitepoint/partials/'),function(){
    Route::get('{partials}', array( function($partials)
    {
        $partials = str_replace(".html","",$partials);
        View::addExtension('html','php');
        return View::make('sitepoint.partials.'.$partials);
    }));
});
