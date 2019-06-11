<?php

namespace App\Http\Middleware;

use Closure;

class Approved
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!\Auth::user()->isApproved())
        {
            return redirect()->route('pending');
        }

        return $next($request);
    }
}
