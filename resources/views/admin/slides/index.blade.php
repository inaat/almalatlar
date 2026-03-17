@extends('layouts.admin')

@section('title', 'Slider Slides')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Slider Slides</h5>
    <a href="{{ route('admin.slides.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg me-1"></i> Add Slide
    </a>
</div>

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Button</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($slides as $slide)
                <tr>
                    <td>{{ $slide->id }}</td>
                    <td>
                        @if($slide->image)
                            <img src="{{ $slide->image }}" alt="" style="width:60px;height:40px;object-fit:cover;border-radius:4px;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $slide->title ?: '-' }}</td>
                    <td>{{ $slide->subtitle ?: '-' }}</td>
                    <td>{{ $slide->button_text ?: '-' }}</td>
                    <td>{{ $slide->sort_order }}</td>
                    <td>
                        @if($slide->is_active)
                            <span class="badge-active">Active</span>
                        @else
                            <span class="badge-inactive">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.slides.edit', $slide) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.slides.destroy', $slide) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this slide?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" class="text-center text-muted py-4">No slides found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
