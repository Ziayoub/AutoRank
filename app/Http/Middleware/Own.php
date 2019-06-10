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
        // get the {id} param in the URL.
        $resourceId = intval($request->id);
        // get the name of the resource name in the URL: /NAME/{id}.
        $resourceName = explode("/", $request->path())[1];

        // get the agency of the authenticated user.
        $ownAgency = Auth::user()->agency()->first();


        if ($resourceName == 'agencies') {

            // Redirect if the user is trying to access an agency that DOESN'T belong to him.
            if ($resourceId != $ownAgency->id) {
                // we will redirect him back to his OWN agency.
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
