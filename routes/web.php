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

// Auth::routes();

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function() {
//メール認証が完了した場合のみ、実行できるRoute
});

Route::get('/mypage', 'HomeController@add')->name('mypage');
Route::get('/question', 'QuestionController@add')->name('question');
// Route::post('/question', 'QuestionController@create')->name('question_create');
Route::get('/question/post', 'QuestionController@post')->name('question_post');
Route::post('/question/post', 'QuestionController@create')->name('question_create');


Route::group(['middleware'=>'admin'], function () {
    Route::get('/admin', 'Admin\UserController@index')->name('admin.users');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
