<?php

namespace App\Http\Middleware;

use Closure;

class CheckLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->level, $levels)) {
            return $next($request);
        } else {
            if(auth()->user()->level == 'Admin') {
                return redirect('/admin');
            } else if (auth()->user()->level == 'Petugas') {
                return redirect('/petugas');
            }
        }
    }
}
