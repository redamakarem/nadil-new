<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Illuminate\Http\Request;

class EnsurePasswordChanged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Hash::check('password',auth()->user()->password)){
            session()->flash('danger', 'Please change your password to proceed');
            return redirect()->route('user.profile.edit');
        }
        return $next($request);
    }
}
