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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todos', 'TodoController@index')->name('todos');
Route::get('/todos/create', 'TodoController@create')->name('todos.create');
Route::post('/todos', 'TodoController@store')->name('todos.post');
Route::get('/todos/{id}/edit', 'TodoController@edit')->name('todos.edit');
Route::get('/todos/{id}', 'TodoController@show')->name('todos.show');
Route::post('/todos/{id}', 'TodoController@update')->name('todos.update');
Route::get('/todos/{id}/delete', 'TodoController@destroy')->name('todos.delete');
