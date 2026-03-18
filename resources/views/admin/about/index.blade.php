@extends('layouts.admin')

@section('title', 'About Page Content')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">About Page Content</h5>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<form method="POST" action="{{ route('admin.about.update') }}">
    @csrf

    {{-- Company Overview --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Company Overview</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="about_subtitle" class="form-control"
                           value="{{ old('about_subtitle', $settings['about_subtitle']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Heading</label>
                    <input type="text" name="about_heading" class="form-control"
                           value="{{ old('about_heading', $settings['about_heading']->value ?? '') }}">
                </div>
                <div class="col-12">
                    <label class="form-label">Description (First Paragraph)</label>
                    <textarea name="about_description" rows="4" class="form-control">{{ old('about_description', $settings['about_description']->value ?? '') }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Description (Second Paragraph)</label>
                    <textarea name="about_description_2" rows="4" class="form-control">{{ old('about_description_2', $settings['about_description_2']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">YouTube Video ID</label>
                    <input type="text" name="about_video_id" class="form-control"
                           value="{{ old('about_video_id', $settings['about_video_id']->value ?? '') }}"
                           placeholder="e.g. SF4aHwxHtZ0">
                </div>
            </div>
        </div>
    </div>

    {{-- Industries --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Industries Section</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Subtitle</label>
                    <input type="text" name="industries_subheading" class="form-control"
                           value="{{ old('industries_subheading', $settings['industries_subheading']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Heading</label>
                    <input type="text" name="industries_heading" class="form-control"
                           value="{{ old('industries_heading', $settings['industries_heading']->value ?? '') }}">
                </div>
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea name="industries_description" rows="2" class="form-control">{{ old('industries_description', $settings['industries_description']->value ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    {{-- Vision / Goal / Values --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Vision / Goal / Values</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label">Vision Heading</label>
                    <input type="text" name="vision_heading" class="form-control"
                           value="{{ old('vision_heading', $settings['vision_heading']->value ?? '') }}">
                </div>
                <div class="col-12">
                    <label class="form-label">Vision Text</label>
                    <textarea name="vision_text" rows="3" class="form-control">{{ old('vision_text', $settings['vision_text']->value ?? '') }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Goal Text</label>
                    <textarea name="goal_text" rows="3" class="form-control">{{ old('goal_text', $settings['goal_text']->value ?? '') }}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label">Values Text</label>
                    <textarea name="values_text" rows="3" class="form-control">{{ old('values_text', $settings['values_text']->value ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4">
        <button type="submit" class="btn btn-primary">
            <i class="bi bi-check-lg"></i> Save
        </button>
    </div>
</form>
@endsection
