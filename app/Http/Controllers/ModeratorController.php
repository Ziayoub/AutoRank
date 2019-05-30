<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function index()
    {
        return view('moderator.index');
    }

    public function agency()
    {
        return view('moderator.agency');
    }

        public function showUpdateProfile()
    {
        return view('moderator.profile');
    }

    public function updateProfile()
    {
        return view('moderator.cars.index');
    }

    public function updateCar()
    {
        return view('moderator.cars.new');
    }

    public function cars()
    {
        return view('moderator.cars.edit');
    }
}
