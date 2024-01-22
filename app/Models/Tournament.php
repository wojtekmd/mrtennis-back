<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'desc', 'tournament_date', 'tournament_place', 'tournament_img', 'max_participants'
    ];

    protected $casts = [
        'name' => 'json',
        'desc' => 'json',
        'tournament_date' => 'string',
        'tournament_place' => 'string',
        'tournament_img' => 'string',
        'max_participants' => 'integer',
    ];
}
