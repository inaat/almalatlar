{{--
    Reusable Partner Logos Carousel Component
    Usage:
        @include('frontend.partners.partner-logos', ['partners' => $partners, 'lang' => 'en'])
        @include('frontend.partners.partner-logos', ['partners' => $partners, 'lang' => 'ar'])
    Variables:
        $partners - Collection of Partner models (name, logo, website, sort_order, is_active)
        $lang     - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<div class="elementor-element elementor-element-a0bc742 elementor-widget elementor-widget-ct_client_carousel"
     data-id="a0bc742"
     data-element_type="widget"
     data-e-type="widget"
     data-widget_type="ct_client_carousel.default">
    <div class="elementor-widget-container">
        <div class="ct-client-carousel1 ct-slick-slider style1 wow fadeInUp">
            <div class="ct-clients-list-inner">
                <div class="ct-slick-carousel ct-slick-arrow-middle"
                     data-arrows=""
                     data-dots=""
                     data-pauseOnHover=""
                     data-autoplay="true"
                     data-autoplaySpeed="5000"
                     data-infinite="true"
                     data-speed="500"
                     data-colxs="2"
                     data-colsm="3"
                     data-colmd="3"
                     data-collg="4"
                     data-colxl="4"
                     data-dir="{{ $lang === 'ar' ? 'true' : 'false' }}"
                     data-slidesToScroll="1">

                    @foreach($partners as $partner)
                    <div class="slick-slide">
                        <div class="ct-client--image img-hover-active">
                            <a href="{{ $partner->website ?: '#' }}" target="_blank" rel="noopener">
                                <img src="{{ $partner->logo }}"
                                     class="ct-client--imgmain image-one attachment-full"
                                     alt="{{ $partner->name }}">
                                <img src="{{ $partner->logo }}"
                                     class="ct-client--imghover attachment-full"
                                     alt="{{ $partner->name }}">
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
