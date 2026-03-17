<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use HandlesImageUpload;

    // Known text setting keys shown in the form
    protected array $textFields = [
        'site_name', 'site_tagline',
        'address', 'phone', 'open_hours',
        'footer_tagline', 'footer_cta_heading', 'footer_cta_description',
        'copyright', 'map_query',
        'social_facebook', 'social_twitter', 'social_linkedin',
        'social_dribbble', 'social_behance', 'social_instagram',
    ];

    // Image setting keys that support file upload
    protected array $imageFields = ['site_logo', 'site_logo_footer'];

    public function index()
    {
        $settings = SiteSetting::orderBy('key')->get()->keyBy('key');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_logo'        => 'nullable|image|max:2048',
            'site_logo_footer' => 'nullable|image|max:2048',
        ]);

        // Save each known text field explicitly
        foreach ($this->textFields as $key) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $request->input($key, '')]
            );
        }

        // Save any other existing DB keys not in the known list (dynamic keys)
        $knownKeys = array_merge($this->textFields, $this->imageFields);
        $extraKeys = SiteSetting::whereNotIn('key', $knownKeys)->pluck('key');
        foreach ($extraKeys as $key) {
            if ($request->has($key)) {
                SiteSetting::where('key', $key)->update(['value' => $request->input($key, '')]);
            }
        }

        // Handle image uploads (logo, favicon)
        foreach ($this->imageFields as $field) {
            $existing = SiteSetting::where('key', $field)->value('value');
            $url = $this->handleImageUpload($request, $field, 'settings', $existing);
            SiteSetting::updateOrCreate(
                ['key' => $field],
                ['value' => $url ?? $existing ?? '']
            );
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings saved.');
    }
}
