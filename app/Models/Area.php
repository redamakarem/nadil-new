<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'governate_id',
    ];


    public function governate()
    {
        return $this->belongsTo(Governate::class);
    }
}
