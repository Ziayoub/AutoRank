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
        $agencyId = intval($request->id);
        $ownAgency = Auth::user()->agency()->first();

        if ($agencyId != $ownAgency->id) {
            return redirect()->route('admin.showUpdateAgency', $ownAgency->id);
        }

        return $next($request);
    }
}
