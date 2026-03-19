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
                'description' => 'To be a trusted and leading construction company in Saudi Arabia, contributing to the Kingdom\'s built environment with quality, innovation, and commitment aligned with Vision 2030. We envision a future where every structure we build stands as a testament to our craftsmanship and dedication.',
                'image'       => '/wp-content/uploads/2021/11/Untitled-design-8.png',
                'button_text' => 'About Us',
                'button_url'  => '/about',
                'sort_order'  => 1,
            ],
            [
                'tab_key'     => 'goal',
                'title'       => 'Our Goal',
                'subtitle'    => 'Our Goal',
                'description' => 'To deliver outstanding construction projects through skilled teams, quality materials, and innovative methods. We aim to complete every project on time and within budget while maintaining the highest safety and quality standards, creating lasting value for our clients and the communities we build in.',
                'image'       => '/wp-content/uploads/2021/11/Assets-3.png',
                'button_text' => 'About Us',
                'button_url'  => '/about',
                'sort_order'  => 2,
            ],
            [
                'tab_key'     => 'values',
                'title'       => 'Our Values',
                'subtitle'    => 'Our Values',
                'description' => 'Commitment to quality in every project we undertake. Acting with integrity, honesty, and full transparency with our clients. Delivering on our promises and meeting deadlines. Prioritizing the safety of our workers and the communities around us. Believing in teamwork and continuous improvement.',
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
