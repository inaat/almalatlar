@extends('layouts.admin')

@section('title', 'About Sub-Pages')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">About Sub-Pages</h4>
    <a href="{{ route('admin.about-pages.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg"></i> Add Page
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
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Active</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($pages as $page)
                <tr>
                    <td>{{ $page->sort_order }}</td>
                    <td>{{ $page->title }}</td>
                    <td><small class="text-muted">{{ $page->slug }}</small></td>
                    <td>
                        @if($page->is_active)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.about-pages.edit', $page) }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.about-pages.destroy', $page) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete {{ addslashes($page->title) }}?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="5" class="text-center text-muted py-4">No pages yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
