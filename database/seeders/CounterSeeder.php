<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run(): void
    {
        $counters = [
            ['label' => 'Years of Experience', 'label_ar' => 'سنوات الخبرة',       'value' => '14',  'suffix' => '+',  'sort_order' => 1, 'is_active' => true],
            ['label' => 'Projects Completed',  'label_ar' => 'مشروع منجز',          'value' => '200', 'suffix' => '+',  'sort_order' => 2, 'is_active' => true],
            ['label' => 'Satisfied Clients',   'label_ar' => 'عميل راضٍ',           'value' => '150', 'suffix' => '+',  'sort_order' => 3, 'is_active' => true],
            ['label' => 'Client Rating',       'label_ar' => 'تقييم العملاء',       'value' => '4.9', 'suffix' => '/5', 'sort_order' => 4, 'is_active' => true],
        ];

        foreach ($counters as $counter) {
            Counter::create($counter);
        }
    }
}
