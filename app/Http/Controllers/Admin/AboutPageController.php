<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutPageController extends Controller
{
    public function index()
    {
        $pages = AboutPage::orderBy('sort_order')->get();
        return view('admin.about-pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.about-pages.form', ['page' => new AboutPage]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'title_ar'   => 'nullable|string|max:255',
            'content'    => 'nullable|string',
            'content_ar' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        AboutPage::create([
            'title'      => $request->title,
            'title_ar'   => $request->title_ar,
            'slug'       => Str::slug($request->title),
            'content'    => $request->content,
            'content_ar' => $request->content_ar,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.about-pages.index')->with('success', 'Page created.');
    }

    public function edit(AboutPage $aboutPage)
    {
        return view('admin.about-pages.form', ['page' => $aboutPage]);
    }

    public function update(Request $request, AboutPage $aboutPage)
    {
        $request->validate([
            'title'      => 'required|string|max:255',
            'title_ar'   => 'nullable|string|max:255',
            'content'    => 'nullable|string',
            'content_ar' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $aboutPage->update([
            'title'      => $request->title,
            'title_ar'   => $request->title_ar,
            'slug'       => Str::slug($request->title),
            'content'    => $request->content,
            'content_ar' => $request->content_ar,
            'sort_order' => $request->sort_order ?? 0,
            'is_active'  => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.about-pages.index')->with('success', 'Page updated.');
    }

    public function destroy(AboutPage $aboutPage)
    {
        $aboutPage->delete();
        return redirect()->route('admin.about-pages.index')->with('success', 'Page deleted.');
    }
}
