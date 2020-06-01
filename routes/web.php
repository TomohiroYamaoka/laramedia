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
/*認証関連のルーティングの雛形を呼び出す。*/ 
Auth::routes();
Route::get('/', 'MainController@index')->name('articles.index');;
/*記事投稿画面のルーティング*/
Route::resource('/articles', 'MainController')->except(['index'])->middleware('auth');;