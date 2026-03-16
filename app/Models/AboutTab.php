<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTab extends Model
{
    protected $fillable = ['tab_key', 'title', 'subtitle', 'description', 'image', 'button_text', 'button_url', 'sort_order'];
}
