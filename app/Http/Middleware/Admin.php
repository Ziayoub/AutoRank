<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        // redirect back to the `/admin` if the user is a moderator and
        // he's trying to access an "admin" only URL like `/admin/mods`.
        if (!Auth::user()->isAdmin()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
