<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;

class BookingsForToday extends Component
{

    public $bookings;

    public function mount()
    {

        $this->bookings = Booking::where('booking_date', Carbon::today()->format('Y-m-d'))->get();
    }
    public function render()
    {
        return view('livewire.admin.bookings-for-today');
    }
}
