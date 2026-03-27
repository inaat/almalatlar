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
                'tab_key'        => 'vision',
                'title'          => 'Our Vision',
                'title_ar'       => 'رؤيتنا',
                'subtitle'       => 'Our Vision',
                'subtitle_ar'    => 'رؤيتنا',
                'description'    => 'To be a trusted and leading construction company in Saudi Arabia, contributing to the Kingdom\'s built environment with quality, innovation, and commitment aligned with Vision 2030. We envision a future where every structure we build stands as a testament to our craftsmanship and dedication.',
                'description_ar' => 'أن نكون شركة إنشاء رائدة وموثوقة في المملكة العربية السعودية، نسهم في تطوير البيئة العمرانية بجودة وابتكار والتزام، منسجمين مع رؤية 2030. نتطلع إلى مستقبل تكون فيه كل منشأة نبنيها شاهداً على حرفيتنا وتفانينا.',
                'image'          => '/wp-content/uploads/2021/11/Untitled-design-8.png',
                'button_text'    => 'About Us',
                'button_text_ar' => 'من نحن',
                'button_url'     => '/about',
                'sort_order'     => 1,
            ],
            [
                'tab_key'        => 'goal',
                'title'          => 'Our Goal',
                'title_ar'       => 'هدفنا',
                'subtitle'       => 'Our Goal',
                'subtitle_ar'    => 'هدفنا',
                'description'    => 'To deliver outstanding construction projects through skilled teams, quality materials, and innovative methods. We aim to complete every project on time and within budget while maintaining the highest safety and quality standards, creating lasting value for our clients and the communities we build in.',
                'description_ar' => 'تقديم مشاريع إنشاء متميزة من خلال فرق عمل ماهرة ومواد عالية الجودة وأساليب مبتكرة. نسعى لإنجاز كل مشروع في الوقت المحدد وضمن الميزانية مع الحفاظ على أعلى معايير السلامة والجودة.',
                'image'          => '/wp-content/uploads/2021/11/Assets-3.png',
                'button_text'    => 'About Us',
                'button_text_ar' => 'من نحن',
                'button_url'     => '/about',
                'sort_order'     => 2,
            ],
            [
                'tab_key'        => 'values',
                'title'          => 'Our Values',
                'title_ar'       => 'قيمنا',
                'subtitle'       => 'Our Values',
                'subtitle_ar'    => 'قيمنا',
                'description'    => 'Commitment to quality in every project we undertake. Acting with integrity, honesty, and full transparency with our clients. Delivering on our promises and meeting deadlines. Prioritizing the safety of our workers and the communities around us. Believing in teamwork and continuous improvement.',
                'description_ar' => 'الالتزام بالجودة في كل مشروع نتولاه. التصرف بنزاهة وصدق وشفافية تامة مع عملائنا. الوفاء بوعودنا والالتزام بالمواعيد. إيلاء الأولوية لسلامة عمالنا والمجتمعات المحيطة بنا. الإيمان بروح الفريق والتحسين المستمر.',
                'image'          => '/wp-content/uploads/2021/11/Untitled-design-9.png',
                'button_text'    => 'About Us',
                'button_text_ar' => 'من نحن',
                'button_url'     => '/about',
                'sort_order'     => 3,
            ],
        ];

        foreach ($tabs as $tab) {
            AboutTab::create($tab);
        }
    }
}
