<?php

namespace App\Http\Controllers\RestaurantAdmin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    private function getDayNameFromDayOfWeek($dayOfWeek)
    {
        $days =[
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
        ];
        return $days[$dayOfWeek];
    }

    public function index()
    {
        $restaurant_ids = array();
        if(auth()->user()->hasRole('restaurant-super-admin'))
        {
            $restaurant_ids = auth()->user()->restaurants->pluck('id')->toArray();
        }
        else
        {
            $restaurant_ids = array(auth()->user()->workplace->id);
        }
        $top_time= DB::table('bookings')
        ->select('booking_time', DB::raw('count(*) as count'))
        ->whereIn('restaurant_id',$restaurant_ids)
        ->orderby('count','desc')
        ->groupBy('booking_time')
        ->take(3)->get();
        $top_weekday_nums= DB::table('bookings')
        ->select('weekday', DB::raw('count(*) as count'))
        ->whereIn('restaurant_id',$restaurant_ids)
        ->orderby('count','desc')
        ->groupBy('weekday')
        ->take(3)->get();
        // dd($top_weekday_nums);
        $top_weekdays = array();
       foreach ($top_weekday_nums as  $top_weekday_num) {
        array_push($top_weekdays,$this->getDayNameFromDayOfWeek($top_weekday_num->weekday));
       }
        $top_booked=Restaurant::withCount('bookings')
        // ->whereIn('restaurant_id',$restaurant_ids)
        ->orderBy('bookings_count','desc')->take(3)->get();
        
        return view('restaurant-admin.reports.index',compact(['top_time','top_booked','top_weekdays']));
    }
}
