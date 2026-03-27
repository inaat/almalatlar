@extends('layouts.admin')

@section('title', isset($item->id) ? 'Edit History Item' : 'Add History Item')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">{{ isset($item->id) ? 'Edit History Item' : 'Add History Item' }}</h4>
    <a href="{{ route('admin.about-history.index') }}" class="btn btn-outline-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Back
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <form method="POST"
              action="{{ isset($item->id) ? route('admin.about-history.update', $item) : route('admin.about-history.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($item->id)) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Year <span class="text-danger">*</span></label>
                    <input type="text" name="year" value="{{ old('year', $item->year) }}"
                           class="form-control @error('year') is-invalid @enderror"
                           placeholder="e.g. 2011" required>
                    @error('year')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-5">
                    <label class="form-label">Title <span class="text-danger">*</span> <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="title" value="{{ old('title', $item->title) }}"
                           class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-5">
                    <label class="form-label">Title <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="title_ar" value="{{ old('title_ar', $item->title_ar) }}"
                           class="form-control" dir="rtl">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Color</label>
                    <input type="color" name="color" value="{{ old('color', $item->color ?? '#3F69B1') }}"
                           class="form-control form-control-color">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}"
                           class="form-control" min="0">
                </div>

                <div class="col-12">
                    <label class="form-label">Description <span class="badge bg-secondary">EN</span></label>
                    <textarea name="description" rows="3"
                              class="form-control @error('description') is-invalid @enderror">{{ old('description', $item->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-12">
                    <label class="form-label">Description <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="description_ar" rows="3" class="form-control" dir="rtl">{{ old('description_ar', $item->description_ar) }}</textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Image</label>
                    <x-image-upload name="image" :existing="$item->image ?? null" />
                    @error('image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg"></i> {{ isset($item->id) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
