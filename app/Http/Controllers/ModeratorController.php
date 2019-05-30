<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{

    /**
     * GET /moderator/
     */
    public function index()
    {
        return view('moderator.index');
    }


    /* ---------------- Agency: GET & POST  ---------------- */

    /**
     * GET /moderator/agency
     */
    public function showUpdateAgency()
    {
        return view('moderator.agency');
    }

    /**
     * POST /moderator/agency
     */
    public function updateAgency()
    {
        // update the agency, and then redirect back to the agency.
    }


    /* ---------------- Profile: GET & POST  ---------------- */

    /**
     * GET /moderator/profile
     */
    public function showUpdateProfile()
    {
        return view('moderator.profile');
    }

    /**
     * POST /moderator/profile
     */
    public function updateProfile()
    {
        // update the profile, and then redirect back to the profile.
    }


    /* ---------------- Cars: GET  ---------------- */

    /**
     * GET /moderator/cars
     */
    public function showCars()
    {
        return view('moderator.cars.index');
    }

    /**
     * GET /moderator/cars/new
     */
    public function showCreateCar()
    {
        return view('moderator.cars.new');
    }

    /**
     * GET /moderator/cars/{id}/update
     */
    public function showUpdateCar()
    {
        return view('moderator.cars.edit');
    }


    /* ---------------- Cars: POST & DELETE  ---------------- */

    /**
     * POST /moderator/cars/new
     */
    public function createCar()
    {
        // create the car, and then redirect back to the car.
    }

    /**
     * POST /moderator/cars/{id}/update
     */
    public function updateCar()
    {
        // update the car, and then redirect back to the car.
    }

    /**
     * DELETE /moderator/cars/{id}/delete
     */
    public function deleteCar()
    {
        // delete the car, and then redirect black to the index.
    }

}
