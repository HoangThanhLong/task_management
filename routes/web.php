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
    return view('home');
});
Route::group(['prefix'=> 'tasks'], function (){
    Route::get('/','TasksController@index')->name('tasks.index');
    Route::get('/create','TasksController@create')->name('tasks.create');
    Route::post('/create','TasksController@store')->name('tasks.store');
    Route::get('/{id}/edit','TasksController@edit')->name('tasks.edit');
    Route::post('/{id}/edit','TasksController@update')->name('tasks.update');
    Route::get('/{id}/destroy','TasksController@destroy')->name('tasks.destroy');
});
