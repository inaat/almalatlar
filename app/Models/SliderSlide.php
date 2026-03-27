<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderSlide extends Model
{
    protected $fillable = ['title', 'title_ar', 'subtitle', 'subtitle_ar', 'description', 'description_ar', 'button_text', 'button_text_ar', 'button_url', 'image', 'sort_order', 'is_active'];
}
