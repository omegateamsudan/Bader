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

Auth::routes();

Route::prefix('/')->middleware('auth')->group(function () {

Route::get('', 'HomeController@index')->name('home');
Route::resource('users', 'User\UserController');
Route::resource('profiles', 'User\ProfileController');
Route::resource('tasks', 'Task\TaskController');
Route::resource('calendars', 'Calendar\CalendarController');
Route::resource('mytasks', 'Mytask\MytaskController');

});
