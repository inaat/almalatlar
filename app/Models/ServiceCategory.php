<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = ['name', 'slug', 'icon_class', 'sort_order', 'is_active'];

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id')->where('is_active', true)->orderBy('sort_order');
    }
}
