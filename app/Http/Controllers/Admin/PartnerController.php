<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $partners = Partner::orderBy('sort_order')->get();
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.form', ['partner' => new Partner]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'logo'       => 'nullable|image|max:4096',
            'website'    => 'nullable|url|max:500',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
        ]);

        $data = $request->only(['name', 'website', 'sort_order']);
        $data['logo']       = $this->handleImageUpload($request, 'logo', 'partners');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        Partner::create($data);

        return redirect()->route('admin.partners.index')->with('success', 'Partner created.');
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.form', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'logo'       => 'nullable|image|max:4096',
            'website'    => 'nullable|url|max:500',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
        ]);

        $data = $request->only(['name', 'website', 'sort_order']);
        $data['logo']       = $this->handleImageUpload($request, 'logo', 'partners', $partner->logo);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        $partner->update($data);

        return redirect()->route('admin.partners.index')->with('success', 'Partner updated.');
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('admin.partners.index')->with('success', 'Partner deleted.');
    }
}
