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
                'title'      => 'Our Clients',
                'slug'       => 'customers-clients',
                'content'    => 'SB Construction has proudly delivered projects for a diverse range of clients across Saudi Arabia, including government entities, private developers, and individual property owners. We build long-term relationships based on trust, transparency, and consistently high-quality results. Our client-first approach means we listen carefully, plan thoroughly, and execute with precision on every project.',
                'sort_order' => 1,
            ],
            [
                'title'      => 'Our Partners',
                'slug'       => 'partners',
                'content'    => 'Strong partnerships are at the heart of what we do. SB Construction works with leading suppliers and subcontractors in the construction industry to ensure the best materials and specialist expertise are available on every project. Our network of trusted partners allows us to deliver comprehensive construction solutions from groundworks to final handover.',
                'sort_order' => 2,
            ],
        ];

        foreach ($pages as $page) {
            AboutPage::create(array_merge($page, ['is_active' => true]));
        }
    }
}
