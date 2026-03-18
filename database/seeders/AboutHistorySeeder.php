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
                'year'        => '2010',
                'title'       => 'Started business',
                'description' => 'We partner with you to enable your technology so you focus on your organization\'s mission leverage our talent.',
                'image'       => '/wp-content/uploads/2021/10/intime-01.jpg',
                'color'       => '#00C6FF',
                'sort_order'  => 1,
            ],
            [
                'year'        => '2012',
                'title'       => 'Survival during wartime',
                'description' => 'A People Ops leader who is committed to the growth and development of leaders.',
                'image'       => '/wp-content/uploads/2021/10/intime-04.jpg',
                'color'       => '#2093FF',
                'sort_order'  => 2,
            ],
            [
                'year'        => '2016',
                'title'       => 'Crisis and opportunity',
                'description' => 'Our support works around the clock to ensure your work is secure and monitored safely.',
                'image'       => '/wp-content/uploads/2021/10/intime-07.jpg',
                'color'       => '#0D5BEE',
                'sort_order'  => 3,
            ],
            [
                'year'        => '2017',
                'title'       => '50+ Branches',
                'description' => 'We cross industries and provide services to almost every business either as a co-managed or supplemental asset.',
                'image'       => '/wp-content/uploads/2021/10/team-06.jpg',
                'color'       => '#0925AA',
                'sort_order'  => 4,
            ],
            [
                'year'        => '2019',
                'title'       => '100+ Branches',
                'description' => 'Whether providing consulting expertise on a specific vendor technology, strategizing on IT budget, providing a security.',
                'image'       => '/wp-content/uploads/2021/10/team-08.jpg',
                'color'       => '#00C6FF',
                'sort_order'  => 5,
            ],
            [
                'year'        => '2021',
                'title'       => 'Get Award',
                'description' => 'Our people are held to the highest level accountability to ensure you are always satisfied with your results.',
                'image'       => '/wp-content/uploads/2021/10/team-07.jpg',
                'color'       => '#2093FF',
                'sort_order'  => 6,
            ],
        ];

        foreach ($items as $item) {
            AboutHistory::create($item);
        }
    }
}
