<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $products = Product::orderBy('sort_order')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.form', ['product' => new Product]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'name_ar'    => 'nullable|string|max:255',
            'content'    => 'nullable|string',
            'content_ar' => 'nullable|string',
            'image'      => 'nullable|image|max:4096',
            'icon_class' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
        ]);

        $data = $request->only(['name', 'name_ar', 'content', 'content_ar', 'icon_class', 'sort_order']);
        $data['slug']       = Str::slug($request->name);
        $data['image']      = $this->handleImageUpload($request, 'image', 'products');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Product created.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.form', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'name_ar'    => 'nullable|string|max:255',
            'content'    => 'nullable|string',
            'content_ar' => 'nullable|string',
            'image'      => 'nullable|image|max:4096',
            'icon_class' => 'nullable|string|max:100',
            'sort_order' => 'nullable|integer',
        ]);

        $data = $request->only(['name', 'name_ar', 'content', 'content_ar', 'icon_class', 'sort_order']);
        $data['slug']       = Str::slug($request->name);
        $data['image']      = $this->handleImageUpload($request, 'image', 'products', $product->image);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Product updated.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted.');
    }
}
