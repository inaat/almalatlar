<?php

namespace Database\Seeders;

use App\Models\SliderSlide;
use Illuminate\Database\Seeder;

class SliderSlideSeeder extends Seeder
{
    public function run(): void
    {
        SliderSlide::truncate();

        $slides = [
            [
                'title'          => 'Building Excellence Across Saudi Arabia.',
                'title_ar'       => 'نبني التميز في أرجاء المملكة العربية السعودية.',
                'subtitle'       => 'We are SB Construction ~',
                'subtitle_ar'    => 'نحن إس بي للإنشاءات ~',
                'description'    => 'From foundations to finishing, we deliver high-quality construction projects on time and within budget.',
                'description_ar' => 'من الأساسات حتى التشطيب، ننجز مشاريع بناء عالية الجودة في الوقت المحدد وضمن الميزانية.',
                'button_text'    => 'Contact Us',
                'button_text_ar' => 'تواصل معنا',
                'button_url'     => '/contact',
                'image'          => '/wp-content/uploads/2023/07/Untitled-design-5.png',
                'sort_order'     => 1,
                'is_active'      => true,
            ],
            [
                'title'          => 'Your Vision. Our Craftsmanship.',
                'title_ar'       => 'رؤيتك. حرفيتنا.',
                'subtitle'       => 'We are SB Construction ~',
                'subtitle_ar'    => 'نحن إس بي للإنشاءات ~',
                'description'    => 'Residential, commercial, and industrial construction built to the highest standards in Riyadh and beyond.',
                'description_ar' => 'إنشاءات سكنية وتجارية وصناعية وفق أعلى المعايير في الرياض وما يتخطى حدودها.',
                'button_text'    => 'Contact Us',
                'button_text_ar' => 'تواصل معنا',
                'button_url'     => '/contact',
                'image'          => '/wp-content/uploads/2023/07/Untitled-design-5.png',
                'sort_order'     => 2,
                'is_active'      => true,
            ],
        ];

        foreach ($slides as $slide) {
            SliderSlide::create($slide);
        }
    }
}
