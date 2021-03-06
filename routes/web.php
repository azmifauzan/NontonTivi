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

Route::get('/', "HomeController@index");

Route::prefix('admin')->group(function () {
	Route::get('/', "Admin\LoginController@index")->name('loginadmin');
	Route::get('home', "Admin\HomeController@index")->name('dashboard');
	Route::get('logout',"Admin\LoginController@out")->name('logoutadmin');
	Route::post('login', "Admin\LoginController@ceklogin");
	Route::resource('actor', 'Admin\ActorController')->except(['show']);
	Route::resource('channel', 'Admin\ChannelController')->except(['show']);
	Route::resource('ph', 'Admin\ProductionhouseController')->except(['show']);
	Route::resource('program', 'Admin\ProgramController')->except(['show']);
	Route::resource('jadwal', 'Admin\ScheduleController')->except(['show']);
	Route::post('jadwal/filter','Admin\ScheduleController@filter')->name('jadwal.filter');
});
