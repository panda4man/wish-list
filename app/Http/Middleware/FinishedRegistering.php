<?php

namespace App\Http\Middleware;

use Closure;

class FinishedRegistering
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
        if(auth()->check()) {
            if(!auth()->user()->getAuthPassword()) {
                session()->flash('flash-warning', 'You must complete your account.');
                return redirect('/profile/password');
            }
        }
        return $next($request);
    }
}
