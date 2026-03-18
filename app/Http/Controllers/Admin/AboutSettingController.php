<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AboutSettingController extends Controller
{
    protected array $fields = [
        'about_subtitle',
        'about_heading',
        'about_description',
        'about_description_2',
        'about_video_id',
        'vision_heading',
        'vision_text',
        'goal_text',
        'values_text',
        'industries_subheading',
        'industries_heading',
        'industries_description',
        'counter_team',
        'counter_awards',
        'counter_projects',
        'counter_reviews',
        'testimonials_subtitle',
        'testimonials_heading',
        'testimonials_label',
        'team_subtitle',
        'team_heading',
    ];

    public function index()
    {
        $settings = SiteSetting::whereIn('key', $this->fields)->get()->keyBy('key');
        return view('admin.about.index', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($this->fields as $key) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $request->input($key, ''), 'type' => 'text']
            );
        }

        return redirect()->route('admin.about.index')->with('success', 'About page content saved.');
    }
}
