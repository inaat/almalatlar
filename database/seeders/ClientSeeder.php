<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            ['name' => 'Client 1',            'logo' => '/wp-content/uploads/2023/07/ImgOne-removebg-preview.png',                               'sort_order' => 1, 'is_active' => true],
            ['name' => 'Axis Communications', 'logo' => '/wp-content/uploads/2023/07/Axis_Communications_logo.svg-removebg-preview.png',         'sort_order' => 2, 'is_active' => true],
            ['name' => 'Genetec',             'logo' => '/wp-content/uploads/2023/07/genetecweb_extrasmall-removebg-preview.png',                 'sort_order' => 3, 'is_active' => true],
            ['name' => 'Misk',                'logo' => '/wp-content/uploads/2023/07/misk-21-logo-light-1024x588-removebg-preview.png',          'sort_order' => 4, 'is_active' => true],
            ['name' => 'GACA',                'logo' => '/wp-content/uploads/2023/07/gaca_logo-removebg-preview-1.png',                          'sort_order' => 5, 'is_active' => true],
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
