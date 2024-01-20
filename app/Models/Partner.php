<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'order', 'name', 'img', 'desc'
    ];

    protected $casts = [
        'order' => 'integer',
        'name' => 'string',
        'img' => 'string',
        'desc' => 'string',
    ];
}
