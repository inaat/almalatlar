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
                'slug'          => 'residential-construction',
                'image'         => '/wp-content/uploads/2021/09/it-infrastructure-services-1.png',
                'icon_class'    => 'flaticon flaticon-building',
                'sort_order'    => 1,
                'description'   => 'SB Construction delivers high-quality residential projects including villas, apartments, and housing complexes. We manage every phase from design coordination and foundations through to final handover, ensuring homes that are safe, durable, and beautifully finished.',
            ],
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Commercial Construction',
                'slug'          => 'commercial-construction',
                'image'         => '/wp-content/uploads/2023/08/IT-Managed-Services-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-layers',
                'sort_order'    => 2,
                'description'   => 'From office buildings and retail centres to hotels and mixed-use developments, we bring the expertise and capacity to deliver complex commercial projects on time and within budget across Saudi Arabia.',
            ],
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Industrial Construction',
                'slug'          => 'industrial-construction',
                'image'         => '/wp-content/uploads/2023/08/Data-Center-Solutions-Services-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-settings',
                'sort_order'    => 3,
                'description'   => 'We construct warehouses, factories, and industrial facilities built to withstand demanding operational environments. Our industrial projects meet all regulatory standards with rigorous quality control at every stage.',
            ],
            [
                'category_slug' => 'general-contracting',
                'title'         => 'Project Management',
                'slug'          => 'project-management',
                'image'         => '/wp-content/uploads/2023/08/IT-Service-Management-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-process',
                'sort_order'    => 4,
                'description'   => 'Our experienced project managers oversee all aspects of your construction project — from planning, procurement, and scheduling to site supervision and final delivery — ensuring everything runs smoothly and efficiently.',
            ],

            // ── Fit-Out & Interior ────────────────────────────────────────────
            [
                'category_slug' => 'fit-out-interior',
                'title'         => 'Office Fit-Out',
                'slug'          => 'office-fit-out',
                'image'         => '/wp-content/uploads/2023/08/Business-Process-Automation-1000x570.png',
                'icon_class'    => 'flaticon flaticon-idea',
                'sort_order'    => 1,
                'description'   => 'We transform empty shells into fully functional, professionally designed office spaces. SB Construction handles all elements of office fit-out including partitioning, flooring, ceilings, lighting, and network infrastructure coordination.',
            ],
            [
                'category_slug' => 'fit-out-interior',
                'title'         => 'Retail Fit-Out',
                'slug'          => 'retail-fit-out',
                'image'         => '/wp-content/uploads/2023/08/Call-Center-Services-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-best-seller',
                'sort_order'    => 2,
                'description'   => 'Our retail fit-out service creates engaging, brand-aligned spaces that enhance the customer experience. We work with retail brands and developers to deliver shopfronts, showrooms, and outlet spaces to the highest finish standards.',
            ],
            [
                'category_slug' => 'fit-out-interior',
                'title'         => 'Villa & Apartment Finishing',
                'slug'          => 'villa-apartment-finishing',
                'image'         => '/wp-content/uploads/2023/08/IT-Resource-Outsourcing-1000x570.png',
                'icon_class'    => 'flaticon flaticon-house',
                'sort_order'    => 3,
                'description'   => 'We provide premium residential finishing services including tiling, plastering, painting, joinery, kitchen fit-out, and bathroom installations — delivering homes that are move-in ready to the exact specification of each client.',
            ],

            // ── Infrastructure & Civil Works ──────────────────────────────────
            [
                'category_slug' => 'infrastructure-civil-works',
                'title'         => 'Road & Pavement Works',
                'slug'          => 'road-pavement-works',
                'image'         => '/wp-content/uploads/2023/08/Next-Generation-Data-Centers-1000x570.jpeg',
                'icon_class'    => 'flaticon flaticon-road',
                'sort_order'    => 1,
                'description'   => 'SB Construction delivers road construction, asphalt paving, and pavement works for residential, commercial, and government projects. We ensure durable, well-graded surfaces that meet Saudi road and transport authority standards.',
            ],
            [
                'category_slug' => 'infrastructure-civil-works',
                'title'         => 'Earthworks & Site Preparation',
                'slug'          => 'earthworks-site-preparation',
                'image'         => '/wp-content/uploads/2023/08/Big-Data.jpg',
                'icon_class'    => 'flaticon flaticon-crane',
                'sort_order'    => 2,
                'description'   => 'Proper site preparation is the foundation of every successful project. We provide bulk earthworks, cut and fill, levelling, and compaction services using modern heavy equipment and experienced operators.',
            ],
            [
                'category_slug' => 'infrastructure-civil-works',
                'title'         => 'Drainage & Utilities',
                'slug'          => 'drainage-utilities',
                'image'         => '/wp-content/uploads/2023/08/Internet-Of-Things-IOT--1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-network',
                'sort_order'    => 3,
                'description'   => 'We install stormwater drainage systems, sewer lines, and utility networks for residential communities and commercial developments, ensuring robust and compliant infrastructure for the long term.',
            ],

            // ── MEP Services ──────────────────────────────────────────────────
            [
                'category_slug' => 'mep-services',
                'title'         => 'Electrical Installations',
                'slug'          => 'electrical-installations',
                'image'         => '/wp-content/uploads/2023/08/CCTV-System-1000x570.jpeg',
                'icon_class'    => 'flaticon flaticon-cctv',
                'sort_order'    => 1,
                'description'   => 'Our certified electricians handle complete electrical installations for residential, commercial, and industrial buildings — including main distribution boards, wiring, lighting systems, and backup power solutions.',
            ],
            [
                'category_slug' => 'mep-services',
                'title'         => 'Plumbing & Sanitary Works',
                'slug'          => 'plumbing-sanitary-works',
                'image'         => '/wp-content/uploads/2023/08/Access-Control-System-scaled-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-lock',
                'sort_order'    => 2,
                'description'   => 'We provide full plumbing and sanitary services including water supply pipework, drainage, bathroom and kitchen installations, water tanks, and booster pump systems — designed for reliability and long-term performance.',
            ],
            [
                'category_slug' => 'mep-services',
                'title'         => 'HVAC Systems',
                'slug'          => 'hvac-systems',
                'image'         => '/wp-content/uploads/2023/08/Fire-Alarm-Fire-Suspension-System-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-fire',
                'sort_order'    => 3,
                'description'   => 'SB Construction designs and installs heating, ventilation, and air conditioning systems suited to Saudi Arabia\'s demanding climate. We supply and install split units, central AC, ducting, and ventilation systems for all building types.',
            ],
            [
                'category_slug' => 'mep-services',
                'title'         => 'Fire Protection Systems',
                'slug'          => 'fire-protection-systems',
                'image'         => '/wp-content/uploads/2023/08/Building-Management-System-1000x570.jpg',
                'icon_class'    => 'flaticon flaticon-building',
                'sort_order'    => 4,
                'description'   => 'We design and install comprehensive fire protection systems including sprinkler networks, fire alarm panels, detection devices, and suppression systems — all compliant with Saudi Civil Defence regulations.',
            ],
        ];

        foreach ($services as $data) {
            $categorySlug = $data['category_slug'];
            unset($data['category_slug']);

            $category = ServiceCategory::where('slug', $categorySlug)->first();
            if (!$category) continue;

            $data['category_id'] = $category->id;
            Service::create($data);
        }
    }
}
