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

Route::get('/tasks', function(){
  return view('tasks');
});
Route::get('/roles', function(){
  return view('roles');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('tasks', 'TasksController@insert');
Route::post('roles', 'RolesController@insert');
