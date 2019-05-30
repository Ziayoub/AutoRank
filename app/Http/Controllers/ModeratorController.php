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

    /**
     * GET /moderator/agency
     */
    public function showAgency()
    {
        return view('moderator.agency');
    }

    /**
     * GET /moderator/profile
     */
    public function showProfile()
    {
        return view('moderator.profile');
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
        // create the car, and then redirect back to the index.
    }

    /**
     * POST /moderator/cars/{id}/update
     */
    public function updateCar()
    {
        // update the car, and then redirect back to the index.
    }

    /**
     * DELETE /moderator/cars/{id}/delete
     */
    public function deleteCar()
    {
        // delete the car, and then redirect black to the index.
    }

}
