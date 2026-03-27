<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\AboutHistory;
use Illuminate\Http\Request;

class AboutHistoryController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $items = AboutHistory::orderBy('sort_order')->get();
        return view('admin.about-history.index', compact('items'));
    }

    public function create()
    {
        return view('admin.about-history.form', ['item' => new AboutHistory]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'year'        => 'required|string|max:10',
            'title'          => 'required|string|max:255',
            'title_ar'       => 'nullable|string|max:255',
            'description'    => 'nullable|string',
            'description_ar' => 'nullable|string',
            'image'       => 'nullable|image|max:4096',
            'color'       => 'nullable|string|max:20',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->only(['year', 'title', 'title_ar', 'description', 'description_ar', 'color', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'about-history');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        AboutHistory::create($data);

        return redirect()->route('admin.about-history.index')->with('success', 'Item created.');
    }

    public function edit(AboutHistory $aboutHistory)
    {
        return view('admin.about-history.form', ['item' => $aboutHistory]);
    }

    public function update(Request $request, AboutHistory $aboutHistory)
    {
        $request->validate([
            'year'        => 'required|string|max:10',
            'title'          => 'required|string|max:255',
            'title_ar'       => 'nullable|string|max:255',
            'description'    => 'nullable|string',
            'description_ar' => 'nullable|string',
            'image'       => 'nullable|image|max:4096',
            'color'       => 'nullable|string|max:20',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->only(['year', 'title', 'title_ar', 'description', 'description_ar', 'color', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'about-history', $aboutHistory->image);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $aboutHistory->update($data);

        return redirect()->route('admin.about-history.index')->with('success', 'Item updated.');
    }

    public function destroy(AboutHistory $aboutHistory)
    {
        $aboutHistory->delete();
        return redirect()->route('admin.about-history.index')->with('success', 'Item deleted.');
    }
}
