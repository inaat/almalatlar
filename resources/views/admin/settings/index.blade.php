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
                    <label class="form-label fw-semibold">Site Name <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="site_name" class="form-control"
                           value="{{ old('site_name', $settings['site_name']->value ?? '') }}"
                           placeholder="">
                    <small class="text-muted">Used in browser tab title on all pages.</small>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Site Name <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="site_name_ar" class="form-control" dir="rtl"
                           value="{{ old('site_name_ar', $settings['site_name_ar']->value ?? '') }}"
                           placeholder="اسم الموقع بالعربية">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Site Tagline <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="site_tagline" class="form-control"
                           value="{{ old('site_tagline', $settings['site_tagline']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Site Tagline <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="site_tagline_ar" class="form-control" dir="rtl"
                           value="{{ old('site_tagline_ar', $settings['site_tagline_ar']->value ?? '') }}"
                           placeholder="الشعار بالعربية">
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
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="contact_email" class="form-control"
                           value="{{ old('contact_email', $settings['contact_email']->value ?? '') }}"
                           placeholder="Info@almalath.com">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Phone</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone', $settings['phone']->value ?? '') }}"
                           placeholder="">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Open Hours</label>
                    <input type="text" name="open_hours" class="form-control"
                           value="{{ old('open_hours', $settings['open_hours']->value ?? '') }}"
                           placeholder="Mon – Fri: 8AM – 6PM">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">CR Number</label>
                    <input type="text" name="cr_number" class="form-control"
                           value="{{ old('cr_number', $settings['cr_number']->value ?? '') }}"
                           placeholder="e.g. 7048793793">
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

    {{-- About Section --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">About Section</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Subtitle <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="about_subtitle" class="form-control"
                           value="{{ old('about_subtitle', $settings['about_subtitle']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Subtitle <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="about_subtitle_ar" class="form-control" dir="rtl"
                           value="{{ old('about_subtitle_ar', $settings['about_subtitle_ar']->value ?? '') }}" placeholder="عن شركتنا">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Heading <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="about_heading" class="form-control"
                           value="{{ old('about_heading', $settings['about_heading']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Heading <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="about_heading_ar" class="form-control" dir="rtl"
                           value="{{ old('about_heading_ar', $settings['about_heading_ar']->value ?? '') }}" placeholder="العنوان بالعربية">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Description (paragraph 1) <span class="badge bg-secondary">EN</span></label>
                    <textarea name="about_description" class="form-control" rows="4">{{ old('about_description', $settings['about_description']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Description (paragraph 1) <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="about_description_ar" class="form-control" rows="4" dir="rtl">{{ old('about_description_ar', $settings['about_description_ar']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Description (paragraph 2) <span class="badge bg-secondary">EN</span></label>
                    <textarea name="about_description_2" class="form-control" rows="4">{{ old('about_description_2', $settings['about_description_2']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Description (paragraph 2) <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="about_description_2_ar" class="form-control" rows="4" dir="rtl">{{ old('about_description_2_ar', $settings['about_description_2_ar']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">YouTube Video ID</label>
                    <input type="text" name="about_video_id" class="form-control"
                           value="{{ old('about_video_id', $settings['about_video_id']->value ?? '') }}"
                           placeholder="e.g. SF4aHwxHtZ0">
                    <small class="text-muted">The part after <code>youtube.com/watch?v=</code></small>
                </div>
            </div>
        </div>
    </div>

    {{-- Vision / Mission / Values --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Vision / Mission / Values</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Vision Heading <span class="badge bg-secondary">EN</span></label>
                    <input type="text" name="vision_heading" class="form-control"
                           value="{{ old('vision_heading', $settings['vision_heading']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Vision Heading <span class="badge bg-warning text-dark">AR</span></label>
                    <input type="text" name="vision_heading_ar" class="form-control" dir="rtl"
                           value="{{ old('vision_heading_ar', $settings['vision_heading_ar']->value ?? '') }}" placeholder="عنوان الرؤية">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Vision Text <span class="badge bg-secondary">EN</span></label>
                    <textarea name="vision_text" class="form-control" rows="3">{{ old('vision_text', $settings['vision_text']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Vision Text <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="vision_text_ar" class="form-control" rows="3" dir="rtl">{{ old('vision_text_ar', $settings['vision_text_ar']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Goal Text <span class="badge bg-secondary">EN</span></label>
                    <textarea name="goal_text" class="form-control" rows="3">{{ old('goal_text', $settings['goal_text']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Goal Text <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="goal_text_ar" class="form-control" rows="3" dir="rtl">{{ old('goal_text_ar', $settings['goal_text_ar']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Values Text <span class="badge bg-secondary">EN</span></label>
                    <textarea name="values_text" class="form-control" rows="3">{{ old('values_text', $settings['values_text']->value ?? '') }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Values Text <span class="badge bg-warning text-dark">AR</span></label>
                    <textarea name="values_text_ar" class="form-control" rows="3" dir="rtl">{{ old('values_text_ar', $settings['values_text_ar']->value ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    {{-- Services Section --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Services Section</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Subheading</label>
                    <input type="text" name="services_subheading" class="form-control"
                           value="{{ old('services_subheading', $settings['services_subheading']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Heading</label>
                    <input type="text" name="services_heading" class="form-control"
                           value="{{ old('services_heading', $settings['services_heading']->value ?? '') }}">
                </div>
            </div>
        </div>
    </div>

    {{-- Clients & Industries --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Clients & Industries Section</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label fw-semibold">Clients Heading</label>
                    <input type="text" name="clients_heading" class="form-control"
                           value="{{ old('clients_heading', $settings['clients_heading']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Industries Subheading</label>
                    <input type="text" name="industries_subheading" class="form-control"
                           value="{{ old('industries_subheading', $settings['industries_subheading']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Industries Heading</label>
                    <input type="text" name="industries_heading" class="form-control"
                           value="{{ old('industries_heading', $settings['industries_heading']->value ?? '') }}">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">Industries Description</label>
                    <input type="text" name="industries_description" class="form-control"
                           value="{{ old('industries_description', $settings['industries_description']->value ?? '') }}">
                </div>
                <div class="col-12">
                    <label class="form-label fw-semibold">CTA Text</label>
                    <textarea name="cta_text" class="form-control" rows="2">{{ old('cta_text', $settings['cta_text']->value ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    {{-- Team Section --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Team Section</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Subtitle</label>
                    <input type="text" name="team_subtitle" class="form-control"
                           value="{{ old('team_subtitle', $settings['team_subtitle']->value ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Heading</label>
                    <input type="text" name="team_heading" class="form-control"
                           value="{{ old('team_heading', $settings['team_heading']->value ?? '') }}">
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonials Section --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Testimonials Section</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Subtitle</label>
                    <input type="text" name="testimonials_subtitle" class="form-control"
                           value="{{ old('testimonials_subtitle', $settings['testimonials_subtitle']->value ?? '') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Heading</label>
                    <input type="text" name="testimonials_heading" class="form-control"
                           value="{{ old('testimonials_heading', $settings['testimonials_heading']->value ?? '') }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Label</label>
                    <input type="text" name="testimonials_label" class="form-control"
                           value="{{ old('testimonials_label', $settings['testimonials_label']->value ?? '') }}">
                </div>
            </div>
        </div>
    </div>

    {{-- Page Counters --}}
    <div class="card mb-3">
        <div class="card-header fw-semibold">Page Counters (About Page)</div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Team Members</label>
                    <input type="number" name="counter_team" class="form-control"
                           value="{{ old('counter_team', $settings['counter_team']->value ?? '') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Awards</label>
                    <input type="number" name="counter_awards" class="form-control"
                           value="{{ old('counter_awards', $settings['counter_awards']->value ?? '') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Projects</label>
                    <input type="number" name="counter_projects" class="form-control"
                           value="{{ old('counter_projects', $settings['counter_projects']->value ?? '') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">Reviews</label>
                    <input type="number" name="counter_reviews" class="form-control"
                           value="{{ old('counter_reviews', $settings['counter_reviews']->value ?? '') }}">
                </div>
            </div>
        </div>
    </div>

    {{-- Any truly extra settings still in DB --}}
    @php
        $knownKeys = [
            'site_name','site_tagline','site_logo','site_logo_footer',
            'site_name_ar','site_tagline_ar',
            'contact_email','address','phone','open_hours','cr_number',
            'address_ar','open_hours_ar',
            'footer_tagline','footer_cta_heading','footer_cta_description','copyright','map_query',
            'footer_tagline_ar','footer_cta_heading_ar','footer_cta_description_ar','copyright_ar',
            'social_facebook','social_twitter','social_linkedin','social_dribbble','social_behance','social_instagram',
            'about_subtitle','about_heading','about_description','about_description_2','about_video_id',
            'about_subtitle_ar','about_heading_ar','about_description_ar','about_description_2_ar',
            'vision_heading','vision_text','goal_text','values_text',
            'vision_heading_ar','vision_text_ar','goal_text_ar','values_text_ar',
            'services_subheading','services_heading',
            'services_subheading_ar','services_heading_ar',
            'clients_heading','clients_heading_ar',
            'industries_subheading','industries_heading','industries_description','cta_text',
            'industries_subheading_ar','industries_heading_ar','industries_description_ar','cta_text_ar',
            'team_subtitle','team_heading',
            'team_subtitle_ar','team_heading_ar',
            'testimonials_subtitle','testimonials_heading','testimonials_label',
            'testimonials_subtitle_ar','testimonials_heading_ar','testimonials_label_ar',
            'counter_team','counter_awards','counter_projects','counter_reviews',
        ];
        $extras = $settings->filter(fn($v, $k) => !in_array($k, $knownKeys));
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
