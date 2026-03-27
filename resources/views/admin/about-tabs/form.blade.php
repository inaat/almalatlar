@extends('layouts.admin')

@section('title', isset($tab->id) ? 'Edit Tab' : 'Add Tab')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">{{ isset($tab->id) ? 'Edit Tab' : 'Add Tab' }}</h4>
    <a href="{{ route('admin.about-tabs.index') }}" class="btn btn-outline-secondary btn-sm">
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
              action="{{ isset($tab->id) ? route('admin.about-tabs.update', $tab) : route('admin.about-tabs.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($tab->id)) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Tab Key <span class="text-danger">*</span></label>
                    <input type="text" name="tab_key" value="{{ old('tab_key', $tab->tab_key) }}"
                           class="form-control @error('tab_key') is-invalid @enderror"
                           placeholder="e.g. vision" required>
                    @error('tab_key')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label class="form-label">Title <span class="text-danger">*</span> <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="title" value="{{ old('title', $tab->title) }}"
                           class="form-control @error('title') is-invalid @enderror" required>
                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label class="form-label">Title <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="title_ar" value="{{ old('title_ar', $tab->title_ar) }}"
                           class="form-control" dir="rtl">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Subtitle <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="subtitle" value="{{ old('subtitle', $tab->subtitle) }}"
                           class="form-control @error('subtitle') is-invalid @enderror">
                    @error('subtitle')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label class="form-label">Subtitle <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="subtitle_ar" value="{{ old('subtitle_ar', $tab->subtitle_ar) }}"
                           class="form-control" dir="rtl">
                </div>

                <div class="col-12">
                    <label class="form-label">Description <span class="badge bg-secondary">EN</span></label>
                    <textarea name="description" rows="4"
                              class="form-control @error('description') is-invalid @enderror">{{ old('description', $tab->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-12">
                    <label class="form-label">Description <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="description_ar" rows="4" class="form-control" dir="rtl">{{ old('description_ar', $tab->description_ar) }}</textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Image</label>
                    <x-image-upload name="image" :existing="$tab->image ?? null" />
                    @error('image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-3">
                    <label class="form-label">Button Text <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="button_text" value="{{ old('button_text', $tab->button_text) }}"
                           class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Button Text <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="button_text_ar" value="{{ old('button_text_ar', $tab->button_text_ar) }}"
                           class="form-control" dir="rtl">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Button URL</label>
                    <input type="text" name="button_url" value="{{ old('button_url', $tab->button_url) }}"
                           class="form-control" placeholder="/about">
                </div>

                <div class="col-md-2">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $tab->sort_order ?? 0) }}"
                           class="form-control" min="0">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg"></i> {{ isset($tab->id) ? 'Update' : 'Create' }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
