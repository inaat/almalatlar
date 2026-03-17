<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        // IT Hardware & Software
        $hardwareName = 'IT Hardware & Software';
        $hardwareContent = 'Al Malath Al Arabia is partner with industry leading vendors and have approach to deliver any kind of IT hardware & software. We can supply Desktops, Laptops Servers, Switches, Routers, storage, wireless access points, wireless access controllers soft & hard security equipment\'s from the well-know brands in the IT industry. We provide business applications like Microsoft 365, Power BI, Dynamics 365, Microsoft Windows, Microsoft Teams, Azure as cloud and many more according to the customer requirements.';

        Product::create([
            'name'       => $hardwareName,
            'slug'       => Str::slug($hardwareName),
            'content'    => $hardwareContent,
            'image'      => 'https://almalath.com/wp-content/uploads/2023/08/Assets-9-600x420.png',
            'sort_order' => 1,
        ]);

        // IT Passive Equipment
        $passiveName = 'IT Passive Equipment';
        $passiveContent = 'Al-Malaz Arabia Company specializes in supplying a wide range of artificially raised equipment such as raised data center flooring, electrical strips of various sizes, UTP and fiber cables, smart and regular patch panels, binding wires, and DC wires. We supply synthetic equipment from 3M, Corning, ComCub, R&M, Nexans, Wavyo, Lindner, Eaton, Saudi Middle East Fiber Optic Cable Manufacturing Company, Riyadh Cables, Datwyler, and many other similar product providers.';

        Product::create([
            'name'       => $passiveName,
            'slug'       => Str::slug($passiveName),
            'content'    => $passiveContent,
            'image'      => 'https://almalath.com/wp-content/uploads/2023/08/IT-Passive-Equipment-600x473.jpg',
            'sort_order' => 2,
        ]);
    }
}