<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach($guards as $guard) {
            if($guard == "masyarakat" && Auth::guard($guard)->check()) {
                return redirect('/home');
            } else if($guard == "Petugas" && Auth::guard($guard)->check()) {
                if(auth()->guard('Petugas')->user()->level == 'Admin') {
                    return redirect('/admin');
                } else if(auth()->guard('Petugas')->user()->level == 'Petugas') {
                    return redirect('/petugas');
                }
            }
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        return $next($request);
    }
}
