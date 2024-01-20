<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'about', 'contact', 'social_media', 'open_hours'
    ];

    protected $casts = [
        'about' => 'json',
        'contact' => 'json',
        'social_media' => 'json',
        'open_hours' => 'json',
    ];
}
