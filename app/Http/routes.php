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

use App\HelloWorld;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloWorld',"HelloWorldController@hello");

Route::resource('user','UserController');

Route::get('/prova1', function () {
    return "<h1>Hello World.</h1>"   ;
});

Route::get('/prova2', function () {

    $content = '<h1>Hello World.</h1>';
    $status = '200';
    $contentType = 'text/html';

    return response($content, $status)
        ->header('Content-Type', $contectType);
});