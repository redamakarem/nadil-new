<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Carbon\Carbon;

class Booking extends Model
{


    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'user_id',
        'phone',
        'booking_date',
        'booking_time',
        'seats',
        'booking_end_time',
        'booking_code',
        'booking_status_id',
        'weekday'
    ];

    protected $dates = [
        'booking_date',
        
    ];
    public function getBookingDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function reserved_tables()
    {
        return $this->belongsToMany(DiningTable::class,'bookings_tables','booking_id','table_id')
            ->withPivot(['booking_date','booking_time']);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function booking_status()
    {
        return $this->belongsTo(BookingStatus::class);
    }
}
