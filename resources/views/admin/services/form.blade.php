@extends('layouts.admin')

@section('title', $service->exists ? 'Edit Service' : 'Add Service')

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.services.index') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-left"></i></a>
    <h5 class="fw-bold mb-0">{{ $service->exists ? 'Edit Service' : 'Add Service' }}</h5>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST"
              action="{{ $service->exists ? route('admin.services.update', $service) : route('admin.services.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if($service->exists) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="text-danger">*</span> <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $service->title) }}" required>
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Title <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="title_ar" class="form-control" dir="rtl"
                           value="{{ old('title_ar', $service->title_ar) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Slug <small class="text-muted">(auto-generated if empty)</small></label>
                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug', $service->slug) }}">
                    @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Category</label>
                    <select name="category_id" class="form-select">
                        <option value="">-- No Category --</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $service->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <x-icon-picker name="icon_class" :value="old('icon_class', $service->icon_class ?? '')" />
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Description <span class="badge bg-secondary">EN</span></label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $service->description) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Description <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="description_ar" class="form-control" rows="4" dir="rtl">{{ old('description_ar', $service->description_ar) }}</textarea>
                </div>
                <div class="col-12">
                    <x-image-upload name="image" label="Service Image" :current="$service->image" />
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control"
                           value="{{ old('sort_order', $service->sort_order ?? 0) }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check mb-1">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"
                               {{ old('is_active', $service->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="is_active">Active</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Save</button>
                <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
