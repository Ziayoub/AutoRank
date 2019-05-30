<?php

/*  ---------------- Auth Routes ---------------- */

Auth::routes(["verify" => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Moderator is redirected to this route when he creates an account
// before the admin validates it.
Route::get('/pending', function () {
    return view('pending');
});


/*  ---------------- Pages Routes ---------------- */

Route::get('/', 'PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@contact')->name('contact');;

Route::get('/agencies','PagesController@agencies')->name('agencies');;
Route::get('/agencies/{id}','PagesController@agency')->name('agency');;

Route::get('/cars','PagesController@cars')->name('cars');
Route::get('/cars/{id}','PagesController@car')->name('car');;


/*  ---------------- Moderator Routes ---------------- */

Route::get('/moderator','ModeratorController@index')->name('moderator.index');

Route::get('/moderator/profile','ModeratorController@showUpdateProfile')->name('moderator.showUpdateProfile');
Route::post('/moderator/profile','ModeratorController@updateProfile')->name('moderator.updateProfile');

Route::get('/moderator/agency','ModeratorController@showUpdateAgency')->name('moderator.showUpdateAgency');
Route::post('/moderator/agency','ModeratorController@updateAgency')->name('moderator.updateAgency');

Route::get('/moderator/cars','ModeratorController@showCars')->name('moderator.showCars');
Route::get('/moderator/cars/new','ModeratorController@showCreateCar')->name('moderator.showCreateCar');
Route::post('/moderator/cars/new','ModeratorController@createCar')->name('moderator.createCar');

Route::get('/moderator/cars/{id}','ModeratorController@showUpdateCar')->name('moderator.showUpdateCar');
Route::post('/moderator/cars/{id}','ModeratorController@updateCar')->name('moderator.updateCar');
Route::delete('/moderator/cars/{id}','ModeratorController@deleteCar')->name('moderator.deleteCar');
