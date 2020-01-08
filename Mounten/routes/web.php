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
// 検索初画面
Route::get('/main', 'SerchController@main')->name('categories.main');

// 検索ボタン実行後画面の表示と検索条件の表示
Route::get('result/{id}','SerchController@result')->name('results.result');
