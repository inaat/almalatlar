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
                'name'         => 'Ashish Sudra',
                'position'     => 'Founder & CEO',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team1.jpg',
                'description'  => 'Lead the team of passionate developers, designers and the strategists with a lot of thought and analysis come true!',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'name'         => 'Rachna Sheth',
                'position'     => 'Business Head',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team2.jpg',
                'description'  => 'Rachna joined IT Solutions in 2003 and worked in a variety of technical support roles before becoming VP of Network.',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'name'         => 'Tapak Meni',
                'position'     => 'President, Principal',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team3.jpg',
                'description'  => 'As VP of Sales and Marketing since 1999, Jim oversees all new business acquisition at IT Solutions.',
                'facebook_url' => '#',
                'twitter_url'  => '#',
                'dribbble_url' => '#',
                'sort_order'   => 3,
                'is_active'    => true,
            ],
            [
                'name'         => 'Ergi Laura',
                'position'     => 'Sales & Marketing',
                'image'        => 'https://almalath.com/wp-content/uploads/2021/10/team5.jpg',
                'description'  => 'Garrett serves as the lead VCIO (Virtual Chief Information Officer) to our clients and guides IT Solutions technology strategy.',
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
