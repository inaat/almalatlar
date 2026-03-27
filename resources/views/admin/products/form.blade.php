@extends('layouts.admin')

@section('title', isset($product->id) ? 'Edit Product' : 'Add Product')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">{{ isset($product->id) ? 'Edit Product' : 'Add Product' }}</h4>
    <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-sm">
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
              action="{{ isset($product->id) ? route('admin.products.update', $product) : route('admin.products.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($product->id)) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name <span class="text-danger">*</span> <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}"
                           class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label">Name <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="name_ar" value="{{ old('name_ar', $product->name_ar) }}"
                           class="form-control" dir="rtl">
                </div>
                <div class="col-12">
                    <label class="form-label">Content <span class="badge bg-secondary">EN</span></label>
                    <textarea name="content" rows="4" class="form-control">{{ old('content', $product->content) }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Content <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="content_ar" rows="4" class="form-control" dir="rtl">{{ old('content_ar', $product->content_ar) }}</textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Image</label>
                    <x-image-upload name="image" :existing="$product->image ?? null" />
                    @error('image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Icon Class <small class="text-muted">(e.g. flaticon-desktop)</small></label>
                    <input type="text" name="icon_class" value="{{ old('icon_class', $product->icon_class) }}"
                           class="form-control @error('icon_class') is-invalid @enderror">
                    @error('icon_class')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-2">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $product->sort_order ?? 0) }}"
                           class="form-control @error('sort_order') is-invalid @enderror" min="0">
                    @error('sort_order')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-1 d-flex align-items-end">
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active"
                               {{ old('is_active', $product->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg"></i> {{ isset($product->id) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
