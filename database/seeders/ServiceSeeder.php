<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            // ── General Contracting ───────────────────────────────────────────
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Residential Construction',
                'title_ar'      => 'البناء السكني',
                'slug'          => 'residential-construction',
                'image'         => '/wp-content/uploads/2021/09/it-infrastructure-services-1.png',
                'icon_class'    => 'flaticon flaticon-building',
                'sort_order'    => 1,
                'description'   => 'SB Construction delivers high-quality residential projects including villas, apartments, and housing complexes. We manage every phase from design coordination and foundations through to final handover, ensuring homes that are safe, durable, and beautifully finished.',
                'description_ar'=> 'تنفذ إس بي للإنشاءات مشاريع سكنية عالية الجودة تشمل الفلل والشقق والمجمعات السكنية، وتدير كل مرحلة من مراحل البناء لضمان منازل آمنة ومتينة وذات تشطيب راقٍ.',
            ],
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Commercial Construction',
                'title_ar'      => 'البناء التجاري',
                'slug'          => 'commercial-construction',
                'image'         => '/wp-content/uploads/2023/08/IT-Managed-Services-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-layers',
                'sort_order'    => 2,
                'description'   => 'From office buildings and retail centres to hotels and mixed-use developments, we bring the expertise and capacity to deliver complex commercial projects on time and within budget across Saudi Arabia.',
                'description_ar'=> 'من المباني الإدارية والمراكز التجارية إلى الفنادق والمشاريع متعددة الاستخدامات، نمتلك الخبرة والقدرة على تنفيذ مشاريع تجارية معقدة في الوقت المحدد وضمن الميزانية المرصودة.',
            ],
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Industrial Construction',
                'title_ar'      => 'البناء الصناعي',
                'slug'          => 'industrial-construction',
                'image'         => '/wp-content/uploads/2023/08/Data-Center-Solutions-Services-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-settings',
                'sort_order'    => 3,
                'description'   => 'We construct warehouses, factories, and industrial facilities built to withstand demanding operational environments. Our industrial projects meet all regulatory standards with rigorous quality control at every stage.',
                'description_ar'=> 'نشيد المستودعات والمصانع والمنشآت الصناعية المصممة لتحمّل بيئات التشغيل الصعبة، مع الالتزام بجميع المعايير التنظيمية وضبط الجودة في كل مرحلة.',
            ],
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Project Management',
                'title_ar'      => 'إدارة المشاريع',
                'slug'          => 'project-management',
                'image'         => '/wp-content/uploads/2023/08/IT-Service-Management-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-process',
                'sort_order'    => 4,
                'description'   => 'Our experienced project managers oversee all aspects of your construction project — from planning, procurement, and scheduling to site supervision and final delivery — ensuring everything runs smoothly and efficiently.',
                'description_ar'=> 'يشرف مديرو مشاريعنا المتمرسون على جميع جوانب مشروعك الإنشائي، من التخطيط والمشتريات والجدولة الزمنية إلى الإشراف الميداني والتسليم النهائي.',
            ],

            // ── Fit-Out & Interior ────────────────────────────────────────────
            [
                'category_slug' => 'fit-out-interior',
                'title'         => 'Office Fit-Out',
                'title_ar'      => 'تشطيب المكاتب',
                'slug'          => 'office-fit-out',
                'image'         => '/wp-content/uploads/2023/08/Business-Process-Automation-1000x570.png',
                'icon_class'    => 'flaticon flaticon-idea',
                'sort_order'    => 1,
                'description'   => 'We transform empty shells into fully functional, professionally designed office spaces. SB Construction handles all elements of office fit-out including partitioning, flooring, ceilings, lighting, and network infrastructure coordination.',
                'description_ar'=> 'نحوّل الفراغات الخام إلى مساحات مكتبية وظيفية ومصممة باحترافية، وتشمل خدمتنا جميع عناصر التشطيب من التقسيمات والأرضيات والأسقف والإضاءة وتنسيق البنية التحتية للشبكات.',
            ],
            [
                'category_slug' => 'fit-out-interior',
                'title'         => 'Retail Fit-Out',
                'title_ar'      => 'تشطيب المحلات التجارية',
                'slug'          => 'retail-fit-out',
                'image'         => '/wp-content/uploads/2023/08/Call-Center-Services-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-best-seller',
                'sort_order'    => 2,
                'description'   => 'Our retail fit-out service creates engaging, brand-aligned spaces that enhance the customer experience. We work with retail brands and developers to deliver shopfronts, showrooms, and outlet spaces to the highest finish standards.',
                'description_ar'=> 'تُنشئ خدمة تشطيب التجزئة لدينا مساحات جذابة تعكس هوية العلامة التجارية وتعزز تجربة العملاء، بتشطيبات بأعلى مستويات الجودة.',
            ],
            [
                'category_slug' => 'fit-out-interior',
                'title'         => 'Villa & Apartment Finishing',
                'title_ar'      => 'تشطيب الفلل والشقق',
                'slug'          => 'villa-apartment-finishing',
                'image'         => '/wp-content/uploads/2023/08/IT-Resource-Outsourcing-1000x570.png',
                'icon_class'    => 'flaticon flaticon-house',
                'sort_order'    => 3,
                'description'   => 'We provide premium residential finishing services including tiling, plastering, painting, joinery, kitchen fit-out, and bathroom installations — delivering homes that are move-in ready to the exact specification of each client.',
                'description_ar'=> 'نقدم خدمات تشطيب سكنية فاخرة تشمل التبليط والمجس والدهان والنجارة وتجهيز المطابخ والحمامات، لتسليم منازل جاهزة للسكن وفق مواصفات كل عميل.',
            ],

            // ── Infrastructure & Civil Works ──────────────────────────────────
            [
                'category_slug' => 'infrastructure-civil-works',
                'title'         => 'Road & Pavement Works',
                'title_ar'      => 'أعمال الطرق والرصف',
                'slug'          => 'road-pavement-works',
                'image'         => '/wp-content/uploads/2023/08/Next-Generation-Data-Centers-1000x570.jpeg',
                'icon_class'    => 'flaticon flaticon-road',
                'sort_order'    => 1,
                'description'   => 'SB Construction delivers road construction, asphalt paving, and pavement works for residential, commercial, and government projects. We ensure durable, well-graded surfaces that meet Saudi road and transport authority standards.',
                'description_ar'=> 'تنفذ إس بي للإنشاءات أعمال إنشاء الطرق والرصف الإسفلتي للمشاريع السكنية والتجارية والحكومية، بمعايير تلبي متطلبات هيئة الطرق والمواصلات السعودية.',
            ],
            [
                'category_slug' => 'infrastructure-civil-works',
                'title'         => 'Earthworks & Site Preparation',
                'title_ar'      => 'أعمال الحفر وتجهيز المواقع',
                'slug'          => 'earthworks-site-preparation',
                'image'         => '/wp-content/uploads/2023/08/Big-Data.jpg',
                'icon_class'    => 'flaticon flaticon-crane',
                'sort_order'    => 2,
                'description'   => 'Proper site preparation is the foundation of every successful project. We provide bulk earthworks, cut and fill, levelling, and compaction services using modern heavy equipment and experienced operators.',
                'description_ar'=> 'يُعدّ تجهيز الموقع أساس كل مشروع ناجح، ونقدم خدمات الحفر بالجملة والردم والتسوية والدك باستخدام معدات ثقيلة حديثة وكوادر متمرسة.',
            ],
            [
                'category_slug' => 'infrastructure-civil-works',
                'title'         => 'Drainage & Utilities',
                'title_ar'      => 'الصرف الصحي والمرافق',
                'slug'          => 'drainage-utilities',
                'image'         => '/wp-content/uploads/2023/08/Internet-Of-Things-IOT--1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-network',
                'sort_order'    => 3,
                'description'   => 'We install stormwater drainage systems, sewer lines, and utility networks for residential communities and commercial developments, ensuring robust and compliant infrastructure for the long term.',
                'description_ar'=> 'نركب أنظمة تصريف مياه الأمطار وخطوط الصرف الصحي وشبكات المرافق للمجمعات السكنية والمشاريع التجارية، لضمان بنية تحتية متينة ومتوافقة مع الأنظمة.',
            ],

            // ── MEP Services ──────────────────────────────────────────────────
            [
                'category_slug' => 'mep-services',
                'title'         => 'Electrical Installations',
                'title_ar'      => 'التمديدات الكهربائية',
                'slug'          => 'electrical-installations',
                'image'         => '/wp-content/uploads/2023/08/CCTV-System-1000x570.jpeg',
                'icon_class'    => 'flaticon flaticon-cctv',
                'sort_order'    => 1,
                'description'   => 'Our certified electricians handle complete electrical installations for residential, commercial, and industrial buildings — including main distribution boards, wiring, lighting systems, and backup power solutions.',
                'description_ar'=> 'يتولى كهربائيونا المعتمدون تنفيذ التمديدات الكهربائية الكاملة للمباني السكنية والتجارية والصناعية، بما تشمل لوحات التوزيع والأسلاك وأنظمة الإضاءة وحلول الطاقة الاحتياطية.',
            ],
            [
                'category_slug' => 'mep-services',
                'title'         => 'Plumbing & Sanitary Works',
                'title_ar'      => 'أعمال السباكة والصحيات',
                'slug'          => 'plumbing-sanitary-works',
                'image'         => '/wp-content/uploads/2023/08/Access-Control-System-scaled-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-lock',
                'sort_order'    => 2,
                'description'   => 'We provide full plumbing and sanitary services including water supply pipework, drainage, bathroom and kitchen installations, water tanks, and booster pump systems — designed for reliability and long-term performance.',
                'description_ar'=> 'نقدم خدمات سباكة وصحيات متكاملة تشمل مواسير إمداد المياه والصرف وتجهيز الحمامات والمطابخ وخزانات المياه ومضخات الرفع، مصممة للموثوقية والأداء طويل الأمد.',
            ],
            [
                'category_slug' => 'mep-services',
                'title'         => 'HVAC Systems',
                'title_ar'      => 'أنظمة التكييف والتهوية',
                'slug'          => 'hvac-systems',
                'image'         => '/wp-content/uploads/2023/08/Fire-Alarm-Fire-Suspension-System-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-fire',
                'sort_order'    => 3,
                'description'   => 'SB Construction designs and installs heating, ventilation, and air conditioning systems suited to Saudi Arabia\'s demanding climate. We supply and install split units, central AC, ducting, and ventilation systems for all building types.',
                'description_ar'=> 'تصمم إس بي للإنشاءات وتركب أنظمة التدفئة والتهوية وتكييف الهواء الملائمة للمناخ السعودي القاسي، وتشمل وحدات السبليت والتكييف المركزي ومجاري الهواء لجميع أنواع المباني.',
            ],
            [
                'category_slug' => 'mep-services',
                'title'         => 'Fire Protection Systems',
                'title_ar'      => 'أنظمة الحماية من الحريق',
                'slug'          => 'fire-protection-systems',
                'image'         => '/wp-content/uploads/2023/08/Building-Management-System-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-building',
                'sort_order'    => 4,
                'description'   => 'We design and install comprehensive fire protection systems including sprinkler networks, fire alarm panels, detection devices, and suppression systems — all compliant with Saudi Civil Defence regulations.',
                'description_ar'=> 'نصمم ونركب أنظمة حماية متكاملة من الحريق تشمل شبكات الرشاشات ولوحات إنذار الحريق وأجهزة الكشف وأنظمة الإخماد، وفق اشتراطات الدفاع المدني السعودي.',
            ],
        ];

        foreach ($services as $data) {
            $categorySlug = $data['category_slug'];
            unset($data['category_slug']);

            $category = ServiceCategory::where('slug', $categorySlug)->first();
            if (!$category) continue;

            $data['category_id'] = $category->id;
            Service::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
