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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/news', 'NewsController@index');
Route::get('/news/add', 'NewsController@create');
Route::post('/news/add', 'NewsController@store');
Route::get('/news/edit/{id}', 'NewsController@edit');
Route::post('/news/edit/{id}', 'NewsController@update');
Route::get('/news/delete/{id}', 'NewsController@destroy');





 Route::get('/departments', 'DepartmentsController@index');
Route::get('/departments/add', 'DepartmentsController@create');
Route::post('/departments/add', 'DepartmentsController@store');
Route::get('/departments/edit/{id}', 'DepartmentsController@edit');
Route::post('/departments/edit/{id}', 'DepartmentsController@update');
Route::get('/departments/delete/{id}', 'DepartmentsController@destroy');


/** http
	url : gggogdf.com
	method : post/get/put/delete/heade
	headers:

*/

Route::get('/pdf', function(){
	
	$pdf = PDF::loadView('pdf');
    return $pdf->stream('news.pdf');

});
