<?php

namespace Database\Seeders;

use App\Models\SliderSlide;
use Illuminate\Database\Seeder;

class SliderSlideSeeder extends Seeder
{
    public function run(): void
    {
        $slides = [
            [
                'title'       => 'Building Excellence Across Saudi Arabia.',
                'subtitle'    => 'We are SB Construction ~',
                'description' => 'From foundations to finishing, we deliver high-quality construction projects on time and within budget.',
                'button_text' => 'Contact Us',
                'button_url'  => '/contact',
                'image'       => '/wp-content/uploads/2023/07/Untitled-design-7.png',
                'sort_order'  => 1,
                'is_active'   => true,
            ],
            [
                'title'       => 'Your Vision. Our Craftsmanship.',
                'subtitle'    => 'We are SB Construction ~',
                'description' => 'Residential, commercial, and industrial construction built to the highest standards in Riyadh and beyond.',
                'button_text' => 'Contact Us',
                'button_url'  => '/contact',
                'image'       => '/wp-content/uploads/2023/07/Untitled-design-5.png',
                'sort_order'  => 2,
                'is_active'   => true,
            ],
        ];

        foreach ($slides as $slide) {
            SliderSlide::create($slide);
        }
    }
}
