<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{

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


}