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

            // ── IT Generated Solutions ────────────────────────────────────────
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'IT Infrastructure Management',
                'slug'          => 'it-infrastructure-management',
                'icon_class'    => 'flaticon flaticon-server',
                'sort_order'    => 1,
                'description'   => 'IT infrastructure has vital role in the organization operations. IT infrastructure management includes the management of IT policies and processes, along with the equipment, data, human resources, and external contacts.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'IT Information Security',
                'slug'          => 'it-information-security',
                'icon_class'    => 'flaticon flaticon-shield',
                'sort_order'    => 2,
                'description'   => 'Information security is a broad field that covers many areas such as physical security, endpoint security, data encryption, and network security. Information security specialist of Al Malath Al Arabia take care of customers infrastructure with proactive approach that\'s ensure their business continuity.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'IT Managed Services',
                'slug'          => 'it-managed-services',
                'icon_class'    => 'flaticon flaticon-settings',
                'sort_order'    => 3,
                'description'   => 'Managed services can help you expand or upgrade systems when you need to, without having to hire and train employees you won\'t necessarily need later. Al Malath Al Arabia, as MSP can tackle customer infrastructure and provide and fulfill the requirements due to strong background in the MSP field.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'Data Center Solutions Services',
                'slug'          => 'data-center-solutions-services',
                'icon_class'    => 'flaticon flaticon-database',
                'sort_order'    => 4,
                'description'   => 'Data centers support almost all computation, data storage, and network and business applications for the organizations. Al Malath Al Arabia provides a solution that lowers the Total Cost of Ownership (TCO) as well as provides the extraordinary standardized model to the customers.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'Applications Development Services',
                'slug'          => 'applications-development-services',
                'icon_class'    => 'flaticon flaticon-coding',
                'sort_order'    => 5,
                'description'   => 'Al Malath Al Arabia keeps skilled and experienced software engineers who have capability to understand the customer needs and ideas; shape; design; implement; and maintain in proficient way. Our team propose a well-managed action plan that fulfill the client requirements.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'IT Service Management',
                'slug'          => 'it-service-management',
                'icon_class'    => 'flaticon flaticon-layers',
                'sort_order'    => 6,
                'description'   => 'Information technology service management (ITSM) is the activities performed by an organization to design, build, deliver, operate, and control IT services offered to customers. Al Malath Al Arabia keeps certified ITIL professionals focusing on customer needs and continual improvement.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'Voice Over IP Telephony Solutions (VOIP)',
                'slug'          => 'voice-over-ip-telephony-solutions-voip',
                'icon_class'    => 'flaticon flaticon-phone',
                'sort_order'    => 7,
                'description'   => 'Al Malath Al Arabia is a communications company dedicated to advancing communications platforms that meet client needs. We offer Voice over IP Telephony solutions to boost your business process according to the needs of current and next generation technology.',
            ],
            [
                'category_slug' => 'it-generated-solutions',
                'title'         => 'Wireless Solutions',
                'slug'          => 'wireless-solutions',
                'icon_class'    => 'flaticon flaticon-wifi',
                'sort_order'    => 8,
                'description'   => 'In today\'s increasingly virtualized world, businesses cannot afford to struggle with dropped connections and lag time. Al Malath Al Arabia is a partner with leading wireless solution vendors like CISCO, Huawei, Ubiquiti, Motorola, HPE Aruba and some other names to fulfill the customer requirements.',
            ],

            // ── Next Generation IT Services ───────────────────────────────────
            [
                'category_slug' => 'next-generation-it-services',
                'title'         => 'Next Generation Data Centers',
                'slug'          => 'next-generation-data-centers',
                'icon_class'    => 'flaticon flaticon-cloud',
                'sort_order'    => 1,
                'description'   => 'Since data centers are evolving, thanks to advanced technology like cognitive computing and predictive analytics, today\'s data centers are becoming smarter and more capable. We offer services employing Software-defined control, Automation and Machine learning.',
            ],
            [
                'category_slug' => 'next-generation-it-services',
                'title'         => 'Artificial Intelligence (AI)',
                'slug'          => 'artificial-intelligence-ai',
                'icon_class'    => 'flaticon flaticon-robot',
                'sort_order'    => 2,
                'description'   => 'Al Malath Al Arabia Artificial Intelligence expert keen to provide solutions to the customers to enhance their business productivity as well as to meet modern IT requirements to utilize it fully.',
            ],
            [
                'category_slug' => 'next-generation-it-services',
                'title'         => 'Internet Of Things (IOT)',
                'slug'          => 'internet-of-things-iot',
                'icon_class'    => 'flaticon flaticon-network',
                'sort_order'    => 3,
                'description'   => 'Internet Of Things (IoT) helps the business for cost reduction, efficiency and productivity, and business opportunities. Al Malath Al Arabia can help customers to get real time data from devices, machines and objects automatically through a network effectively talking to each other in real time.',
            ],
            [
                'category_slug' => 'next-generation-it-services',
                'title'         => 'Big Data',
                'slug'          => 'big-data',
                'icon_class'    => 'flaticon flaticon-analysis',
                'sort_order'    => 4,
                'description'   => 'Al Malath Al Arabia offers a platform for business intelligence and data warehousing that is effective with business data. Our solution adds all the data together into a manageable form with accessibility to business data when you need it and where you need it.',
            ],

            // ── Consulting Services ───────────────────────────────────────────
            [
                'category_slug' => 'consulting-services',
                'title'         => 'Business Process Automation',
                'slug'          => 'business-process-automation',
                'icon_class'    => 'flaticon flaticon-automation',
                'sort_order'    => 1,
                'description'   => 'Al Malath Al Arabia is specialized in Basic automation, Process automation and Advanced automation according to the customer need and the environment. We successfully implemented Business process management (BPM) projects for the customer.',
            ],
            [
                'category_slug' => 'consulting-services',
                'title'         => 'IT Resource Outsourcing',
                'slug'          => 'it-resource-outsourcing',
                'icon_class'    => 'flaticon flaticon-team',
                'sort_order'    => 2,
                'description'   => 'Al Malath Al Arabia provides IT resource Outsourcing as well as MSP services to minimize the cost and to get high utilization of the resources. We have all levels of experts from IT technician to IT consultants to meet the customers\' requirements.',
            ],
            [
                'category_slug' => 'consulting-services',
                'title'         => 'Call Center Services',
                'slug'          => 'call-center-services',
                'icon_class'    => 'flaticon flaticon-support',
                'sort_order'    => 3,
                'description'   => 'Al Malath Al Arabia offering call center services on-Premises or On-cloud. We also have call center services outsource model that fits many of the customers who do not have their own call center system and software.',
            ],

            // ── Low Current Services ──────────────────────────────────────────
            [
                'category_slug' => 'low-current-services',
                'title'         => 'CCTV System',
                'slug'          => 'cctv-system',
                'icon_class'    => 'flaticon flaticon-cctv',
                'sort_order'    => 1,
                'description'   => 'Our CCTV solutions ensure that your expectations are set to what a system can deliver. We provide a total range of digital video and audio recording systems that provide continuous CCTV recording, archiving, and debriefing capabilities, meeting the needs of today\'s demanding security environment.',
            ],
            [
                'category_slug' => 'low-current-services',
                'title'         => 'Access Control System',
                'slug'          => 'access-control-system',
                'icon_class'    => 'flaticon flaticon-lock',
                'sort_order'    => 2,
                'description'   => 'The smart access control solutions enable building owners, offices, tenants and visitors to go with the flow. Investing in the right access control technology is central to the protection of people and assets. Our integrated technology creates a seamless experience which offers a high level of accessibility and security.',
            ],
            [
                'category_slug' => 'low-current-services',
                'title'         => 'Fire Alarm & Fire Suspension System',
                'slug'          => 'fire-alarm-fire-suspension-system',
                'icon_class'    => 'flaticon flaticon-fire',
                'sort_order'    => 3,
                'description'   => 'Al Malath Al Arabia offers a wide range of Fire products and solutions. We provide Fire Suppression Systems including Sprinkler, Gaseous, Foam & Water Spray Systems, and Fire alarm and detection systems including initiating devices, notification devices, control panels and backup power supply.',
            ],
            [
                'category_slug' => 'low-current-services',
                'title'         => 'Public Address System',
                'slug'          => 'public-address-system',
                'icon_class'    => 'flaticon flaticon-speaker',
                'sort_order'    => 4,
                'description'   => 'Al Malath Al Arabia offers many different types of Public Address systems. We enable our customers to communicate immediately with all the targeted audience easily with a wide range of PA systems including Loudspeaker & Power Amplifier, Microphones, Audio Mixer, and Signal Processors.',
            ],
            [
                'category_slug' => 'low-current-services',
                'title'         => 'Audio & Visual System',
                'slug'          => 'audio-visual-system',
                'icon_class'    => 'flaticon flaticon-screen',
                'sort_order'    => 5,
                'description'   => 'We design conference rooms with particular emphasis on flexibility and on the ability to adjust to differing requirements and workloads. Al Malath Al Arabia continuously integrates and upgrades the designs by including the advanced concepts in AV field.',
            ],
            [
                'category_slug' => 'low-current-services',
                'title'         => 'Building Management System',
                'slug'          => 'building-management-system',
                'icon_class'    => 'flaticon flaticon-building',
                'sort_order'    => 6,
                'description'   => 'Al Malath Al Arabia is partner with industry leading BMS vendors. A Building Management System (BMS) can help reduce energy and maintenance costs by maintaining building temperatures, lighting rooms according to an occupancy schedule, and notifying facility managers in the event of a malfunction.',
            ],
            [
                'category_slug' => 'low-current-services',
                'title'         => 'Master Clock System',
                'slug'          => 'master-clock-system',
                'icon_class'    => 'flaticon flaticon-clock',
                'sort_order'    => 7,
                'description'   => 'A master clock is an electronic device that provides time synchronization signals to several slave clocks on a network. Al Malath Al Arabia Master Clock solutions are according to international standards, covering verticals like Hospitals, Universities, Airports, admin buildings and shopping malls.',
            ],
        ];

        foreach ($services as $data) {
            $categorySlug = $data['category_slug'];
            unset($data['category_slug']);

            $category = ServiceCategory::where('slug', $categorySlug)->first();
            if (!$category) continue;

            // Load full page content from blade file
            $bladePath = resource_path('views/service/' . $data['slug'] . '.blade.php');
            if (file_exists($bladePath)) {
                $raw = file_get_contents($bladePath);
                if (preg_match('/@section\(\'content\'\)(.*?)@endsection\s*$/s', $raw, $m)) {
                    $data['content'] = trim($m[1]);
                }
            }

            $data['category_id'] = $category->id;
            Service::create($data);
        }
    }
}
