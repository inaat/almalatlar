<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();

        $materialsName    = 'Construction Materials Supply';
        $materialsNameAr  = 'توريد مواد البناء';
        $materialsContent = 'SB Construction sources and supplies high-quality construction materials for all project types. We work with trusted suppliers across Saudi Arabia to provide structural steel, concrete, blocks, insulation, waterproofing membranes, and finishing materials. Our procurement team ensures materials meet specification, are delivered on time, and comply with Saudi building standards.';
        $materialsContentAr = 'تتولى إس بي للإنشاءات توفير وتوريد مواد بناء عالية الجودة لجميع أنواع المشاريع. نتعاون مع موردين موثوقين في أرجاء المملكة العربية السعودية لتوفير الفولاذ الإنشائي والخرسانة والطوب والعزل والأغشية المقاومة للماء ومواد التشطيب. يضمن فريق المشتريات لدينا مطابقة المواد للمواصفات وتسليمها في الوقت المحدد وامتثالها لمعايير البناء السعودية.';

        Product::create([
            'name'       => $materialsName,
            'name_ar'    => $materialsNameAr,
            'slug'       => Str::slug($materialsName),
            'content'    => $materialsContent,
            'content_ar' => $materialsContentAr,
            'image'      => 'https://almalath.com/wp-content/uploads/2023/08/Assets-9-600x420.png',
            'sort_order' => 1,
        ]);

        $subcontractorName    = 'Specialist Subcontractor Network';
        $subcontractorNameAr  = 'شبكة المقاولين المتخصصين';
        $subcontractorContent = 'SB Construction maintains a vetted network of specialist subcontractors across all trades including MEP, joinery, glazing, landscaping, and steelwork. We manage the full subcontractor coordination process to ensure seamless delivery on complex, multi-trade projects. Our partners are selected for their quality of work, reliability, and compliance with Saudi safety regulations.';
        $subcontractorContentAr = 'تحتفظ إس بي للإنشاءات بشبكة موثّقة من المقاولين المتخصصين في جميع المجالات بما تشمل الكهرومكانيكية والنجارة والزجاج وتنسيق الحدائق وأعمال الحديد. ندير عملية التنسيق الكاملة مع المقاولين من الباطن لضمان التسليم السلس في المشاريع المعقدة متعددة التخصصات.';

        Product::create([
            'name'       => $subcontractorName,
            'name_ar'    => $subcontractorNameAr,
            'slug'       => Str::slug($subcontractorName),
            'content'    => $subcontractorContent,
            'content_ar' => $subcontractorContentAr,
            'image'      => 'https://almalath.com/wp-content/uploads/2023/08/IT-Passive-Equipment-600x473.jpg',
            'sort_order' => 2,
        ]);
    }
}
