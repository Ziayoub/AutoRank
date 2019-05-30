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

Route::get('/mod','ModeratorController@index')->name('mod.index');

Route::get('/mod/profile','ModeratorController@showUpdateProfile')->name('mod.showUpdateProfile');
Route::post('/mod/profile','ModeratorController@updateProfile')->name('mod.updateProfile');

Route::get('/mod/agency','ModeratorController@showUpdateAgency')->name('mod.showUpdateAgency');
Route::post('/mod/agency','ModeratorController@updateAgency')->name('mod.updateAgency');

Route::get('/mod/cars','ModeratorController@showCars')->name('mod.showCars');
Route::get('/mod/cars/new','ModeratorController@showCreateCar')->name('mod.showCreateCar');
Route::post('/mod/cars/new','ModeratorController@createCar')->name('mod.createCar');

Route::get('/mod/cars/{id}','ModeratorController@showUpdateCar')->name('mod.showUpdateCar');
Route::post('/mod/cars/{id}','ModeratorController@updateCar')->name('mod.updateCar');
Route::delete('/mod/cars/{id}','ModeratorController@deleteCar')->name('mod.deleteCar');
