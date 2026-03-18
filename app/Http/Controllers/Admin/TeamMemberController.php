<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $items = TeamMember::orderBy('sort_order')->get();
        return view('admin.team-members.index', compact('items'));
    }

    public function create()
    {
        return view('admin.team-members.form', ['item' => new TeamMember]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'position'     => 'nullable|string|max:255',
            'image'        => 'nullable|image|max:4096',
            'description'  => 'nullable|string',
            'facebook_url' => 'nullable|string|max:255',
            'twitter_url'  => 'nullable|string|max:255',
            'dribbble_url' => 'nullable|string|max:255',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $data = $request->only(['name', 'position', 'description', 'facebook_url', 'twitter_url', 'dribbble_url', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'team-members');
        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        TeamMember::create($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member created.');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.form', ['item' => $teamMember]);
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'position'     => 'nullable|string|max:255',
            'image'        => 'nullable|image|max:4096',
            'description'  => 'nullable|string',
            'facebook_url' => 'nullable|string|max:255',
            'twitter_url'  => 'nullable|string|max:255',
            'dribbble_url' => 'nullable|string|max:255',
            'sort_order'   => 'nullable|integer',
            'is_active'    => 'nullable|boolean',
        ]);

        $data = $request->only(['name', 'position', 'description', 'facebook_url', 'twitter_url', 'dribbble_url', 'sort_order']);
        $data['image']      = $this->handleImageUpload($request, 'image', 'team-members', $teamMember->image);
        $data['is_active']  = $request->boolean('is_active');
        $data['sort_order'] = $data['sort_order'] ?? 0;

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')->with('success', 'Team member updated.');
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('admin.team-members.index')->with('success', 'Team member deleted.');
    }
}
