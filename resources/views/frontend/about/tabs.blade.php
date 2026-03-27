{{--
    Reusable About Tabs Component (Vision / Goal / Values)
    Usage:
        @include('frontend.about.tabs', ['aboutTabs' => $aboutTabs, 'lang' => 'en'])
        @include('frontend.about.tabs', ['aboutTabs' => $aboutTabs, 'lang' => 'ar'])
    Variables:
        $aboutTabs - Collection of AboutTab models
        $lang      - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<div class="elementor-element elementor-element-141c49e elementor-widget elementor-widget-ct_tabs"
     data-id="141c49e"
     data-element_type="widget"
     data-e-type="widget"
     data-widget_type="ct_tabs.default">
    <div class="elementor-widget-container">
        <div class="ct-tabs ct-tabs3 content-type-template" data-wow-delay="ms">
            <div class="ct-tabs--main">

                {{-- Tab Titles --}}
                <div class="ct-tabs-title">
                    @foreach($aboutTabs as $tab)
                    <span class="ct-tab-title {{ $loop->first ? 'active' : '' }}"
                          data-target="#ct_tab-{{ $tab->tab_key }}">
                        {{ $lang === 'ar' ? $tab->title_ar : $tab->title }}
                    </span>
                    @endforeach
                </div>

                {{-- Tab Contents --}}
                <div class="ct-tabs-content">
                    @foreach($aboutTabs as $tab)
                    <div class="ct-tab-content" id="ct_tab-{{ $tab->tab_key }}"
                         style="{{ $loop->first ? 'display:block;' : 'display:none;' }}">
                        <div class="elementor elementor-tab-inner">
                            <section class="elementor-section elementor-top-section elementor-section-boxed elementor-section-height-default ct-header-sticky-no">
                                <div class="elementor-container elementor-column-gap-extended">

                                    {{-- Left: Image --}}
                                    <div class="elementor-column elementor-col-50 elementor-top-column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-widget elementor-widget-ct_banner">
                                                <div class="elementor-widget-container">
                                                    <div class="ct-banner ct-banner2 wow fadeInUp" data-wow-delay="ms">
                                                        <div class="ct-banner-inner">
                                                            <div class="ct-banner-image">
                                                                <img loading="lazy" decoding="async"
                                                                     src="{{ $tab->image }}"
                                                                     alt="{{ $lang === 'ar' ? $tab->title_ar : $tab->title }}"
                                                                     class="attachment-full">
                                                                <div class="ct-banner-shape">
                                                                    <img loading="lazy" decoding="async"
                                                                         width="123" height="242"
                                                                         src="/wp-content/uploads/2021/11/h2-shape2.png"
                                                                         class="attachment-full" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Right: Text --}}
                                    <div class="elementor-column elementor-col-50 elementor-top-column">
                                        <div class="elementor-widget-wrap elementor-element-populated">

                                            {{-- Subtitle + Title --}}
                                            <div class="elementor-element elementor-widget elementor-widget-ct_heading">
                                                <div class="elementor-widget-container">
                                                    <div class="ct-heading h-align- item-st-default highlight-style1">
                                                        <div class="ct-heading--inner">
                                                            <div class="item--sub-title style-default wow fadeInUp" data-wow-delay="ms">
                                                                <span>{{ $lang === 'ar' ? $tab->subtitle_ar : $tab->subtitle }}</span>
                                                            </div>
                                                            <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
                                                                <span class="ct-text-inner">{{ $lang === 'ar' ? $tab->title_ar : $tab->title }}</span>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Description --}}
                                            <div class="elementor-element elementor-widget elementor-widget-ct_text_editor">
                                                <div class="elementor-widget-container">
                                                    <div class="ct-text-editor wow fadeInUp" data-wow-delay="ms">
                                                        <div class="ct-item--inner">
                                                            <div class="ct-text-editor elementor-clearfix">
                                                                <p>{{ $lang === 'ar' ? $tab->description_ar : $tab->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- Button --}}
                                            <div class="elementor-element pxl-button-icon-rtl elementor-widget elementor-widget-ct_button">
                                                <div class="elementor-widget-container">
                                                    <div class="ct-button-wrapper ct-button-layout1">
                                                        <a href="{{ $tab->button_url }}" class="btn btn-default wow fadeInUp icon-ps-right" data-wow-delay="ms">
                                                            <span class="ct-button-icon ct-icon-normal ct-align-icon-right">
                                                                <i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>
                                                            </span>
                                                            <span class="ct-button-text">
                                                                {{ $lang === 'ar' ? $tab->button_text_ar : $tab->button_text }}
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
