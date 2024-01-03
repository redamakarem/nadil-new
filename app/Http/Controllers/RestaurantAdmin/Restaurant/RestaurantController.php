<?php

namespace App\Http\Controllers\RestaurantAdmin\Restaurant;

use App\Models\User;
use App\Models\Cuisine;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restaurant-admin.restaurant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuisines = Cuisine::all();
        $users = User::role('restaurant-super-admin')->get();
        return view('restaurant-admin.restaurant.create',compact('cuisines','users'));
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
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant-admin.restaurant.show',compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        if(auth()->user()->hasRole('restaurant-super-admin')){
            if(!auth()->user()->restaurants->pluck('id')->contains($restaurant->id)){
                abort(403, 'You are not authorized to edit this restaurant!!');
            }
            return view('restaurant-admin.restaurant.edit',compact('restaurant'));
        }
        if(auth()->user()->hasRole('restaurant-admin')){
            if(!auth()->user()->workplace->id==$restaurant->id){
                abort(403, 'You are not authorized to edit this restaurant');
            }
            return view('restaurant-admin.restaurant.edit',compact('restaurant'));
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

    public function showStaff($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant-admin.staff.index',compact(['restaurant']));
    }
    public function createStaff($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant-admin.staff.create',compact(['restaurant']));
    }
    public function editStaff($restaurant_id, $staff_id)
    {
        if(!Auth::user()->hasAnyRole(['super-admin','nadil-admin','restaurant-super-admin'])){
            abort(403,__('Unauthorized'));
        }
        $restaurant = Restaurant::findOrFail($restaurant_id);
        if(Auth::user()->hasRole('restaurant-super-admin') && $restaurant->owner->id==Auth::user()->id)
        {
            $staff = User::findOrFail($staff_id);
            return view('restaurant-admin.staff.edit',compact(['restaurant','staff']));
        }
        
        
        
    }
}
