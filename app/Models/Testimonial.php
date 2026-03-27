<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name', 'position', 'position_ar', 'image', 'description', 'description_ar',
        'sort_order', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];
}
