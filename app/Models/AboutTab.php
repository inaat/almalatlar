<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTab extends Model
{
    protected $fillable = ['tab_key', 'title', 'title_ar', 'subtitle', 'subtitle_ar', 'description', 'description_ar', 'image', 'button_text', 'button_text_ar', 'button_url', 'sort_order'];
}
