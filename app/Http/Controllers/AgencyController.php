<?php

namespace App\Http\Controllers;

use Auth;
use App\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;


class AgencyController extends Controller
{

    // ------------- Admin: agencies - GET ------------- //

    /**
     * GET /admin/agencies
     */
    public function showAgencies()
    {
        $agencies = Agency::all();
        return view('admin.agencies.index')->with(['agencies' => $agencies]);
    }

    /**
     * GET /admin/agencies/new
     */
    public function showCreateAgency()
    {
        $cities = DB::table('cities_metadata')->get()->map(function ($city) {
            return $city->name;
        })->toArray();

        return view('admin.agencies.new', ['cities' => $cities]);
    }

    /**
     * GET /admin/agencies/{id}
     */
    public  function showUpdateAgency($id)
    {
        $agency = Agency::findOrFail($id);
        $attachments = $agency->attachments()->get();
        $cars = $agency->cars()->get()->map(function ($car) {
            if ($car->attachments()->get()->isNotEmpty()) {
                $car->photo = $car->attachments()->first()->url;
            } else {
                $car->photo = 'https://i.imgur.com/PP8nupp.png';
            }

            if ($car->carModel()->first()) {
                $car->model = $car->carModel()->first()->name;
            }

            return $car;
        })->toArray();

        return view('admin.agencies.edit')->with([
            'agency' => $agency,
            'attachments' => $attachments,
            'cars' => $cars,
        ]);
    }

    // ------------- Admin: agencies - POST & DELETE ------------- //

    /**
     * POST /admin/agencies/{id}
     */
    public  function updateAgency()
    {
        return view('admin.edit.updateAgency');
    }

    /**
     * POST /admin/agencies/new
     */
    public function createAgency(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|max:255|filled',
            'phone' => 'required|numeric',
            'facebook' => 'string',
            'whatsapp' => 'numeric|max:255',
            'instagram' => 'string|max:255',
            'photos' => 'file',
        ]);

        dd($validatedData);

        $agency = new Agency([
            "name" => $validatedData["name"],
            "address" => $validatedData["address"],
            "city" => $validatedData["city"],
            "phone" => $validatedData["phone"],
            "facebook" => $validatedData["facebook"],
            "whatsapp" => $validatedData["whatsapp"],
            "instagram" => $validatedData["instagram"],
        ]);

        $agency->moderator()->associate(Auth::user());
        $agency->save();

        dd($agency);
        return redirect()->route('admin.index');
    }

    /**
     * DELETE /admin/agencies/{id}
     */
    public function deleteAgency()
    { }


}
