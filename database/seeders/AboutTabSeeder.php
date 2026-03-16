<?php

namespace Database\Seeders;

use App\Models\AboutTab;
use Illuminate\Database\Seeder;

class AboutTabSeeder extends Seeder
{
    public function run(): void
    {
        $tabs = [
            [
                'tab_key'     => 'vision',
                'title'       => 'Our Vision',
                'subtitle'    => 'Our Vision',
                'description' => 'To utilize advanced technology to help our customers extending their business, with added value to Saudi market and local community. To move in compliance with the kingdom\'s vision 2030. vibrant society, thriving economy, ambitious nation.',
                'image'       => '/wp-content/uploads/2021/11/Untitled-design-8.png',
                'button_text' => 'About Us',
                'button_url'  => '/about',
                'sort_order'  => 1,
            ],
            [
                'tab_key'     => 'goal',
                'title'       => 'Our Goal',
                'subtitle'    => 'Our Goal',
                'description' => 'To offer an innovative set of technical solutions and services that add value to us and our success partners through an ambitious and effective team, advanced technologies and modern products that maintain the path of stability and growth.',
                'image'       => '/wp-content/uploads/2021/11/Assets-3.png',
                'button_text' => 'About Us',
                'button_url'  => '/about',
                'sort_order'  => 2,
            ],
            [
                'tab_key'     => 'values',
                'title'       => 'Our Values',
                'subtitle'    => 'Our Values',
                'description' => 'Adopting the evolving new IT technologies. Acting with strong ethics, Honesty, and transparency. Acknowledging accountability, definite Promise to Clients. Believe in Teamwork passion and maintaining high Quality.',
                'image'       => '/wp-content/uploads/2021/11/Untitled-design-9.png',
                'button_text' => 'About Us',
                'button_url'  => '/about',
                'sort_order'  => 3,
            ],
        ];

        foreach ($tabs as $tab) {
            AboutTab::create($tab);
        }
    }
}
