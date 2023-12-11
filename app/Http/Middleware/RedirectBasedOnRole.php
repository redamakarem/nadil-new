<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        dd($request);
        $user = Auth::user();

        foreach ($roles as $role) {
            if ($user->hasRole($role)) {
                return redirect($this->redirectToRole($role));
            }
        }

        return $next($request);
    }

    private function redirectToRole($role)
    {
        switch ($role) {
            case 'restaurant-super-admin':
                return '/restaurant-admin';
            case 'nadil-admin':
                return '/restaurant-admin';
            case 'nadil-support':
                return '/restaurant-admin';
            case 'restaurant-admin':
                return '/restaurant-admin';
            case 'restaurant-host':
                return '/restaurant-admin';
            case 'restaurant-manager':
                return '/restaurant-admin';
            case 'super-admin':
                return '/admin';
            case 'user':
                return '/';
            default:
                return '/';
        }
    }
}
