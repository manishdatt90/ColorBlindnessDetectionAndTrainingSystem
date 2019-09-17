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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(auth()->check()){
        return redirect('/home');


    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/report/{test}', 'TestController@report');
Route::get('/training/{test}', 'TestController@training');
Route::resource('tests', 'TestController');
Route::resource('responses', 'AnswerController');
