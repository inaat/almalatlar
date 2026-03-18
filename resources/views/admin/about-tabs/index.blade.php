@extends('layouts.admin')

@section('title', 'About Tabs')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">About Tabs</h4>
    <a href="{{ route('admin.about-tabs.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg"></i> Add Tab
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Key</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($tabs as $tab)
                <tr>
                    <td>{{ $tab->sort_order }}</td>
                    <td><small class="text-muted">{{ $tab->tab_key }}</small></td>
                    <td>{{ $tab->title }}</td>
                    <td>
                        @if($tab->image)
                            <img src="{{ $tab->image }}" height="36" class="rounded">
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.about-tabs.edit', $tab) }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.about-tabs.destroy', $tab) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete {{ addslashes($tab->title) }}?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">No tabs yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
