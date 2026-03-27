<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name', 'position', 'position_ar', 'image', 'description', 'description_ar',
        'facebook_url', 'twitter_url', 'dribbble_url',
        'sort_order', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];
}
