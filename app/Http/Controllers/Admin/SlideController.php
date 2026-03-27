<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\SliderSlide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $slides = SliderSlide::orderBy('sort_order')->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.form', ['slide' => new SliderSlide]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'          => 'nullable|string|max:255',
            'title_ar'       => 'nullable|string|max:255',
            'subtitle'       => 'nullable|string|max:255',
            'subtitle_ar'    => 'nullable|string|max:255',
            'description'    => 'nullable|string',
            'description_ar' => 'nullable|string',
            'button_text'    => 'nullable|string|max:100',
            'button_text_ar' => 'nullable|string|max:100',
            'button_url'  => 'nullable|string|max:500',
            'image'       => 'nullable|image|max:4096',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'boolean',
        ]);

        $data = $request->only(['title', 'title_ar', 'subtitle', 'subtitle_ar', 'description', 'description_ar', 'button_text', 'button_text_ar', 'button_url', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'slides');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        SliderSlide::create($data);

        return redirect()->route('admin.slides.index')->with('success', 'Slide created.');
    }

    public function edit(SliderSlide $slide)
    {
        return view('admin.slides.form', compact('slide'));
    }

    public function update(Request $request, SliderSlide $slide)
    {
        $request->validate([
            'title'          => 'nullable|string|max:255',
            'title_ar'       => 'nullable|string|max:255',
            'subtitle'       => 'nullable|string|max:255',
            'subtitle_ar'    => 'nullable|string|max:255',
            'description'    => 'nullable|string',
            'description_ar' => 'nullable|string',
            'button_text'    => 'nullable|string|max:100',
            'button_text_ar' => 'nullable|string|max:100',
            'button_url'  => 'nullable|string|max:500',
            'image'       => 'nullable|image|max:4096',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'boolean',
        ]);

        $data = $request->only(['title', 'title_ar', 'subtitle', 'subtitle_ar', 'description', 'description_ar', 'button_text', 'button_text_ar', 'button_url', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'slides', $slide->image);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        $slide->update($data);

        return redirect()->route('admin.slides.index')->with('success', 'Slide updated.');
    }

    public function destroy(SliderSlide $slide)
    {
        $slide->delete();
        return redirect()->route('admin.slides.index')->with('success', 'Slide deleted.');
    }
}
