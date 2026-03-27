<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $fillable = ['label', 'label_ar', 'value', 'suffix', 'sort_order', 'is_active'];
}
