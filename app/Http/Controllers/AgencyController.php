<?php

namespace App\Http\Controllers;

use App\Agency;
use Auth;
use Illuminate\Http\Request;
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
        return view('admin.agencies.index')->with([ 'agencies' => $agencies]);
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
        if (\Auth::user()->isAdmin())
        {
          $agencies = Agency::all();
          return view('admin.agencies.edit')->with([ 'agencies' => $agencies]);
        }
        else
        {
            return view('moderator.agency');
        }
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
        $agencies = Agency::all();

        $validatedData = $request->validate([
            'AgencyName' => 'required|string|max:255',
            'AgencyAddress' => 'required|string|max:255',
            'AgencyCity' => 'required|max:255|filled',
            'AgencyPhone' => 'required|numeric',
            'facebook' => 'string',
            'whatsapp' => 'numeric|max:255',
            'instagram' => 'string|max:255',

        ]);


        $agency = new Agency([
            "name" => $validatedData["AgencyName"],
            "address" => $validatedData["AgencyAddress"],
            "city" => $validatedData["AgencyCity"],
            "phone" => $validatedData["AgencyPhone"],
            "facebook" => $validatedData["facebook"],
            "whatsapp" => $validatedData["whatsapp"],
            "instagram" => $validatedData["instagram"],
        ]);

        $agency->moderator()->associate(Auth::user());
        $agency->save();


        redirect()->route('admin.index');

    }

    /**
     * DELETE /admin/agencies/{id}
     */
    public function deleteAgency()
    { }


}
