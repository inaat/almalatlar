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

        // Construction Materials Supply
        $materialsName = 'Construction Materials Supply';
        $materialsContent = 'SB Construction sources and supplies high-quality construction materials for all project types. We work with trusted suppliers across Saudi Arabia to provide structural steel, concrete, blocks, insulation, waterproofing membranes, and finishing materials. Our procurement team ensures materials meet specification, are delivered on time, and comply with Saudi building standards.';

        Product::create([
            'name'       => $materialsName,
            'slug'       => Str::slug($materialsName),
            'content'    => $materialsContent,
            'image'      => 'https://almalath.com/wp-content/uploads/2023/08/Assets-9-600x420.png',
            'sort_order' => 1,
        ]);

        // Specialist Subcontractor Network
        $subcontractorName = 'Specialist Subcontractor Network';
        $subcontractorContent = 'SB Construction maintains a vetted network of specialist subcontractors across all trades including MEP, joinery, glazing, landscaping, and steelwork. We manage the full subcontractor coordination process to ensure seamless delivery on complex, multi-trade projects. Our partners are selected for their quality of work, reliability, and compliance with Saudi safety regulations.';

        Product::create([
            'name'       => $subcontractorName,
            'slug'       => Str::slug($subcontractorName),
            'content'    => $subcontractorContent,
            'image'      => 'https://almalath.com/wp-content/uploads/2023/08/IT-Passive-Equipment-600x473.jpg',
            'sort_order' => 2,
        ]);
    }
}
