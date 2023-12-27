<?php

namespace App\Http\Livewire\RestaurantAdmin\Booking;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Booking;

class Calendar extends Component
{
    public $bookings;
    public $events;
    public function mount()
    {
        if(auth()->user()->hasRole('restaurant-super-admin')){
            $this->bookings = Booking::where('restaurant_id',auth()->user()->restaurants->pluck('id')->toArray())->get();
        }
        else{
            $this->bookings = Booking::where('restaurant_id',auth()->user()->workplace->id)->get();
        }
        // $this->bookings = Booking::all();
        $this->events = $this->convertBookingsToCalendarEevents();

    }

    public function convertBookingsToCalendarEevents()
    {
        $calendar_events = $this->bookings->map(function ($item){
           return [
               'id' => $item->id,
               'title' => 'NDL-'.$item->id,
               'start' => Carbon::parse($item->booking_date)->format('Y-m-d').' '.$item->booking_time,
               'end' => Carbon::parse($item->booking_date)->format('Y-m-d').' '.$item->booking_end_time,
               'url' => route('admin.bookings.show',$item->id)
           ];
        });
        return json_encode($calendar_events);
    }
    public function render()
    {
        return view('livewire.restaurant-admin.booking.calendar');
    }
}
