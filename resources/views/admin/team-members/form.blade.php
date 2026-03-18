@extends('layouts.admin')

@section('title', isset($item->id) ? 'Edit Team Member' : 'Add Team Member')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">{{ isset($item->id) ? 'Edit Team Member' : 'Add Team Member' }}</h4>
    <a href="{{ route('admin.team-members.index') }}" class="btn btn-outline-secondary btn-sm">
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
              action="{{ isset($item->id) ? route('admin.team-members.update', $item) : route('admin.team-members.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($item->id)) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $item->name) }}"
                           class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label class="form-label">Position</label>
                    <input type="text" name="position" value="{{ old('position', $item->position) }}"
                           class="form-control @error('position') is-invalid @enderror"
                           placeholder="e.g. Founder & CEO">
                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-2">
                    <label class="form-label">Sort Order</label>
                    <input type="number" name="sort_order" value="{{ old('sort_order', $item->sort_order ?? 0) }}"
                           class="form-control" min="0">
                </div>

                <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" rows="3"
                              class="form-control @error('description') is-invalid @enderror">{{ old('description', $item->description) }}</textarea>
                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-4">
                    <label class="form-label">Facebook URL</label>
                    <input type="text" name="facebook_url" value="{{ old('facebook_url', $item->facebook_url) }}"
                           class="form-control" placeholder="#">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Twitter URL</label>
                    <input type="text" name="twitter_url" value="{{ old('twitter_url', $item->twitter_url) }}"
                           class="form-control" placeholder="#">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Dribbble URL</label>
                    <input type="text" name="dribbble_url" value="{{ old('dribbble_url', $item->dribbble_url) }}"
                           class="form-control" placeholder="#">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Photo</label>
                    <x-image-upload name="image" :existing="$item->image ?? null" />
                    @error('image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6 d-flex align-items-end">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active"
                               {{ old('is_active', $item->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
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
