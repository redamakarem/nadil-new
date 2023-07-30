<?php

namespace App\Http\Livewire\Site\User;

use Carbon\Carbon;
use App\Models\Booking;
use Livewire\Component;
use App\Models\BookingsTables;
use Illuminate\Support\Facades\Auth;
use App\Events\BookingCancelledEvent;

class History extends Component
{

    public $bookings;
    public $selected_booking;
    public $profile;
    public $idToRemove;
    public $active_tab;
    public $filtered_bookings;

    protected $listeners = ['bookingDeleteConfirmed' => 'deleteBooking','refreshComponent' => '$refresh'];

    public function mount($bookings, $profile)
    {
        $this->active_tab = 'upcoming';
        $this->bookings =  Booking::with('restaurant')->where('user_id',Auth::id())->orderBy('booking_date','desc')->whereIn('booking_status_id',[1,5])->get();
        $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->where('booking_date','>',Carbon::now())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[1])->get();
        $this->profile = $profile;
        $this->selected_booking = null;
    }

    

    public function select_restaurant($b)
    {
        $this->selected_booking = Booking::findOrFail($b);
        
    }

    public function cancel_booking()
    {
        if($this->selected_booking){
            BookingsTables::where('booking_date',$this->selected_booking->booking_date)
            ->where('booking_time',$this->selected_booking->booking_time)->delete();
            $this->selected_booking->booking_status_id=5;
            $this->selected_booking->save();
            $bookings = Booking::with('restaurant')->where('user_id',Auth::id())->orderBy('booking_date','desc')->where('booking_status_id','1')->get();
            $this->selected_booking=null;
            
            
        }
    }

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
            $this->bookings =  Booking::with('restaurant')->where('user_id',Auth::id())->orderBy('booking_date','desc')->where('booking_status_id','1')->get();
            $this->selected_booking = null;
            $this->emit('refreshComponent');
            event(new BookingCancelledEvent(auth()->user(), $booking_to_delete));
        }
    }

    public function changeTab($tab)
    {
        $this->active_tab = $tab;
        if($tab == 'upcoming'){
            $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->where('booking_date','>',Carbon::now())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[1])->get();
    }
        if($tab == 'past'){
            $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->where('booking_date','<',Carbon::now())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[1])->get();
    }
        if($tab == 'cancelled'){
            $this->filtered_bookings =  Booking::with('restaurant')
            ->where('user_id',Auth::id())
            ->orderBy('booking_date','desc')->whereIn('booking_status_id',[5])->get();
    }
}

    public function render()
    {
        return view('livewire.site.user.history');
    }
}
