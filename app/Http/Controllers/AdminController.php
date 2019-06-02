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



}
