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
    return view('toppage.index');
});

Auth::routes();

Route::get('/mypage', 'HomeController@add')->name('mypage');
Route::get('/question', 'QuestionController@add')->name('question');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
