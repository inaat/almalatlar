<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $items = Testimonial::orderBy('sort_order')->get();
        return view('admin.testimonials.index', compact('items'));
    }

    public function create()
    {
        return view('admin.testimonials.form', ['item' => new Testimonial]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'position'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|max:4096',
            'description' => 'required|string',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'nullable|boolean',
        ]);

        $data = $request->only(['name', 'position', 'description', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'testimonials');
        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial created.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.form', ['item' => $testimonial]);
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'position'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|max:4096',
            'description' => 'required|string',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'nullable|boolean',
        ]);

        $data = $request->only(['name', 'position', 'description', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'testimonials', $testimonial->image);
        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted.');
    }
}
