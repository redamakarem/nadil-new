<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'slug',
        'content_en',
        'content_ar',
    ];
    use HasFactory;
}
