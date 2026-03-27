<?php

namespace Database\Seeders;

use App\Models\AboutHistory;
use Illuminate\Database\Seeder;

class AboutHistorySeeder extends Seeder
{
    public function run(): void
    {
        AboutHistory::truncate();

        $items = [
            [
                'year'           => '2010',
                'title'          => 'Company Founded',
                'title_ar'       => 'تأسيس الشركة',
                'description'    => 'SB Construction was established in Riyadh with a mission to deliver high-quality construction services across Saudi Arabia.',
                'description_ar' => 'تأسست إس بي للإنشاءات في الرياض بمهمة تقديم خدمات بناء عالية الجودة في أرجاء المملكة العربية السعودية.',
                'image'          => '/wp-content/uploads/2021/10/intime-01.jpg',
                'color'          => '#00C6FF',
                'sort_order'     => 1,
            ],
            [
                'year'           => '2013',
                'title'          => 'First Major Project',
                'title_ar'       => 'أول مشروع كبير',
                'description'    => 'Successfully delivered our first large-scale commercial building project in Riyadh, establishing our reputation for quality and reliability.',
                'description_ar' => 'أُنجز أول مشروع بناء تجاري واسع النطاق في الرياض بنجاح، مما رسّخ سمعتنا في الجودة والموثوقية.',
                'image'          => '/wp-content/uploads/2021/10/intime-04.jpg',
                'color'          => '#2093FF',
                'sort_order'     => 2,
            ],
            [
                'year'           => '2016',
                'title'          => 'Expanding Services',
                'title_ar'       => 'توسيع الخدمات',
                'description'    => 'Expanded our service offering to include fit-out, MEP, and infrastructure works, becoming a full-service construction contractor.',
                'description_ar' => 'وسّعنا نطاق خدماتنا ليشمل أعمال التشطيب والكهرومكانيكية والبنية التحتية، لنصبح مقاولاً شاملاً للخدمات الإنشائية.',
                'image'          => '/wp-content/uploads/2021/10/intime-07.jpg',
                'color'          => '#0D5BEE',
                'sort_order'     => 3,
            ],
            [
                'year'           => '2018',
                'title'          => '100+ Projects Completed',
                'title_ar'       => 'أكثر من 100 مشروع منجز',
                'description'    => 'Reached the milestone of over 100 successfully completed projects, spanning residential, commercial, and industrial sectors.',
                'description_ar' => 'بلغنا إنجاز أكثر من 100 مشروع ناجح يشمل القطاعات السكنية والتجارية والصناعية.',
                'image'          => '/wp-content/uploads/2021/10/team-06.jpg',
                'color'          => '#0925AA',
                'sort_order'     => 4,
            ],
            [
                'year'           => '2021',
                'title'          => 'Vision 2030 Alignment',
                'title_ar'       => 'الانسجام مع رؤية 2030',
                'description'    => 'Strengthened our focus on Vision 2030 projects, contributing to major development initiatives across the Kingdom.',
                'description_ar' => 'عزّزنا تركيزنا على مشاريع رؤية 2030، مساهمين في المبادرات التنموية الكبرى في أرجاء المملكة.',
                'image'          => '/wp-content/uploads/2021/10/team-08.jpg',
                'color'          => '#00C6FF',
                'sort_order'     => 5,
            ],
            [
                'year'           => '2024',
                'title'          => 'Award for Excellence',
                'title_ar'       => 'جائزة التميز',
                'description'    => 'Recognized for outstanding construction quality and client satisfaction with multiple industry awards and certifications.',
                'description_ar' => 'حصدنا عدة جوائز وشهادات صناعية تقديراً لجودة البناء الاستثنائية ورضا العملاء.',
                'image'          => '/wp-content/uploads/2021/10/team-07.jpg',
                'color'          => '#2093FF',
                'sort_order'     => 6,
            ],
        ];

        foreach ($items as $item) {
            AboutHistory::create($item);
        }
    }
}
