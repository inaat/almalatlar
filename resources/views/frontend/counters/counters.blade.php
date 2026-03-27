{{--
    Reusable Counters Section Component
    Usage:
        @include('frontend.counters.counters', ['counters' => $counters, 'lang' => 'en'])
        @include('frontend.counters.counters', ['counters' => $counters, 'lang' => 'ar'])
    Variables:
        $counters - Collection of Counter models (value, suffix, label, label_ar, sort_order)
        $lang     - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<section class="elementor-section elementor-top-section elementor-element elementor-element-82014d1 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none"
         data-id="82014d1" data-element_type="section" data-e-type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-extended">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d963b3 ct-column-none col-offset-none col-color-offset-none"
             data-id="7d963b3" data-element_type="column" data-e-type="column">
            <div class="elementor-widget-wrap elementor-element-populated">

                {{-- Top shape decoration --}}
                <div class="elementor-element elementor-element-ed8ae32 elementor-widget elementor-widget-ct_particle_animate"
                     data-id="ed8ae32" data-element_type="widget" data-e-type="widget" data-widget_type="ct_particle_animate.default">
                    <div class="elementor-widget-container">
                        <div class="ct-particle-animate el-move-inner img-below-content" data-wow-delay="ms">
                            <div id="ct_particle_animate-ed8ae320" class="top-right shape-animate5">
                                <div class="ct-inline-css" data-css="
                                    .ct-particle-animate #ct_particle_animate-ed8ae320 {
                                        right: -30px; top: -130px;
                                    }">
                                </div>
                                <img loading="lazy" decoding="async" width="99" height="170"
                                     src="wp-content/uploads/2021/11/h2-shape4.png"
                                     class="attachment-full" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Section Heading --}}
                <div class="elementor-element elementor-element-b1cc0de elementor-widget elementor-widget-ct_heading"
                     data-id="b1cc0de" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
                    <div class="elementor-widget-container">
                        <div id="ct_heading-b1cc0de" class="ct-heading h-align-center item-st-default highlight-style1">
                            <div class="ct-heading--inner">
                                <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
                                    <span class="ct-text-inner">
                                        {{ $lang === 'ar'
                                            ? '"مجتمع حيوي واقتصاد مزدهر ووطن طموح"'
                                            : 'vibrant society, thriving economy, ambitious nation&#8221;' }}
                                    </span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Counters Grid --}}
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-3fcf7e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none"
                         data-id="3fcf7e1" data-element_type="section" data-e-type="section">
                    <div class="elementor-container elementor-column-gap-extended">

                        @foreach($counters as $counter)
                        @php
                            $delay = $loop->index * 40;
                            $colIds  = ['9e558f5','556ddd4','b67ec38','e0f33ac'];
                            $widgIds = ['2e3514a','94436e0','9d19ef0','d453660'];
                            $colId   = $colIds[$loop->index]  ?? '';
                            $widgId  = $widgIds[$loop->index] ?? '';
                        @endphp
                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-{{ $colId }} ct-column-none col-offset-none col-color-offset-none"
                             data-id="{{ $colId }}" data-element_type="column" data-e-type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-{{ $widgId }} ct-counter-layout1 elementor-widget elementor-widget-ct_counter"
                                     data-id="{{ $widgId }}" data-element_type="widget" data-e-type="widget" data-widget_type="ct_counter.default">
                                    <div class="elementor-widget-container">
                                        <div class="ct-counter ct-counter-layout1 wow fadeInUp style2"
                                             data-wow-delay="{{ $delay }}ms">
                                            <div class="ct-counter-inner">
                                                <div class="ct-counter-meta">
                                                    <div class="ct-counter-icon"></div>
                                                    <div class="ct-counter-number">
                                                        <span class="ct-counter-number-value"
                                                              data-duration="2000"
                                                              data-to-value="{{ $counter->value }}"
                                                              data-delimiter="">1</span>
                                                        @if($counter->suffix)
                                                            <span class="ct-counter-number-suffix">{{ $counter->suffix }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ct-counter-title">
                                                    {{ $lang === 'ar' ? $counter->label_ar : $counter->label }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </section>

                {{-- CTA Text --}}
                <div class="elementor-element elementor-element-47a4d04 elementor-widget elementor-widget-ct_text_editor"
                     data-id="47a4d04" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
                    <div class="elementor-widget-container">
                        <div id="ct_text_editor-47a4d04" class="ct-text-editor wow fadeInUp" data-wow-delay="ms">
                            <div class="ct-item--inner">
                                <div class="ct-text-editor elementor-clearfix">
                                    <p>
                                        @if($lang === 'ar')
                                            لديك أشياء أفضل للقيام بها بدلاً من القلق بشأن تكنولوجيا المعلومات لشركتك الصغيرة.
                                            <a href="contact/index.html">دعونا نناقش حول المشروع.</a>
                                        @else
                                            You have better things to do than worry about IT for your small business.
                                            <a href="contact/index.html">Let's Discuss about Project.</a>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bottom shape decoration --}}
                <div class="elementor-element elementor-element-0bacb4a elementor-widget elementor-widget-ct_particle_animate"
                     data-id="0bacb4a" data-element_type="widget" data-e-type="widget" data-widget_type="ct_particle_animate.default">
                    <div class="elementor-widget-container">
                        <div class="ct-particle-animate el-move-inner img-below-content" data-wow-delay="ms">
                            <div id="ct_particle_animate-0bacb4a0" class="bottom-left shape-animate2">
                                <div class="ct-inline-css" data-css="
                                    .ct-particle-animate #ct_particle_animate-0bacb4a0 {
                                        left: -10px; bottom: -108px;
                                    }">
                                </div>
                                <img loading="lazy" decoding="async" width="182" height="98"
                                     src="wp-content/uploads/2021/11/h2-shape3.png"
                                     class="attachment-full" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
