<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)  
    {
        // Compruebo los roles que tiene el usuario y miro si alguno es el que busco
        foreach ($request->user()->roles as $role) {
            if ($role == "admin") {
                return redirect('home');
            }
            return $next($request);
        }

    }
}
