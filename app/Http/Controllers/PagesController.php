<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function index()
    {
        return view('index');
    }

    public  function about()
    {
        return view('about');
    }

    public  function contact()
    {
        return view('contact');
    }

    public  function agencies()
    {
        return view('agencies');
    }

    public  function agency()
    {
        return view('agency');
    }

    public  function cars()
    {
        return view('cars');
    }

    public  function car()
    {
        return view('car');
    }




}
