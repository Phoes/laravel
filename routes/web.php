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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
	$name = "beer";
    /*return view('index',compact('name'));*/

    return view('index')->with('name',$name)
                        ->with('coe',"CoE");
});
Route::get('/hll', function () {
    return view('hello')->with('name',"Phoes Bunto");
});
Route::get('/hll', function () {
	return view('hello')->with('name',"Phoes Bunto");

});
Route::get('/beer', 'HomeController@index');
Route::get('/mm', 'HomeController@hello');
Route::post('/home', 'HomeController@report');

