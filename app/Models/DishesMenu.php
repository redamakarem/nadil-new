<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishesMenu extends Model
{
    use HasFactory;

    protected $table = 'catalogues';
    protected $fillable = ['name','restaurant_id','from_date','to_date','from_time','to_time','name_ar','is_active'];
    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date'
    ];

//    public function getFromDateAttribute($value)
//    {
//        try {
//            return new DateTime($value);} catch (\Exception $e) {
//            $e.getMessage();
//        }
//    }

    public function getFromTimeAttribute($value)
    {

        return Carbon::parse($value)->format('H:i');
    }


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }


    public function dishes()
    {
        return $this->hasMany(Dish::class,'menu_id','id');
    }
    public function categories()
    {
        return $this->hasMany(DishesCategory::class,'catalogue_id','id');
    }
}
