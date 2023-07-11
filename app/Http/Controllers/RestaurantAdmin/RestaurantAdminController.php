<?php

namespace App\Http\Controllers\RestaurantAdmin;

use App\Models\User;
use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['booked'] = $this->get_bookings_by_status(1);
        $data['expected'] = $this->get_bookings_by_status(2);
        $data['arrived'] = $this->get_bookings_by_status(3);
        $data['no_show'] = $this->get_bookings_by_status(4);
        $data['cancelled'] = $this->get_bookings_by_status(5);
        return view('restaurant-admin.index', compact('data'));
    }

    private function get_bookings_by_status($status)
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
            $ids = auth()->user()->restaurants->pluck('id');
        }else{
            $ids = array(auth()->user()->workplace->id);
        }

        $bookings_count = Booking::with(['user'])->where('booking_status_id', $status)
            ->whereIn('restaurant_id', $ids)->count();
        return $bookings_count;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
