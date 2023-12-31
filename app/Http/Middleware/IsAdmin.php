<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
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
        if (Auth::user()->hasRoleId(1)) {
            return $next($request);
        }
        // return abort(403);
        else if(Auth::user()->hasRoleId(2)){
            return redirect()->route('customer.home');
        }

        else{
            return abort('403');
        }
        
    }
}
