<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['category_id', 'title', 'title_ar', 'slug', 'description', 'description_ar', 'content', 'content_ar', 'icon_class', 'image', 'sort_order', 'is_active'];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
}
