<?php

namespace App\Http\Controllers\RestaurantAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function byRole($role_id)
    {

        $users = Role::with('users')->findOrFail($role_id)->users;
        return view('restaurant-admin.users.roles',compact(['users']));
    }
}
