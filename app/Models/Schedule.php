<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;
    use \Spatie\Activitylog\Traits\LogsActivity;

    protected $fillable = [
        'name',
        'slot_length',
        'from_date',
        'to_date',
        'from_time',
        'to_time',
        'restaurant_id',
    ];
    protected $dates = ['deleted_at','updated_at','created_at'];


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }
}
