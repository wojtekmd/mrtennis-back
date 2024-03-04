<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament_id',
        'path',
    ];

    protected $casts = [
        'tournament_id' => 'int',
        'path' => 'string',
    ];
}
