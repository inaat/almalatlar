<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderSlide extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'button_text', 'button_url', 'image', 'sort_order', 'is_active'];
}
