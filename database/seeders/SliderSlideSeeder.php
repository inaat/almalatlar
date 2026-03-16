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
                'title'       => 'Prosper in this volatile market funding.',
                'subtitle'    => 'We are IT service agency ~',
                'description' => 'We place you at the centre of international networks to advance your strategic interests.',
                'button_text' => 'Contact Us',
                'button_url'  => '/contact',
                'image'       => '/wp-content/uploads/2023/07/Untitled-design-7.png',
                'sort_order'  => 1,
                'is_active'   => true,
            ],
            [
                'title'       => 'Think Big. We make IT, possible!',
                'subtitle'    => 'We are IT service agency ~',
                'description' => 'We place you at the centre of international networks to advance your strategic interests.',
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
