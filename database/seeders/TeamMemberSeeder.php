<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            [
                'name'           => 'Abdullah Al-Shahrani',
                'position'       => 'Founder & CEO',
                'position_ar'    => 'المؤسس والرئيس التنفيذي',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/team1.jpg',
                'description'    => 'With over 20 years of experience in the Saudi construction industry, Abdullah leads SB Construction with a focus on quality, client satisfaction, and sustainable growth.',
                'description_ar' => 'بخبرة تمتد لأكثر من 20 عاماً في صناعة البناء بالمملكة العربية السعودية، يقود عبدالله إس بي للإنشاءات بتركيز على الجودة ورضا العملاء والنمو المستدام.',
                'facebook_url'   => '#',
                'twitter_url'    => '#',
                'dribbble_url'   => '#',
                'sort_order'     => 1,
                'is_active'      => true,
            ],
            [
                'name'           => 'Mohammed Al-Qahtani',
                'position'       => 'General Manager',
                'position_ar'    => 'المدير العام',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/team2.jpg',
                'description'    => 'Mohammed oversees all day-to-day operations and project delivery, ensuring every SB Construction project meets our high standards of quality, safety, and client service.',
                'description_ar' => 'يشرف محمد على جميع العمليات اليومية وتسليم المشاريع، لضمان أن كل مشروع لإس بي يرقى إلى معاييرنا العالية من الجودة والسلامة وخدمة العملاء.',
                'facebook_url'   => '#',
                'twitter_url'    => '#',
                'dribbble_url'   => '#',
                'sort_order'     => 2,
                'is_active'      => true,
            ],
            [
                'name'           => 'Khalid Al-Dosari',
                'position'       => 'Head of Engineering',
                'position_ar'    => 'رئيس الهندسة',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/team3.jpg',
                'description'    => 'Khalid leads our engineering team, bringing deep expertise in structural and civil engineering to ensure every project is designed and built to the highest technical standards.',
                'description_ar' => 'يقود خالد فريقنا الهندسي، مستعيناً بخبرته العميقة في الهندسة الإنشائية والمدنية لضمان تصميم وبناء كل مشروع وفق أعلى المعايير التقنية.',
                'facebook_url'   => '#',
                'twitter_url'    => '#',
                'dribbble_url'   => '#',
                'sort_order'     => 3,
                'is_active'      => true,
            ],
            [
                'name'           => 'Sara Al-Harbi',
                'position'       => 'Business Development',
                'position_ar'    => 'تطوير الأعمال',
                'image'          => 'https://almalath.com/wp-content/uploads/2021/10/team5.jpg',
                'description'    => 'Sara drives business growth and client relationships, working closely with developers, government entities, and private clients to understand their needs and deliver tailored construction solutions.',
                'description_ar' => 'تقود سارة نمو الأعمال وعلاقات العملاء، متعاونةً مع المطورين والجهات الحكومية والعملاء الخاصين لفهم احتياجاتهم وتقديم حلول إنشائية مخصصة.',
                'facebook_url'   => '#',
                'twitter_url'    => '#',
                'dribbble_url'   => '#',
                'sort_order'     => 4,
                'is_active'      => true,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::firstOrCreate(['name' => $member['name']], $member);
        }
    }
}
