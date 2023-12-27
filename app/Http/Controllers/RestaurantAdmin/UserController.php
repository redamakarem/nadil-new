<?php

namespace App\Http\Controllers\RestaurantAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function byRole($role_id)
    {
        if (auth()->user()->hasRole('restaurant-super-admin')) {
            $users = Role::with('users')->findOrFail($role_id)->users->whereIn('restaurant_id', auth()->user()->restaurants->pluck('id'));
            return view('restaurant-admin.users.roles', compact(['users']));
        } else {
            abort(403);
        }
    }

    public function create()
    {
        return view('restaurant-admin.users.create');
    }
}
