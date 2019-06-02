<?php

/*  ---------------- Auth Routes ---------------- */

Auth::routes(/*["verify" => true]*/);
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
Route::get('/admin/mods/new','AdminController@showCreateModerator')->name('admin.showCreateModerator');
Route::post('/admin/mods/new','AdminController@createModerator')->name('admin.createModerator');

Route::get('/admin/mods/{id}','AdminController@showUpdateModerator')->name('admin.showUpdateModerator');
Route::post('/admin/mods/{id}','AdminController@updateModerator')->name('admin.updateModerator');
Route::delete('/admin/mods/{id}','AdminController@deleteModerator')->name('admin.deleteModerator');




/*  ---------------- Agency Routes: for Admin & Mod ---------------- */

Route::get('/admin/agencies/{id}','AgencyController@showUpdateAgency')->name('admin.showUpdateAgency');
Route::post('/admin/agencies/{id}','AgencyController@updateAgency')->name('admin.updateAgency');

/*  ---------------- Agency Routes: for Admin ---------------- */
Route::get('/admin/agencies','AgencyController@showAgencies')->name('admin.showAgencies');
Route::post('/admin/agencies/new','AgencyController@createAgency')->name('admin.createAgency');
Route::get('/admin/agencies/new','AgencyController@showCreateAgency')->name('admin.showCreateAgency');
Route::delete('/admin/agencies/{id}','AgencyController@deleteAgency')->name('admin.deleteAgency');




/*  ---------------- Car Routes: for Admin & Mod ---------------- */

Route::get('/admin/cars','CarController@showCars')->name('admin.showCars');
Route::get('/admin/cars/new','CarController@showCreateCar')->name('admin.showCreateCar');
Route::post('/admin/cars/new','CarController@createCar')->name('admin.createCar');

Route::get('/admin/cars/{id}','CarController@showUpdateCar')->name('admin.showUpdateCar');
Route::post('/admin/cars/{id}','CarController@updateCar')->name('admin.updateCar');
Route::delete('/admin/cars/{id}','CarController@deleteCar')->name('admin.deleteCar');


