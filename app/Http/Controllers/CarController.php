<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CarController extends Controller
{
    /**
     * GET /admin/cars
     */
    public function showCars()
    {
        if (\Auth::user()->isAdmin())
        {
            return view('admin.cars.index');
        }
        else
        {
            return view('moderator.cars.index');
        }
    }

    /**
     * GET /admin/cars/new
     */
    public function showCreateCar()
    {
        if (\Auth::user()->isAdmin())
        {
            return view('admin.cars.new');
        }
        else
        {
            return view('moderator.cars.new');
        }

    }

    /**
     * GET /admin/cars/{id}
     */
    public function showUpdateCar()
    {
        if (\Auth::user()->isAdmin())
        {
            return view('admin.cars.edit');
        }
        else
        {
            return view('moderator.cars.edit');
        }
    }

    //------------- Admin: cars - POST & DELETE ------------- //

    /**
     * POST /admin/cars/new
     */
    public function createCar()
    {
        $name = Input::get('fuel');
        dd($name);
    }

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
