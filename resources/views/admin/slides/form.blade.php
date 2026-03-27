@extends('layouts.admin')

@section('title', $slide->exists ? 'Edit Slide' : 'Add Slide')

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.slides.index') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-left"></i></a>
    <h5 class="fw-bold mb-0">{{ $slide->exists ? 'Edit Slide' : 'Add Slide' }}</h5>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST"
              action="{{ $slide->exists ? route('admin.slides.update', $slide) : route('admin.slides.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if($slide->exists) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $slide->title) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="title_ar" class="form-control" dir="rtl" value="{{ old('title_ar', $slide->title_ar) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Subtitle <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $slide->subtitle) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Subtitle <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="subtitle_ar" class="form-control" dir="rtl" value="{{ old('subtitle_ar', $slide->subtitle_ar) }}">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Description <span class="badge bg-secondary">EN</span></label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description', $slide->description) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Description <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="description_ar" class="form-control" rows="3" dir="rtl">{{ old('description_ar', $slide->description_ar) }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Button Text <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $slide->button_text) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Button Text <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="button_text_ar" class="form-control" dir="rtl" value="{{ old('button_text_ar', $slide->button_text_ar) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Button URL</label>
                    <input type="text" name="button_url" class="form-control" value="{{ old('button_url', $slide->button_url) }}" placeholder="https://...">
                </div>
                <div class="col-12">
                    <x-image-upload name="image" label="Slide Image" :current="$slide->image" />
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control"
                           value="{{ old('sort_order', $slide->sort_order ?? 0) }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check mb-1">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"
                               {{ old('is_active', $slide->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="is_active">Active</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Save</button>
                <a href="{{ route('admin.slides.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
