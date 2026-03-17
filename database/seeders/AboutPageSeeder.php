<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    public function run(): void
    {
        AboutPage::truncate();

        $pages = [
            [
                'title'      => 'Customers/Clients',
                'slug'       => 'customers-clients',
                'content'    => 'Al Malath Al Arabia is partner with industry leading vendors and have approach to deliver any kind of IT hardware & software. We can supply Desktops, Laptops Servers, Switches, Routers, storage, wireless access points, wireless access controllers soft & hard security equipment\'s from the well-know brands in the IT industry. We provide business applications like Microsoft 365,Power BI, Dynamics 365 Microsoft windows, Microsoft teams Azure as cloud and many more according to the customer requirements.',
                'sort_order' => 1,
            ],
            [
                'title'      => 'Our Partners',
                'slug'       => 'partners',
                'content'    => 'To provide customers with end-to-end outstanding solutions partnership with industry leaders vendors is vital. Al Malath Al Arabia is a partner with all the vendors, are important for most IT integrated solutions. Our value-added partners are as follows.',
                'sort_order' => 2,
            ],
          
        ];

        foreach ($pages as $page) {
            AboutPage::create(array_merge($page, ['is_active' => true]));
        }
    }
}
