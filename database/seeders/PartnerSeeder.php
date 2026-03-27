<?php
namespace Database\Seeders;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder {
    public function run(): void {
        $partners = [
            ['name' => 'Cisco',          'logo' => '/wp-content/uploads/2023/07/ImgOne-removebg-preview.png',                                   'sort_order' => 1, 'is_active' => true],
            ['name' => 'Dell',           'logo' => '/wp-content/uploads/2023/07/Axis_Communications_logo.svg-removebg-preview.png',          'sort_order' => 2, 'is_active' => true],
            ['name' => 'HP',             'logo' => '/wp-content/uploads/2023/07/genetecweb_extrasmall-removebg-preview.png',                  'sort_order' => 3, 'is_active' => true],
            ['name' => 'Microsoft',      'logo' => '/wp-content/uploads/2023/07/misk-21-logo-light-1024x588-removebg-preview.png',            'sort_order' => 4, 'is_active' => true],
            ['name' => 'Fortinet',       'logo' => '/wp-content/uploads/2023/07/gaca_logo-removebg-preview-1.png',                            'sort_order' => 5, 'is_active' => true],
            ['name' => 'Axis',           'logo' => '/wp-content/uploads/2023/07/Axis_Communications_logo.svg-removebg-preview.png', 'sort_order' => 6, 'is_active' => true],
            ['name' => 'Genetec',        'logo' => '/wp-content/uploads/2023/07/genetecweb_extrasmall-removebg-preview.png', 'sort_order' => 7, 'is_active' => true],
        ];
        foreach ($partners as $p) { Partner::create($p); }
    }
}
