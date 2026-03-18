@extends('layouts.admin')

@section('title', 'About History')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">About History</h4>
    <a href="{{ route('admin.about-history.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg"></i> Add Item
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
                    <th>Year</th>
                    <th>Title</th>
                    <th>Color</th>
                    <th>Image</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                <tr>
                    <td>{{ $item->sort_order }}</td>
                    <td><strong>{{ $item->year }}</strong></td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <span style="display:inline-block;width:20px;height:20px;border-radius:4px;background:{{ $item->color }}"></span>
                        <small class="text-muted ms-1">{{ $item->color }}</small>
                    </td>
                    <td>
                        @if($item->image)
                            <img src="{{ $item->image }}" height="36" class="rounded">
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.about-history.edit', $item) }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.about-history.destroy', $item) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete {{ addslashes($item->title) }}?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="6" class="text-center text-muted py-4">No history items yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
