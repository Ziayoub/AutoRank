<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

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
    public function showCreateCar(Request $request)
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

    }

    //------------- Admin: cars - POST & DELETE ------------- //

    /**
     * POST /admin/cars/new
     */
    public function createCar(Request $request)
    {

        $validateData = $request->validate([
            'brand' => 'required|in:seat,peugeot,citroen|',
            'model' => 'required|in:C4,Leon ',
            'production_year' => 'required|numeric',
            'seats' => 'required|numeric',
            'price' => 'required|numeric',
            'fuel' => 'required|in:essence,diesel',
            'speed' => 'required|in:manual,automatic',
        ]);
        $car = new Car([
            "brand" => $validateData["brand"],
            "model" => $validateData["model"],
            "production_year" => $validateData["production_year"],
            "seats" => $validateData["seats"],
            "price" => $validateData["price"],
            "fuel" => $validateData["fuel"],
            "speed" => $validateData["speed"]

        ]);

        // Get the agency of the current user.
    $agency = Agency::where('user_id', auth()->user()->id);

        // Associate it with the car.
    $car->agency()->associate($agency)->save();
    $car->save();

     $carModel = CarModel::create([ /* We are missing this from the form... */]);
     $car->carModel()->associate($carModel)->save();
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
