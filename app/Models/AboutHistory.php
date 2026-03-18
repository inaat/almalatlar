<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutHistory extends Model
{
    protected $fillable = ['year', 'title', 'description', 'image', 'color', 'sort_order'];
}
