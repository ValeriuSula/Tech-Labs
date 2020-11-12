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

use App\Http\Controllers\IndexController;

Route::get('/', 'IndexController@index');

Route::get('article/{id}', 'IndexController@show')->name('articleShow');

Route::delete('page/delete/{article}', function (\App\Article $article) {
    $article->delete();
    return redirect('admin');
})->name('articleDelete');

Route::resource('articles', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/page1', 'IndexController@page1')->name('page1');

Route::get('/contacts', 'IndexController@contacts')->name('contacts');