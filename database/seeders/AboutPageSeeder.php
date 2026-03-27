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
                'title_ar'   => 'عملاؤنا',
                'slug'       => 'customers-clients',
                'content'    => 'SB Construction has proudly delivered projects for a diverse range of clients across Saudi Arabia, including government entities, private developers, and individual property owners. We build long-term relationships based on trust, transparency, and consistently high-quality results. Our client-first approach means we listen carefully, plan thoroughly, and execute with precision on every project.',
                'content_ar' => 'نفّذت إس بي للإنشاءات بفخر مشاريع لطيف واسع من العملاء في أرجاء المملكة العربية السعودية، يشمل الجهات الحكومية والمطورين الخاصين وأصحاب العقارات الأفراد. نبني علاقات طويلة الأمد قائمة على الثقة والشفافية والنتائج عالية الجودة باستمرار.',
                'sort_order' => 1,
            ],
            [
                'title'      => 'Our Partners',
                'title_ar'   => 'شركاؤنا',
                'slug'       => 'partners',
                'content'    => 'Strong partnerships are at the heart of what we do. SB Construction works with leading suppliers and subcontractors in the construction industry to ensure the best materials and specialist expertise are available on every project. Our network of trusted partners allows us to deliver comprehensive construction solutions from groundworks to final handover.',
                'content_ar' => 'الشراكات القوية هي جوهر ما نقوم به. تتعاون إس بي للإنشاءات مع كبار الموردين والمقاولين من الباطن في صناعة البناء لضمان توافر أفضل المواد والخبرات المتخصصة في كل مشروع.',
                'sort_order' => 2,
            ],
        ];

        foreach ($pages as $page) {
            AboutPage::create(array_merge($page, ['is_active' => true]));
        }
    }
}
