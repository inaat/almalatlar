<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'name'        => 'Alina Lora',
                'position'    => 'Former Manager, ITSoft',
                'image'       => 'https://almalath.com/wp-content/uploads/2021/10/testimonial-01.jpg',
                'description' => 'Working with several word press themes and templates the last years, I only can say this is the best in every level. I use it for my company and the reviews that I have already are all excellent.',
                'sort_order'  => 1,
                'is_active'   => true,
            ],
            [
                'name'        => 'Rohan Jho',
                'position'    => 'Former Manager, ITSoft',
                'image'       => 'https://almalath.com/wp-content/uploads/2021/10/testimonial-03.jpg',
                'description' => 'This is one of the BEST THEMES I have ever worked with. The extra bells and whistles added to it are amazing. Elementor features add extra flavor. The customer support is very responsive.',
                'sort_order'  => 2,
                'is_active'   => true,
            ],
            [
                'name'        => 'Donald Frew',
                'position'    => 'Former Manager, ITSoft',
                'image'       => 'https://almalath.com/wp-content/uploads/2021/10/testimonial-02.jpg',
                'description' => 'Great theme, one of the best I have worked with in a while. Full featured and great support for the minor issues I had which were really my not being skilled/experienced enough.',
                'sort_order'  => 3,
                'is_active'   => true,
            ],
        ];

        foreach ($items as $item) {
            Testimonial::firstOrCreate(['name' => $item['name']], $item);
        }
    }
}
