{{--
    Reusable Service Cards Slick Carousel Component
    Usage:
        @include('frontend.services.service-cards', ['services' => $services, 'lang' => 'en'])
        @include('frontend.services.service-cards', ['services' => $services, 'lang' => 'ar'])
    Variables:
        $services - Collection of Service models
        $lang     - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<div class="elementor-element elementor-element-194d50e elementor-widget elementor-widget-ct_service_external"
     data-id="194d50e"
     data-element_type="widget"
     data-e-type="widget"
     data-widget_type="ct_service_external.default">
    <div class="elementor-widget-container">
        <div id="ct_service_external-194d50e" class="ct-service-external ct-service-external1 ct-slick-slider slick-boxshadow slick-dots-line1 slick-arrows-1">
            <div class="ct-carousel-inner">
                <div class="ct-slick-carousel"
                     data-arrows="true"
                     data-dots="true"
                     data-pauseOnHover=""
                     data-autoplay=""
                     data-autoplaySpeed="5000"
                     data-infinite="true"
                     data-speed="500"
                     data-colxs="1"
                     data-colsm="2"
                     data-colmd="3"
                     data-collg="4"
                     data-colxl="4"
                     data-slidesToScroll="1"
                     data-dir="{{ $lang === 'ar' ? 'true' : 'false' }}">

                    @foreach($services as $service)
                    <div class="slick-slide">
                        <div class="item--inner wow fadeInUp">
                            <div class="item--overlay">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" height="32px" style="fill:#fff">
                                    <path stroke-width="0" d="M0 0 C50 100 50 100 100 0 L100 100 0 100Z"></path>
                                </svg>
                            </div>
                            <div class="item--holder">
                                <div class="item--icon">
                                    <i aria-hidden="true" class="{{ $service->icon_class }}"></i>
                                </div>
                                <h3 class="item--title">
                                    {{ $lang === 'ar' ? $service->title_ar : $service->title }}
                                </h3>
                                <div class="item--description">
                                    {{ $lang === 'ar' ? $service->description_ar : $service->description }}
                                </div>
                                <div class="item--readmore">
                                    <a class="btn-text-gr" href="/service/{{ $service->slug }}">
                                        {{ $lang === 'ar' ? 'اقرأ المزيد' : 'Learn More' }}
                                        <i class="flaticon-right pxl-rtl-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
