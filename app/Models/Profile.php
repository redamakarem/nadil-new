<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'dob',
    'email',
    'phone',
    'gender',
    'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getInitialsAttribute(): string
    {
        $names = collect(explode(' ', $this->name));
        $letters = substr($names->first(),0,1) . substr($names->last(),0,1);
        return strtoupper($letters);
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->dob)->age;   
    }
}
