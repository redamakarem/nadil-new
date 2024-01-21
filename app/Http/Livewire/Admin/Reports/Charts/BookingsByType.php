<?php

namespace App\Http\Livewire\Admin\Reports\Charts;

use App\Models\Booking;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BookingsByType extends Component
{
    public $result;

    public function mount()
    {
        $this->getBookingsByType();
    }

    public function getBookingsByType()
    {
        $this->result=Booking::select('type', DB::raw('count(*) as count'))
       ->groupBy('type')
       ->get()->toArray();
    }
    public function render()
    {
        return view('livewire.admin.reports.charts.bookings-by-type');
    }
}
