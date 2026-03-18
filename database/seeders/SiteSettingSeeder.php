<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'about_subtitle',         'value' => 'About Our Company ~',                    'type' => 'text'],
            ['key' => 'about_heading',          'value' => 'Choose The Best IT Service Company',      'type' => 'text'],
            ['key' => 'about_description',      'value' => 'Since its founding in 2011 Al Malath Al Arabia has grown to be one of the major IT solutions integrators in the Kingdom. Our most key strength is the quality of our team of seasoned experts with over 30 years in the IT space. We have a strong foundation built on legacy including specialties in IT Hardware, Software and Services, Business Concepts Development, and Consultancy. Striving for excellence is a vital part in any business. It involves putting quality into everything you do. That is why we are keen to deliver superior services that ensure our customers\' business success is fully maintained.', 'type' => 'text'],
            ['key' => 'about_description_2',    'value' => 'Since our inception, we have embarked on developing our activities with dedication and confidence to take up our position today as one of the largest companies in the Kingdom within the scope of IT integrated solutions and vehicle preparations. We have built our foundation on an ancient legacy of strong experience and multiple professional specialties in hardware, software, and services, developing business concepts and consultation.', 'type' => 'text'],
            ['key' => 'about_video_id',         'value' => 'SF4aHwxHtZ0',                            'type' => 'text'],
            ['key' => 'vision_heading',         'value' => 'vibrant society, thriving economy, ambitious nation', 'type' => 'text'],
            ['key' => 'vision_text',            'value' => 'To utilize advanced technology to help our customers extending their business, with added value to Saudi market and local community. To move in compliance with the kingdom\'s vision 2030', 'type' => 'text'],
            ['key' => 'goal_text',              'value' => 'To offer an innovative set of technical solutions and services that add value to us and our success partners through an ambitious and effective team, advanced technologies and modern products that maintain the path of stability and growth', 'type' => 'text'],
            ['key' => 'values_text',            'value' => 'Adopting the evolving new IT technologies. Acting with strong ethics, Honesty, and transparency. Acknowledging accountability, definite Promise to Clients. Believe in Teamwork passion and maintaining high Quality.', 'type' => 'text'],
            ['key' => 'phone',                  'value' => '',                       'type' => 'text'],
            ['key' => 'services_subheading',    'value' => '~ Our Awesome Services ~',                'type' => 'text'],
            ['key' => 'services_heading',       'value' => 'We are dedicated to serve you all time.', 'type' => 'text'],
            ['key' => 'clients_heading',        'value' => 'Join over +15,000 happy clients!',        'type' => 'text'],
            ['key' => 'industries_subheading',  'value' => '~ Why choose Us? ~',                      'type' => 'text'],
            ['key' => 'industries_heading',     'value' => 'We serve a wide variety of industries',   'type' => 'text'],
            ['key' => 'industries_description', 'value' => 'Below is just a small sample of some of the industries that we serve.', 'type' => 'text'],
            ['key' => 'cta_text',               'value' => 'You have better things to do than worry about IT for your small business. Let\'s Discuss about Project.', 'type' => 'text'],

            // Team section
            ['key' => 'team_subtitle', 'value' => 'Team Member',                                    'type' => 'text'],
            ['key' => 'team_heading',  'value' => 'Passionate Personalities, Versatile Brains',     'type' => 'text'],

            // Testimonials section
            ['key' => 'testimonials_subtitle', 'value' => 'Testimonials',                          'type' => 'text'],
            ['key' => 'testimonials_heading',  'value' => "Few of Our Client's feedback of users!", 'type' => 'text'],
            ['key' => 'testimonials_label',    'value' => 'Clients Reviews:',                       'type' => 'text'],

            // About page counters
            ['key' => 'counter_team',       'value' => '105',  'type' => 'text'],
            ['key' => 'counter_awards',     'value' => '15',   'type' => 'text'],
            ['key' => 'counter_projects',   'value' => '10',   'type' => 'text'],
            ['key' => 'counter_reviews',    'value' => '850',  'type' => 'text'],

            // Footer CTA bar
            ['key' => 'footer_cta_heading',     'value' => 'Looking for the Best IT Business Solutions?',                        'type' => 'text'],
            ['key' => 'footer_cta_description', 'value' => 'As a app web crawler expert, We will help to organize.',             'type' => 'text'],

            // Footer col 1
            ['key' => 'footer_tagline',         'value' => 'Adopting the evolving new IT technologies. Acting with strong ethics, Honesty, and transparency.', 'type' => 'text'],

            // Footer col 2 — contact info
            ['key' => 'address',                'value' => 'P.O. Box 12234 - Riyadh 2949 Kingdom of Saudi Arabia',              'type' => 'text'],
            ['key' => 'open_hours',             'value' => 'Mon – Sat: 8 am – 5 pm, Sunday: CLOSED',                            'type' => 'text'],

            // Footer col 3 — map
            ['key' => 'map_query',              'value' => 'P.O. Box 12234 - Riyadh 2949 Kingdom of Saudi Arabia',              'type' => 'text'],

            // Footer bottom bar
            ['key' => 'copyright',              'value' => 'Al Malath Al Arabia. All rights reserved. Design and Developed by <a href="https://abq.com.sa/">ABQ IT Company</a>', 'type' => 'html'],
            ['key' => 'social_facebook',        'value' => '#',                                                                   'type' => 'url'],
            ['key' => 'social_twitter',         'value' => '#',                                                                   'type' => 'url'],
            ['key' => 'social_dribbble',        'value' => '#',                                                                   'type' => 'url'],
            ['key' => 'social_behance',         'value' => '#',                                                                   'type' => 'url'],

            // Logos
            ['key' => 'site_logo',              'value' => '/wp-content/uploads/2021/11/web-logo.png',                         'type' => 'image'],
            ['key' => 'site_logo_footer',       'value' => '/wp-content/uploads/2021/11/web-logo1.png',                        'type' => 'image'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::create($setting);
        }
    }
}
