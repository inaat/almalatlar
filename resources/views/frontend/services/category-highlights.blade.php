{{--
    Reusable Service Category Highlights Component
    Usage:
        @include('frontend.services.category-highlights', ['categories' => $categories, 'lang' => 'ar'])
        @include('frontend.services.category-highlights', ['categories' => $categories, 'lang' => 'en'])
    Variables:
        $categories - Collection of ServiceCategory models
        $lang       - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<section class="elementor-section elementor-inner-section elementor-element elementor-element-ea920ca elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-sticky-no">
    <div class="elementor-container elementor-column-gap-extended">

        @foreach($categories as $category)
        @php $delay = $loop->index * 40; @endphp
        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element ct-column-none col-offset-none col-color-offset-none">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-widget elementor-widget-ct_fancy_box">
                    <div class="elementor-widget-container">
                        <div class="ct-fancy-box ct-fancy-box-layout5 wow fadeInUp"
                             data-wow-delay="{{ $delay }}ms">
                            <div class="item--inner">
                                <div class="item--icon">
                                    <i aria-hidden="true" class="{{ $category->icon_class }}"></i>
                                </div>
                                <h4 class="item--title">
                                    {{ $lang === 'ar' ? $category->name_ar : $category->name }}
                                </h4>
                                <div class="item--overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
