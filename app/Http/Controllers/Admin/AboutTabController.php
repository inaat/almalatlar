<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\AboutTab;
use Illuminate\Http\Request;

class AboutTabController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $tabs = AboutTab::orderBy('sort_order')->get();
        return view('admin.about-tabs.index', compact('tabs'));
    }

    public function create()
    {
        return view('admin.about-tabs.form', ['tab' => new AboutTab]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tab_key'     => 'required|string|max:50',
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:4096',
            'button_text' => 'nullable|string|max:100',
            'button_url'  => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->only(['tab_key', 'title', 'subtitle', 'description', 'button_text', 'button_url', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'about-tabs');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        AboutTab::create($data);

        return redirect()->route('admin.about-tabs.index')->with('success', 'Tab created.');
    }

    public function edit(AboutTab $aboutTab)
    {
        return view('admin.about-tabs.form', ['tab' => $aboutTab]);
    }

    public function update(Request $request, AboutTab $aboutTab)
    {
        $request->validate([
            'tab_key'     => 'required|string|max:50',
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:4096',
            'button_text' => 'nullable|string|max:100',
            'button_url'  => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->only(['tab_key', 'title', 'subtitle', 'description', 'button_text', 'button_url', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'about-tabs', $aboutTab->image);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $aboutTab->update($data);

        return redirect()->route('admin.about-tabs.index')->with('success', 'Tab updated.');
    }

    public function destroy(AboutTab $aboutTab)
    {
        $aboutTab->delete();
        return redirect()->route('admin.about-tabs.index')->with('success', 'Tab deleted.');
    }
}
