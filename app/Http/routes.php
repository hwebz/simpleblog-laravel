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

Route::get('/', 'PagesController@index');

Route::get('/articles', [
  'as' => 'articles.index',
  'uses' => 'ArticlesController@index'
]);

Route::get('/articles/create', [
  'as' => 'articles.create',
  'uses' => 'ArticlesController@create'
]);

Route::post('/articles', [
  'as' => 'articles.store',
  'uses' => 'ArticlesController@store'
]);

Route::get('articles/{id}/edit', [
    'as' => 'articles.edit',
    'uses' => 'ArticlesController@edit'
]);

Route::put('articles/{id}', [
    'as' => 'article.update',
    'uses' => 'ArticlesController@update'
]);

Route::delete('articles/{id}', [
   'as' => 'articles.destroy',
    'uses' => 'ArticlesController@delete'
]);

Route::get('/articles/{id}', [
  'as' => 'article.show',
  'uses' => 'ArticlesController@show'
]);
