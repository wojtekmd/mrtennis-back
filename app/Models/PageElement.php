<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'is_active',
        'slug',
        'content',
    ];

    protected $casts = [
        'page_id' => 'integer',
        'is_active' => 'boolean',
        'slug' => 'string',
        'content' => 'json',
    ];
}
