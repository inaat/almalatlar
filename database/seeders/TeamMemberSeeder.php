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
                'name'         => 'Abdullah Al-Shahrani',
                'position'     => 'Founder & CEO',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team1.jpg',
                'description'  => 'With over 20 years of experience in the Saudi construction industry, Abdullah leads SB Construction with a focus on quality, client satisfaction, and sustainable growth.',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'name'         => 'Mohammed Al-Qahtani',
                'position'     => 'General Manager',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team2.jpg',
                'description'  => 'Mohammed oversees all day-to-day operations and project delivery, ensuring every SB Construction project meets our high standards of quality, safety, and client service.',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'name'         => 'Khalid Al-Dosari',
                'position'     => 'Head of Engineering',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team3.jpg',
                'description'  => 'Khalid leads our engineering team, bringing deep expertise in structural and civil engineering to ensure every project is designed and built to the highest technical standards.',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 3,
                'is_active'    => true,
            ],
            [
                'name'         => 'Sara Al-Harbi',
                'position'     => 'Business Development',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team5.jpg',
                'description'  => 'Sara drives business growth and client relationships, working closely with developers, government entities, and private clients to understand their needs and deliver tailored construction solutions.',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 4,
                'is_active'    => true,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::firstOrCreate(['name' => $member['name']], $member);
        }
    }
}
