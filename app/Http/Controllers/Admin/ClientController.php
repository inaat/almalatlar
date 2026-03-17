<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Concerns\HandlesImageUpload;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    use HandlesImageUpload;

    public function index()
    {
        $clients = Client::orderBy('sort_order')->get();
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.form', ['client' => new Client]);
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
        $data['logo']       = $this->handleImageUpload($request, 'logo', 'clients');
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        Client::create($data);

        return redirect()->route('admin.clients.index')->with('success', 'Client created.');
    }

    public function edit(Client $client)
    {
        return view('admin.clients.form', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'logo'       => 'nullable|image|max:4096',
            'website'    => 'nullable|url|max:500',
            'sort_order' => 'nullable|integer',
            'is_active'  => 'boolean',
        ]);

        $data = $request->only(['name', 'website', 'sort_order']);
        $data['logo']       = $this->handleImageUpload($request, 'logo', 'clients', $client->logo);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active']  = $request->boolean('is_active');

        $client->update($data);

        return redirect()->route('admin.clients.index')->with('success', 'Client updated.');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index')->with('success', 'Client deleted.');
    }
}
