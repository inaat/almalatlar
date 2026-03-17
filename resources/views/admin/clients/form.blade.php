@extends('layouts.admin')

@section('title', $client->exists ? 'Edit Client' : 'Add Client')

@section('content')
<div class="d-flex align-items-center gap-2 mb-3">
    <a href="{{ route('admin.clients.index') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-arrow-left"></i></a>
    <h5 class="fw-bold mb-0">{{ $client->exists ? 'Edit Client' : 'Add Client' }}</h5>
</div>

<div class="card">
    <div class="card-body">
        <form method="POST"
              action="{{ $client->exists ? route('admin.clients.update', $client) : route('admin.clients.store') }}"
              enctype="multipart/form-data">
            @csrf
            @if($client->exists) @method('PUT') @endif

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                           value="{{ old('name', $client->name) }}" required>
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Website URL</label>
                    <input type="url" name="website" class="form-control @error('website') is-invalid @enderror"
                           value="{{ old('website', $client->website) }}" placeholder="https://...">
                    @error('website') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="col-12">
                    <x-image-upload name="logo" label="Client Logo" :current="$client->logo" />
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Sort Order</label>
                    <input type="number" name="sort_order" class="form-control"
                           value="{{ old('sort_order', $client->sort_order ?? 0) }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <div class="form-check mb-1">
                        <input type="hidden" name="is_active" value="0">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"
                               {{ old('is_active', $client->is_active ?? true) ? 'checked' : '' }}>
                        <label class="form-check-label fw-semibold" for="is_active">Active</label>
                    </div>
                </div>
            </div>

            <div class="mt-4 d-flex gap-2">
                <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Save</button>
                <a href="{{ route('admin.clients.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
