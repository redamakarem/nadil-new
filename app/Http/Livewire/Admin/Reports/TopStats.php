<?php

namespace App\Http\Livewire\Admin\Reports;

use Livewire\Component;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class TopStats extends Component
{
    public $top_time;
    public $top_weekdays;
    public $top_booked;

    public function mount()
    {
        $this->getAllData();
    }
    public function render()
    {
        return view('livewire.admin.reports.top-stats');
    }
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

    public function getAllData()
    {
        $this->top_time = DB::table('bookings')
        ->select('booking_time', DB::raw('count(*) as count'))
        ->orderby('count','desc')
        ->groupBy('booking_time')
        ->take(3)->get();
        $top_weekday_nums= DB::table('bookings')
        ->select('weekday', DB::raw('count(*) as count'))
        ->orderby('count','desc')
        ->groupBy('weekday')
        ->take(3)->get();
        $top_weekdays = array();
       foreach ($top_weekday_nums as  $top_weekday_num) {
        array_push($top_weekdays,$this->getDayNameFromDayOfWeek($top_weekday_num->weekday));
       }
       $this->top_weekdays = $top_weekdays;
        $this->top_booked=Restaurant::withCount('bookings')->orderBy('bookings_count','desc')->take(3)->get();
    }
}
