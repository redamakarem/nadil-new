<?php

namespace App\Http\Controllers\RestaurantAdmin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($restaurant)
    {
        $rest = Restaurant::with('schedules')->findOrFail($restaurant);
        return view('restaurant-admin.schedule.index',['restaurant' => $rest]);
    }

    public function all()
    {
        
        return view('restaurant-admin.schedule.all');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($restaurant_id)
    {
        $restaurant = Restaurant::with('schedules')->findOrFail($restaurant_id);
        return view('restaurant-admin.schedule.create',compact(['restaurant']));
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
    public function edit(Restaurant $restaurant, Schedule $schedule)
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
            if($restaurant->owner->id != auth()->id())
            abort(403);
        }
        if(auth()->user()->hasRole(['restaurant-admin','restaurant-manager'])){
            if($restaurant->id != auth()->user->restaurant->id)
            abort(403);

        }
        return view('restaurant-admin.schedule.edit',compact(['schedule']));
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
}
