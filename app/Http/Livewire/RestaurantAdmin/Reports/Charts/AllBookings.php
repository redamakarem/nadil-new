<?php

namespace App\Http\Livewire\RestaurantAdmin\Reports\Charts;

use Livewire\Component;
use App\Models\BookingStatus;

class AllBookings extends Component
{
    public $bookings;
    public $result;
    public function mount()
    {
        $this->getAllBookings();
        
    }


    public function getAllBookings()
    {
        $this->result= BookingStatus::withCount('bookings')
        ->get()
        ->filter(function($booking) {
            return $booking->restaurant_id == auth()->user()->workplace->id;
        })
        ->toArray();
    }
    public function render()
    {
        return view('livewire.restaurant-admin.reports.charts.all-bookings');
    }
}
