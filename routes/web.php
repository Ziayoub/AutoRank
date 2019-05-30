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

Auth::routes(["verify" => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@contact')->name('contact');;

Route::get('/agencies','PagesController@agencies')->name('agencies');;
Route::get('/agencies/{id}','PagesController@agency')->name('agency');;

Route::get('/cars','PagesController@cars')->name('cars');
Route::get('/cars/{id}','PagesController@car')->name('car');;

// Moderator is redirected to this route when he creates an account
// before the admin validates it.
Route::get('/pending', function () {
    return view('pending');
});


/*  ---------------- Moderator Routes ---------------- */

Route::get('/moderator','ModeratorController@index')->name('moderator.index');
Route::get('/moderator/profile','ModeratorController@showProfile')->name('moderator.showProfile');

Route::get('/moderator/agency','ModeratorController@showAgency')->name('moderator.showAgency');
Route::post('/moderator/agency','ModeratorController@updateAgency')->name('moderator.updateAgency');

Route::get('/moderator/cars','ModeratorController@showCars')->name('moderator.showCars');
Route::get('/moderator/cars/new','ModeratorController@showCreateCar')->name('moderator.showCreateCar');
Route::post('/moderator/cars/new','ModeratorController@createCar')->name('moderator.createCar');

Route::get('/moderator/cars/{id}/update','ModeratorController@showUpdateCar')->name('moderator.showUpdateCar');
Route::post('/moderator/cars/{id}/update','ModeratorController@updateCar')->name('moderator.updateCar');
