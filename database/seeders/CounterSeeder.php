<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    public function run(): void
    {
        $counters = [
            ['label' => 'Year of establishment',           'value' => '2003', 'suffix' => null,  'sort_order' => 1, 'is_active' => true],
            ['label' => 'Of customers worldwide',          'value' => '1.5',  'suffix' => 'k+',  'sort_order' => 2, 'is_active' => true],
            ['label' => 'Countries with active client base','value' => '14',  'suffix' => '+',   'sort_order' => 3, 'is_active' => true],
            ['label' => 'Customer rating',                 'value' => '4.9',  'suffix' => '/5',  'sort_order' => 4, 'is_active' => true],
        ];

        foreach ($counters as $counter) {
            Counter::create($counter);
        }
    }
}
