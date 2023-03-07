<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingCancelledMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $booking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Booking $booking)
    {
        $this->user = $user;
        $this->booking = $booking;
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.booking-cancelled');
    }
}
