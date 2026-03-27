<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutHistory extends Model
{
    protected $fillable = ['year', 'title', 'title_ar', 'description', 'description_ar', 'image', 'color', 'sort_order'];
}
