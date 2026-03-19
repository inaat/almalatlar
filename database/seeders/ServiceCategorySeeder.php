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
                'name'       => 'General Contracting',
                'slug'       => 'general-contracting',
                'icon_class' => 'flaticon flaticon-building',
                'sort_order' => 1,
            ],
            [
                'name'       => 'Fit-Out & Interior',
                'slug'       => 'fit-out-interior',
                'icon_class' => 'flaticon flaticon-idea',
                'sort_order' => 2,
            ],
            [
                'name'       => 'Infrastructure & Civil Works',
                'slug'       => 'infrastructure-civil-works',
                'icon_class' => 'flaticon flaticon-process',
                'sort_order' => 3,
            ],
            [
                'name'       => 'MEP Services',
                'slug'       => 'mep-services',
                'icon_class' => 'flaticon flaticon-settings',
                'sort_order' => 4,
            ],
        ];

        foreach ($categories as $data) {
            ServiceCategory::create($data);
        }
    }
}
