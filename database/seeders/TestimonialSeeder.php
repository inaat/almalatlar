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
                'name'           => 'Faisal Al-Mutairi',
                'position'       => 'Villa Owner, Riyadh',
                'position_ar'    => 'مالك فيلا، الرياض',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/testimonial-01.jpg',
                'description'    => 'SB Construction delivered my villa project on time and to an exceptional standard. The team was professional, communicative, and the quality of work exceeded my expectations. I highly recommend them.',
                'description_ar' => 'أنجزت إس بي للإنشاءات مشروع فيلتي في الموعد المحدد وبمستوى استثنائي. كان الفريق محترفاً ومتواصلاً، وتجاوزت جودة العمل توقعاتي. أوصي بهم بشدة.',
                'sort_order'     => 1,
                'is_active'      => true,
            ],
            [
                'name'           => 'Ahmed Al-Rashidi',
                'position'       => 'Property Developer, Riyadh',
                'position_ar'    => 'مطور عقاري، الرياض',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/testimonial-03.jpg',
                'description'    => 'We have worked with SB Construction on multiple commercial projects and they consistently deliver. Their project management is excellent and they never compromise on quality or safety.',
                'description_ar' => 'تعاملنا مع إس بي للإنشاءات في مشاريع تجارية متعددة وهم دائماً ينجزون ما يعدون به. إدارة مشاريعهم ممتازة ولا يتنازلون قط عن الجودة أو السلامة.',
                'sort_order'     => 2,
                'is_active'      => true,
            ],
            [
                'name'           => 'Nasser Al-Ghamdi',
                'position'       => 'Facilities Manager',
                'position_ar'    => 'مدير مرافق',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/testimonial-02.jpg',
                'description'    => 'The fit-out work SB Construction carried out for our office was outstanding. Completed ahead of schedule, within budget, and the finish was exactly what we wanted. A truly reliable contractor.',
                'description_ar' => 'أعمال التشطيب التي نفذتها إس بي للإنشاءات في مكتبنا كانت رائعة. أُنجز العمل قبل الموعد المحدد وضمن الميزانية، والتشطيب كان بالضبط كما أردنا. مقاول يمكن الاعتماد عليه حقاً.',
                'sort_order'     => 3,
                'is_active'      => true,
            ],
        ];

        foreach ($items as $item) {
            Testimonial::firstOrCreate(['name' => $item['name']], $item);
        }
    }
}
