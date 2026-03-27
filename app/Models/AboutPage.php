<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $fillable = ['title', 'title_ar', 'slug', 'content', 'content_ar', 'sort_order', 'is_active'];
}
