<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name',              'value' => 'SB Construction',                        'type' => 'text'],
            ['key' => 'site_tagline',           'value' => 'Building Excellence Across Saudi Arabia', 'type' => 'text'],
            ['key' => 'about_subtitle',         'value' => 'About Our Company ~',                    'type' => 'text'],
            ['key' => 'about_heading',          'value' => 'Choose The Best Construction Company',   'type' => 'text'],
            ['key' => 'about_description',      'value' => 'SB Construction is a leading construction company based in Riyadh, Saudi Arabia, dedicated to delivering high-quality building and infrastructure projects. With a team of seasoned professionals and a commitment to excellence, we bring expertise across residential, commercial, and industrial construction. Our strength lies in our people, our precision, and our passion for building structures that stand the test of time.', 'type' => 'text'],
            ['key' => 'about_description_2',    'value' => 'Since our establishment, SB Construction has built a solid reputation grounded in integrity, craftsmanship, and client satisfaction. We combine modern construction techniques with deep local knowledge to deliver projects on time and within budget. From foundations to finishing, we uphold the highest standards at every stage of the build.', 'type' => 'text'],
            ['key' => 'about_video_id',         'value' => 'SF4aHwxHtZ0',                            'type' => 'text'],
            ['key' => 'vision_heading',         'value' => 'Building a better tomorrow for Saudi Arabia', 'type' => 'text'],
            ['key' => 'vision_text',            'value' => 'To be a trusted construction partner that contributes to the growth and development of Saudi Arabia\'s built environment, aligned with the ambitions of Vision 2030.', 'type' => 'text'],
            ['key' => 'goal_text',              'value' => 'To deliver outstanding construction projects through skilled teams, quality materials, and innovative methods — creating lasting value for our clients and the communities we build in.', 'type' => 'text'],
            ['key' => 'values_text',            'value' => 'Commitment to quality in every project. Acting with integrity, honesty, and transparency. Delivering on our promises to clients. Believing in teamwork, safety, and continuous improvement.', 'type' => 'text'],
            ['key' => 'phone',                  'value' => '+966 54 284 7477',                        'type' => 'text'],
            ['key' => 'contact_email',          'value' => 'info@sbconstructionsa.com',               'type' => 'text'],
            ['key' => 'cr_number',              'value' => '7048793793',                              'type' => 'text'],
            ['key' => 'services_subheading',    'value' => '~ Our Construction Services ~',           'type' => 'text'],
            ['key' => 'services_heading',       'value' => 'We build with quality and precision.',    'type' => 'text'],
            ['key' => 'clients_heading',        'value' => 'Trusted by hundreds of satisfied clients!', 'type' => 'text'],
            ['key' => 'industries_subheading',  'value' => '~ Why choose Us? ~',                      'type' => 'text'],
            ['key' => 'industries_heading',     'value' => 'We build across a wide range of sectors', 'type' => 'text'],
            ['key' => 'industries_description', 'value' => 'From residential villas to large-scale commercial and industrial projects, we have the expertise to deliver.', 'type' => 'text'],
            ['key' => 'cta_text',               'value' => 'Have a construction project in mind? Let\'s discuss how SB Construction can bring your vision to life.', 'type' => 'text'],

            // Team section
            ['key' => 'team_subtitle', 'value' => 'Our Team',                                        'type' => 'text'],
            ['key' => 'team_heading',  'value' => 'Skilled Professionals, Proven Results',            'type' => 'text'],

            // Testimonials section
            ['key' => 'testimonials_subtitle', 'value' => 'Testimonials',                            'type' => 'text'],
            ['key' => 'testimonials_heading',  'value' => "What our clients say about us!",           'type' => 'text'],
            ['key' => 'testimonials_label',    'value' => 'Client Reviews:',                          'type' => 'text'],

            // About page counters
            ['key' => 'counter_team',       'value' => '105',  'type' => 'text'],
            ['key' => 'counter_awards',     'value' => '15',   'type' => 'text'],
            ['key' => 'counter_projects',   'value' => '10',   'type' => 'text'],
            ['key' => 'counter_reviews',    'value' => '850',  'type' => 'text'],

            // Footer CTA bar
            ['key' => 'footer_cta_heading',     'value' => 'Looking for a Reliable Construction Partner?',                         'type' => 'text'],
            ['key' => 'footer_cta_description', 'value' => 'SB Construction delivers quality projects on time and within budget. Let\'s build something great together.', 'type' => 'text'],

            // Footer col 1
            ['key' => 'footer_tagline',         'value' => 'Committed to quality construction. Acting with integrity, honesty, and transparency.', 'type' => 'text'],

            // Footer col 2 — contact info
            ['key' => 'address',                'value' => 'Al Olaya Street, Riyadh',                'type' => 'text'],
            ['key' => 'open_hours',             'value' => 'Mon – Fri: 8AM – 6PM',                   'type' => 'text'],

            // Footer col 3 — map
            ['key' => 'map_query',              'value' => 'Al Olaya Street, Riyadh',                'type' => 'text'],

            // Footer bottom bar
            ['key' => 'copyright',              'value' => 'SB Construction. All rights reserved. Design and Developed by <a href="https://abq.com.sa/">ABQ IT Company</a>', 'type' => 'html'],
            ['key' => 'social_facebook',        'value' => '#',                                       'type' => 'url'],
            ['key' => 'social_twitter',         'value' => '#',                                       'type' => 'url'],
            ['key' => 'social_dribbble',        'value' => '#',                                       'type' => 'url'],
            ['key' => 'social_behance',         'value' => '#',                                       'type' => 'url'],

            // Logos
            ['key' => 'site_logo',              'value' => '/wp-content/uploads/2021/11/web-logo.png',  'type' => 'image'],
            ['key' => 'site_logo_footer',       'value' => '/wp-content/uploads/2021/11/web-logo1.png', 'type' => 'image'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::create($setting);
        }
    }
}
