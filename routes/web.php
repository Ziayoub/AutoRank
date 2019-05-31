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

/*  ---------------- Admin Routes ---------------- */

Route::get('/admin','AdminController@index')->name('admin.index');

Route::get('/admin/profile','AdminController@showUpdateProfile')->name('admin.showUpdateProfile');
Route::post('/admin/profile','AdminController@updateProfile')->name('admin.updateProfile');

Route::get('/admin/mods','AdminController@showModerators')->name('admin.showModerators');
Route::get('/admin/mods/new','AdminController@showCreateProfile')->name('admin.showCreateProfile');
Route::post('/admin/mods/new','AdminController@createModerators')->name('admin.createModerators');

Route::get('/admin/mods/{id}','AdminController@showUpdateModerator')->name('admin.showUpdateModerator');
Route::post('/admin/mods/{id}','AdminController@updateModerator')->name('admin.updateModerator');
Route::delete('/admin/mods/{id}','AdminController@deleteModerator')->name('admin.deleteModerator');

Route::get('/admin/agencies','AdminController@showAgencies')->name('admin.showAgencies');
Route::get('/admin/agencies/new','AdminController@showCreateAgency')->name('admin.showCreateAgency');
Route::post('/admin/agencies/new','AdminController@createAgency')->name('admin.createAgency');

Route::get('/admin/agencies/{id}','AdminController@showUpdateAgency')->name('admin.showUpdateAgency');
Route::post('/admin/agencies/{id}','AdminController@updateAgency')->name('admin.updateAgency');
Route::delete('/admin/agencies/{id}','AdminController@deleteAgency')->name('admin.deleteAgency');

Route::get('/admin/cars','AdminController@showCars')->name('admin.showCars');
Route::get('/admin/cars/new','AdminController@showCreateCar')->name('admin.showCreateCar');
Route::post('/admin/cars/new','AdminController@createCar')->name('admin.createCar');

Route::get('/admin/cars/{id}','AdminController@showUpdatCar')->name('admin.showUpdatCar');
Route::post('/admin/cars/{id}','AdminController@updateCar')->name('admin.updateCar');
Route::delete('/admin/cars/{id}','AdminController@deleteCar')->name('admin.deleteCar');
