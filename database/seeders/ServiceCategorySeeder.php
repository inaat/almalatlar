<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'       => 'IT Generated Solutions',
                'slug'       => 'it-generated-solutions',
                'icon_class' => 'flaticon flaticon-idea',
                'sort_order' => 1,
            ],
            [
                'name'       => 'Next Generation IT Services',
                'slug'       => 'next-generation-it-services',
                'icon_class' => 'flaticon flaticon-process',
                'sort_order' => 2,
            ],
            [
                'name'       => 'Consulting Services',
                'slug'       => 'consulting-services',
                'icon_class' => 'flaticon flaticon-best-seller',
                'sort_order' => 3,
            ],
            [
                'name'       => 'Low Current Services',
                'slug'       => 'low-current-services',
                'icon_class' => 'flaticon flaticon-cctv',
                'sort_order' => 4,
            ],
        ];

        foreach ($categories as $data) {
            ServiceCategory::create($data);
        }
    }
}
