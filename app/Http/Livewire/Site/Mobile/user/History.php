<?php

namespace App\Http\Livewire\Site\Mobile\User;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use App\Models\BookingsTables;
use Illuminate\Support\Facades\Auth;

class History extends Component
{

    public $bookings;
    public $idToRemove;
    public $profile;
    public $selected_filter;
    public $filtered_bookings;


    protected $listeners = ['bookingDeleteConfirmed' => 'deleteBooking'];




    public function confirmBookingDeletion($id)
    {
        $this->idToRemove = $id;
        $this->dispatchBrowserEvent('show-swal-delete');
    }

    public function deleteBooking()
    {
        $booking_to_delete = Booking::findOrFail($this->idToRemove);
        if($booking_to_delete){
            BookingsTables::where('booking_date',$booking_to_delete->booking_date)
            ->where('booking_time',$booking_to_delete->booking_time)->delete();
            $booking_to_delete->booking_status_id=5;
            $booking_to_delete->save();
        }
    }

    public function updatedSelectedFilter($value)
    {
            if($value == 'upcoming'){
            $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->where('booking_date','>',Carbon::now())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[1])->get();
    }
        if($value == 'past'){
            $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->where('booking_date','<',Carbon::now())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[1])->get();
    }
        if($value == 'cancelled'){
            $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[5])->get();
    }
    }

    public function render()
    {
        return view('livewire.site.mobile.user.history');
    }

    public function mount($bookings,$profile)
    {
        $this->bookings =  Booking::with('restaurant')->where('user_id',Auth::id())->orderBy('booking_date','desc')->where('booking_status_id','1')->get();
        $this->profile = $profile;
        $this->selected_filter = 'upcoming';
        $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->where('booking_date','>',Carbon::now())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[1])->get();
    }
}
