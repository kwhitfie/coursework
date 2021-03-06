<?php

use Illuminate\Support\Facades\Route;


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
    return view('index');
});



Route::get('/list', 'App\Http\Controllers\EventsController@list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('events','App\Http\Controllers\EventController')->name('events',"create");
Route::get('/becomeOrganiser', 'App\Http\Controllers\EventController@becomeOrganiser');
Route::get('add/{id}', ['as' => 'event.add', 'uses' => 'App\Http\Controllers\EventController@add']);




?>
