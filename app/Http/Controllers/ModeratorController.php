<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{

    public function index()
    {
        return view('moderator.index');
    }

    public function showAgency()
    {
        return view('moderator.agency');
    }

    public function showProfile()
    {
        return view('moderator.profile');
    }

    /* -------- Cars  -------- */

    public function showCars()
    {
        return view('moderator.cars.index');
    }

    public function showCreateCar()
    {
        return view('moderator.cars.new');
    }

    public function showUpdateCar()
    {
        return view('moderator.cars.edit');
    }

    /**
     * POST /car
     */
    public function updateCar()
    {
        return view('moderator.cars.new');
    }

    public function createCar()
    {
        return view('moderator.cars.edit');
    }

}
