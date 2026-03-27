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

            // ── Arabic (_ar) translations ─────────────────────────────────────
            ['key' => 'site_name_ar',              'value' => 'إس بي للإنشاءات',                          'type' => 'text'],
            ['key' => 'site_tagline_ar',           'value' => 'نبني التميز في أرجاء المملكة العربية السعودية', 'type' => 'text'],
            ['key' => 'about_subtitle_ar',         'value' => 'عن شركتنا ~',                              'type' => 'text'],
            ['key' => 'about_heading_ar',          'value' => 'اختر أفضل شركة إنشاءات',                   'type' => 'text'],
            ['key' => 'about_description_ar',      'value' => 'إس بي للإنشاءات شركة رائدة في مجال البناء والإنشاء تتخذ من الرياض مقراً لها، وتلتزم بتقديم مشاريع بناء وبنية تحتية عالية الجودة. بفريق من المتخصصين ذوي الخبرة والكفاءة، نقدم خبرتنا في مجالات البناء السكني والتجاري والصناعي. قوتنا تكمن في كفاءة فريقنا، ودقة عملنا، وشغفنا ببناء منشآت تصمد أمام اختبار الزمن.', 'type' => 'text'],
            ['key' => 'about_description_2_ar',   'value' => 'منذ تأسيسها، بنت إس بي للإنشاءات سمعة راسخة تقوم على النزاهة والحرفية ورضا العملاء. نجمع بين أحدث تقنيات البناء والمعرفة المحلية العميقة لإنجاز المشاريع في الوقت المحدد وضمن الميزانية المرصودة. من الأساسات حتى التشطيب، نحافظ على أعلى المعايير في كل مرحلة من مراحل البناء.', 'type' => 'text'],
            ['key' => 'vision_heading_ar',         'value' => 'نبني غداً أفضل للمملكة العربية السعودية', 'type' => 'text'],
            ['key' => 'vision_text_ar',            'value' => 'أن نكون شريكاً موثوقاً في مجال الإنشاء يسهم في تطوير البيئة العمرانية في المملكة العربية السعودية بجودة وابتكار والتزام، منسجمين مع طموحات رؤية 2030.', 'type' => 'text'],
            ['key' => 'goal_text_ar',              'value' => 'تقديم مشاريع إنشاء متميزة من خلال فرق عمل ماهرة ومواد عالية الجودة وأساليب مبتكرة، مما يخلق قيمة دائمة لعملائنا والمجتمعات التي نبني فيها.', 'type' => 'text'],
            ['key' => 'values_text_ar',            'value' => 'الالتزام بالجودة في كل مشروع. التصرف بنزاهة وصدق وشفافية. الوفاء بوعودنا للعملاء. الإيمان بروح الفريق والسلامة والتحسين المستمر.', 'type' => 'text'],
            ['key' => 'services_subheading_ar',    'value' => '~ خدماتنا الإنشائية ~',                   'type' => 'text'],
            ['key' => 'services_heading_ar',       'value' => 'نبني بجودة ودقة.',                         'type' => 'text'],
            ['key' => 'clients_heading_ar',        'value' => 'يثق بنا المئات من العملاء الراضين!',       'type' => 'text'],
            ['key' => 'industries_subheading_ar',  'value' => '~ لماذا تختارنا؟ ~',                       'type' => 'text'],
            ['key' => 'industries_heading_ar',     'value' => 'نبني في مجموعة واسعة من القطاعات',         'type' => 'text'],
            ['key' => 'industries_description_ar', 'value' => 'من الفلل السكنية إلى المشاريع التجارية والصناعية الكبرى، لدينا الخبرة اللازمة للتنفيذ.', 'type' => 'text'],
            ['key' => 'cta_text_ar',               'value' => 'هل لديك مشروع إنشائي في ذهنك؟ دعنا نناقش كيف يمكن لإس بي للإنشاءات أن تحوّل رؤيتك إلى واقع.', 'type' => 'text'],
            ['key' => 'team_subtitle_ar',          'value' => 'فريقنا',                                   'type' => 'text'],
            ['key' => 'team_heading_ar',           'value' => 'محترفون مهرة ونتائج موثوقة',               'type' => 'text'],
            ['key' => 'testimonials_subtitle_ar',  'value' => 'آراء العملاء',                             'type' => 'text'],
            ['key' => 'testimonials_heading_ar',   'value' => 'ماذا يقول عملاؤنا عنا!',                  'type' => 'text'],
            ['key' => 'testimonials_label_ar',     'value' => 'تقييمات العملاء:',                         'type' => 'text'],
            ['key' => 'footer_cta_heading_ar',     'value' => 'هل تبحث عن شريك إنشاء موثوق؟',           'type' => 'text'],
            ['key' => 'footer_cta_description_ar', 'value' => 'إس بي للإنشاءات تنجز مشاريع عالية الجودة في الوقت المحدد وضمن الميزانية. لنبني معاً شيئاً رائعاً.', 'type' => 'text'],
            ['key' => 'footer_tagline_ar',         'value' => 'ملتزمون بجودة البناء. نتصرف بنزاهة وصدق وشفافية.', 'type' => 'text'],
            ['key' => 'address_ar',                'value' => 'شارع العليا، الرياض',                      'type' => 'text'],
            ['key' => 'open_hours_ar',             'value' => 'الاثنين – الجمعة: 8 صباحاً – 6 مساءً',   'type' => 'text'],
            ['key' => 'copyright_ar',              'value' => 'إس بي للإنشاءات. جميع الحقوق محفوظة. تصميم وتطوير <a href="https://abq.com.sa/">شركة ABQ للتقنية</a>', 'type' => 'html'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::create($setting);
        }
    }
}
