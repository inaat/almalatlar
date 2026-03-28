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
                'name_ar'    => 'المقاولات العامة',
                'slug'       => 'general-contracting',
                'icon_class' => 'flaticon flaticon-home',
                'sort_order' => 1,
            ],
            [
                'name'       => 'Fit-Out & Interior',
                'name_ar'    => 'التشطيب والتصميم الداخلي',
                'slug'       => 'fit-out-interior',
                'icon_class' => 'flaticon flaticon-sketch',
                'sort_order' => 2,
            ],
            [
                'name'       => 'Infrastructure & Civil Works',
                'name_ar'    => 'البنية التحتية والأعمال المدنية',
                'slug'       => 'infrastructure-civil-works',
                'icon_class' => 'flaticon flaticon-operation',
                'sort_order' => 3,
            ],
            [
                'name'       => 'MEP Services',
                'name_ar'    => 'خدمات الكهرباء والسباكة والتكييف',
                'slug'       => 'mep-services',
                'icon_class' => 'flaticon flaticon-settings',
                'sort_order' => 4,
            ],
        ];

        foreach ($categories as $data) {
            ServiceCategory::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}
