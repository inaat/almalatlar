<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['slug', 'name', 'content', 'image', 'icon_class', 'sort_order', 'is_active'];
}
