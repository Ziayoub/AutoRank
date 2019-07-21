<?php

namespace App\Http\Controllers;

use App\Car;
use App\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function index()
    {
        $featuredAgencies = Agency::all()->take(3);
        $featuredCars = Car::all()->take(6);

        $agencies = Agency::all();
        $cities = DB::table('cities_metadata')->get()->map(function ($city) { return $city->name; })->toArray();

        $brands = [];
        foreach (DB::table('cars_metadata')->get() as $carMetadata) {
            if (!array_key_exists($carMetadata->brand, $brands)) {
                $brands[$carMetadata->brand] = [$carMetadata->model];
            } else {
                array_push($brands[$carMetadata->brand], $carMetadata->model);
            }
        }

        return view('index', [
            'featuredAgencies' => $featuredAgencies,
            'featuredCars' => $featuredCars,
            'agencies' => $agencies,
            'cities' => $cities,
            'brands' => $brands,
        ]);
    }

    public function search(Request $request)
    {
        $query = Car::query();

        if ($request->get('agency')) {
            $query = $query->whereHas('agency', function($inner) use ($request) {
                $inner->where('id', intval($request->get('agency')));
            });
        }
        if ($request->get('model')) {
            $query = $query->whereHas('carModel', function($inner) use ($request) {
                $inner->where('name', 'like', '%' . $request->get('model') . '%');

                if ($request->get('brand')) {
                    $inner = $inner->whereHas('brand', function ($inner) use ($request) {
                        $inner->where('name', 'like', '%' . str_replace('_', ' ', $request->get('brand')) . '%s');
                    });
                }
            });
        }

        $pf = $request->get('price_filter');
        if (!empty($pf) && ($pf == 'asc' || $pf == 'desc')) {
            $query = $query->orderBy('price', $pf);
        }

        return view('search-result', ['cars' => $query->paginate(8)]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function agencies()
    {
        $agencies = Agency::paginate(8);
        return view('agencies', ['agencies' => $agencies]);
    }

    public function agency($id)
    {
        $agency = Agency::findOrFail($id);
        return view('agency', ['agency' => $agency]);
    }

    public function cars()
    {
        $cars = Car::paginate(8);
        return view('cars', ['cars' => $cars]);
    }

    public function car($id)
    {
        $car = car::findOrFail($id);
        return view('car', ['car' => $car]);
    }




}
