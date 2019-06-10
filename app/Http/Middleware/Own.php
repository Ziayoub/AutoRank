<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Own
{
    /**
     * Verifies that the agency which the user is trying to access is his own agency.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $resourceId = intval($request->id);
        $resourceName = explode("/", $request->path())[1];

        $ownAgency = Auth::user()->agency()->first();

        if ($resourceName == 'agencies') {
            if ($resourceId != $ownAgency->id) {
                return redirect()->route('admin.showUpdateAgency', $ownAgency->id);
            }
        } elseif ($resourceName == 'cars') {
            // $ownCars = $ownAgency->cars()->get();


            // $agencyHasCar = $ownCars->contains(function ($car) {
            //     return $car->id == resourceId;
            // });

            // if (!$agencyHasCar) {
            //     return redirect()->route('admin.showUpdateAgency', $ownAgency->id);
            // }
        }


        return $next($request);
    }
}
