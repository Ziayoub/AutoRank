<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * GET /admin
     */
    public function index()
    {
        return view('admin.index');
    }



    // ------------- Admin: profile - GET & POST ------------- //

    /**
     * GET /admin/profile
     */
    public function showUpdateProfile()
    {
        return view('admin.profile');
    }

    /**
     * POST /admin/profile
     */
    public function updateProfile()
    {
        // update the profile.
    }



    // ------------- Admin: mods - GET ------------- //

    /**
     * GET /admin/mods
     */
    public function showModerators()
    {
        return view('admin.moderators.index');
    }

    /**
     * GET /admin/mods/new
     */
    public function showCreateModerator()
    {
        return view('admin.moderators.edit');
    }

    /**
     * GET /admin/mods/{id}
     */
    public function showUpdateModerator()
    {
        return view('admin.moderators.edit');
    }

    // ------------- Admin: mods - POST & DELETE ------------- //

    /**
     * POST /admin/mods/new
     */
    public function createModerator()
    { }

    /**
     * POST /admin/mods/{id}
     */
    public function updateModerator()
    { }

    /**
     * DELETE /admin/mods/new
     */
    public function deleteModerator()
    { }



    // ------------- Admin: agencies - GET ------------- //

    /**
     * GET /admin/agencies
     */
    public function showAgencies()
    {
        return view('admin.agencies.index');
    }

    /**
     * GET /admin/agencies/new
     */
    public function showCreateAgency()
    {
        return view('admin.agencies.new');
    }

    /**
     * GET /admin/agencies/{id}
     */
    public  function showUpdateAgency()
    {
        return view('admin.agencies.edit');
    }

    // ------------- Admin: agencies - POST & DELETE ------------- //

    /**
     * POST /admin/agencies/{id}
     */
    public  function updateAgency()
    { }

    /**
     * POST /admin/agencies/new
     */
    public function createAgency()
    { }

    /**
     * DELETE /admin/agencies/{id}
     */
    public function deleteAgency()
    { }



    //------------- Admin: cars - GET ------------- //

    /**
     * GET /admin/cars
     */
    public function showCars()
    {
        return view('admin.cars.index');
    }

    /**
     * GET /admin/cars/new
     */
    public function showCreateCar()
    {
        return view('admin.cars.new');
    }

    /**
     * GET /admin/cars/{id}
     */
    public function showUpdateCar()
    {
        return view('admin.cars.edit');
    }

    //------------- Admin: cars - POST & DELETE ------------- //

    /**
     * POST /admin/cars/new
     */
    public function createCar()
    { }

    /**
     * POST /admin/cars/{id}
     **/
    public function updateCar()
    { }

    /**
     * DELETE /admin/cars/{id}
     **/
    public function deleteCar()
    { }

}
