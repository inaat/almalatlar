<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminServiceController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $services = Service::with('category')->orderBy('sort_order')->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::orderBy('name')->get();
        return view('admin.services.form', ['service' => new Service, 'categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'nullable|exists:service_categories,id',
            'title'       => 'required|string|max:255',
            'slug'        => 'nullable|string|max:255|unique:services,slug',
            'description' => 'nullable|string',
            'icon_class'  => 'nullable|string|max:100',
            'image'       => 'nullable|image|max:4096',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'boolean',
        ]);

        $data = $request->only(['category_id', 'title', 'slug', 'description', 'icon_class', 'sort_order']);
        $data['slug']       = $data['slug'] ?: Str::slug($data['title']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'services');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        Service::create($data);

        return redirect()->route('admin.services.index')->with('success', 'Service created.');
    }

    public function edit(Service $service)
    {
        $categories = ServiceCategory::orderBy('name')->get();
        return view('admin.services.form', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'category_id' => 'nullable|exists:service_categories,id',
            'title'       => 'required|string|max:255',
            'slug'        => 'nullable|string|max:255|unique:services,slug,' . $service->id,
            'description' => 'nullable|string',
            'icon_class'  => 'nullable|string|max:100',
            'image'       => 'nullable|image|max:4096',
            'sort_order'  => 'nullable|integer',
            'is_active'   => 'boolean',
        ]);

        $data = $request->only(['category_id', 'title', 'slug', 'description', 'icon_class', 'sort_order']);
        $data['slug']       = $data['slug'] ?: Str::slug($data['title']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'services', $service->image);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted.');
    }
}
