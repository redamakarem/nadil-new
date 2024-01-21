<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasAnyRole(['super-admin','nadil-admin'])){
            return view('admin.users.index');
        }
        else{
            abort(403);
        }
        
    }


    public function byRole($role_id)
    {

        $users = Role::with('users')->findOrFail($role_id)->users;
        return view('admin.users.roles',compact(['users','role_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->hasAnyRole(['super-admin','nadil-admin'])){
            return view('admin.users.create');
        }
        else{
            abort(403);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->hasAnyRole(['super-admin','nadil-admin'])){
            $user = User::findOrFail($id);
        return view('admin.users.edit',compact(['user']));
        }
        else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function deleted()
    {
        return view('admin.users.deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function impersonate(User $user)
    {
        auth()->user()->impersonate($user);
        if ($user->hasRole([3,4,5,6,7]))
        {
            return redirect()->route('restaurant-admin.index');
        }
        else
        {
            return redirect()->route('admin.index');
        }


    }

    public function leaveImpersonate()
    {
        auth()->user()->leaveImpersonation();

        return redirect()->route('admin.users.index');
    }
}
