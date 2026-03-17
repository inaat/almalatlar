@extends('layouts.admin')

@section('title', 'Site Settings')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Site Settings</h5>
</div>

<form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
    @csrf

    {{-- General --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">General</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Site Name</label>
                    <input type="text" name="site_name" class="form-control"
                           value="{{ old('site_name', $settings['site_name']->value ?? '') }}"
                           placeholder="">
                    <small class="text-muted">Used in browser tab title on all pages.</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Site Tagline</label>
                    <input type="text" name="site_tagline" class="form-control"
                           value="{{ old('site_tagline', $settings['site_tagline']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <x-image-upload name="site_logo" label="Header Logo"
                        :current="$settings['site_logo']->value ?? null" />
                </div>
                <div class="col-md-6">
                    <x-image-upload name="site_logo_footer" label="Footer Logo"
                        :current="$settings['site_logo_footer']->value ?? null" />
                </div>
            </div>
        </div>
    </div>

    {{-- Contact Info --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Contact Info</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone', $settings['phone']->value ?? '') }}"
                           placeholder="+(966) 11 4002 03">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Open Hours</label>
                    <input type="text" name="open_hours" class="form-control"
                           value="{{ old('open_hours', $settings['open_hours']->value ?? '') }}"
                           placeholder="Mon – Sat: 8 am – 5 pm, Sunday: CLOSED">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Address</label>
                    <input type="text" name="address" class="form-control"
                           value="{{ old('address', $settings['address']->value ?? '') }}"
                           placeholder="P.O. Box 12234 - Riyadh 2949 Kingdom of Saudi Arabia">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Map Query</label>
                    <input type="text" name="map_query" class="form-control"
                           value="{{ old('map_query', $settings['map_query']->value ?? '') }}"
                           placeholder="Riyadh, Saudi Arabia">
                    <small class="text-muted">Used for the embedded Google Map.</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Footer</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label fw-semibold">Footer Tagline</label>
                    <input type="text" name="footer_tagline" class="form-control"
                           value="{{ old('footer_tagline', $settings['footer_tagline']->value ?? '') }}"
                           placeholder="Adopting the evolving new IT technologies...">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Footer CTA Heading</label>
                    <input type="text" name="footer_cta_heading" class="form-control"
                           value="{{ old('footer_cta_heading', $settings['footer_cta_heading']->value ?? '') }}"
                           placeholder="Looking for the Best IT Business Solutions?">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Footer CTA Description</label>
                    <input type="text" name="footer_cta_description" class="form-control"
                           value="{{ old('footer_cta_description', $settings['footer_cta_description']->value ?? '') }}"
                           placeholder="As a app web crawler expert...">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Copyright Text</label>
                    <input type="text" name="copyright" class="form-control"
                           value="{{ old('copyright', $settings['copyright']->value ?? '') }}"
                           placeholder="Al Malath Al Arabia. All rights reserved.">
                </div>
            </div>
        </div>
    </div>

    {{-- Social Media --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Social Media</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold"><i class="bi bi-facebook me-1"></i>Facebook URL</label>
                    <input type="url" name="social_facebook" class="form-control"
                           value="{{ old('social_facebook', $settings['social_facebook']->value ?? '') }}" placeholder="https://...">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold"><i class="bi bi-twitter-x me-1"></i>Twitter / X URL</label>
                    <input type="url" name="social_twitter" class="form-control"
                           value="{{ old('social_twitter', $settings['social_twitter']->value ?? '') }}" placeholder="https://...">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold"><i class="bi bi-linkedin me-1"></i>LinkedIn URL</label>
                    <input type="url" name="social_linkedin" class="form-control"
                           value="{{ old('social_linkedin', $settings['social_linkedin']->value ?? '') }}" placeholder="https://...">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold"><i class="bi bi-instagram me-1"></i>Instagram URL</label>
                    <input type="url" name="social_instagram" class="form-control"
                           value="{{ old('social_instagram', $settings['social_instagram']->value ?? '') }}" placeholder="https://...">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Dribbble URL</label>
                    <input type="url" name="social_dribbble" class="form-control"
                           value="{{ old('social_dribbble', $settings['social_dribbble']->value ?? '') }}" placeholder="https://...">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Behance URL</label>
                    <input type="url" name="social_behance" class="form-control"
                           value="{{ old('social_behance', $settings['social_behance']->value ?? '') }}" placeholder="https://...">
                </div>
            </div>
        </div>
    </div>

    {{-- Any extra settings already in DB --}}
    @php
        $knownKeys = ['site_name','site_tagline','site_logo','site_logo_footer','address','phone','open_hours','footer_tagline','footer_cta_heading','footer_cta_description','copyright','map_query','social_facebook','social_twitter','social_linkedin','social_dribbble','social_behance','social_instagram'];
        $extras = $settings->except($knownKeys);
    @endphp
    @if($extras->count())
    <div class="card mb-3">
        <div class="card-header fw-semibold">Other Settings</div>
        <div class="card-body">
            <div class="row g-3">
                @foreach($extras as $key => $setting)
                <div class="col-md-6">
                    <label class="form-label fw-semibold">{{ $key }}</label>
                    @if(strlen($setting->value ?? '') > 100)
                        <textarea name="{{ $key }}" class="form-control" rows="3">{{ old($key, $setting->value) }}</textarea>
                    @else
                        <input type="text" name="{{ $key }}" class="form-control"
                               value="{{ old($key, $setting->value) }}">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <div class="d-flex gap-2 mb-4">
        <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i> Save All Settings</button>
    </div>
</form>
@endsection
