<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_active',
        'in_menu',
        'is_custom',
        'is_editable',
        'route',
        'name',
        'desc'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'in_menu' => 'boolean',
        'is_custom' => 'boolean',
        'is_editable' => 'boolean',
        'route' => 'string',
        'name' => 'json',
        'desc' => 'string',
    ];

    public function elements(): HasMany
    {
        return $this->hasMany(PageElement::class);
    }
}
