{{--
    Reusable Revolution Slider Component
    Usage:
        @include('frontend.slider.slider', ['slides' => $slides, 'lang' => 'ar'])
        @include('frontend.slider.slider', ['slides' => $slides, 'lang' => 'en'])
    Variables:
        $slides  - Collection of SliderSlide models
        $lang    - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<!-- START Slider REVOLUTION SLIDER 6.7.34 -->
<rs-module-wrap id="rev_slider_3_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
<rs-module id="rev_slider_3_1" style="" data-version="6.7.34">
<rs-slides style="overflow: hidden; position: absolute;">

@foreach($slides as $slide)
<rs-slide style="position: absolute;"
    data-key="rs-{{ $loop->iteration + 4 }}"
    data-title="Slide"
    data-thumb="{{ $slide->image }}"
    data-anim="adpr:false;"
    data-in="o:0;"
    data-out="a:false;">

<img loading="lazy" decoding="async"
    src="wp-content/plugins/revslider/sr6/assets/assets/dummy.png"
    alt=""
    title="{{ $lang === 'ar' ? $slide->title_ar : $slide->title }}"
    width="1920" height="759"
    class="rev-slidebg tp-rs-img rs-lazyload"
    data-lazyload="{{ $slide->image }}"
    data-parallax="4"
    data-panzoom="d:10000;ss:110%;se:100;"
    data-no-retina>

<!--
--><rs-group
    id="slider-3-slide-{{ $loop->iteration }}-layer-1"
    data-type="group"
    data-xy="xo:30px,30px,15px,15px;y:m;yo:-50px,-50px,0,0;"
    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
    data-dim="w:900px,900px,600px,360px;h:410px,410px,310px,270px;"
    data-rsp_o="off"
    data-rsp_bd="off"
    data-frame_0="o:1;"
    data-frame_999="o:0;st:w;sR:8700;sA:9000;"
    style="z-index:13;"><!--

--><a id="slider-3-slide-{{ $loop->iteration }}-layer-5"
    class="rs-layer btn-effect1 rev-btn"
    href="{{ $slide->button_url }}" target="_self"
    data-type="button"
    data-xy="xo:-1px;y:b;yo:31px;"
    data-pos="a"
    data-text="w:normal;s:16,16,16,15;l:55,55,55,48;fw:700;"
    data-dim="minh:0px,none,none,none;"
    data-rsp_o="off"
    data-rsp_bd="off"
    data-padding="r:45,45,45,32;l:45,45,45,32;"
    data-border="bor:55px,55px,55px,55px;"
    data-frame_0="x:50;"
    data-frame_1="e:back.inOut;st:1300;sp:1000;"
    data-frame_999="o:0;st:w;sR:7400;"
    data-frame_hover="c:#fff;bgc:linear-gradient(90deg, rgba(113,20,239,1) 0%, rgba(20,117,247,1) 100%);bor:55px,55px,55px,55px;"
    style="z-index:12;background:linear-gradient(90deg, rgba(113,20,239,1) 0%, rgba(20,117,247,1) 100%);font-family:'Fira Sans';">
    {{ $lang === 'ar' ? $slide->button_text_ar : $slide->button_text }}
    <i class="flaticon flaticon-right-arrow space-left"></i>
</a><!--

--><rs-layer
    id="slider-3-slide-{{ $loop->iteration }}-layer-4"
    data-type="text"
    data-xy="yo:248px,248px,165px,143px;"
    data-pos="a"
    data-text="w:normal;s:20,20,16,14;l:30,30,28,24;"
    data-dim="w:500px,500px,420px,290px;"
    data-rsp_o="off"
    data-rsp_bd="off"
    data-frame_0="x:50;"
    data-frame_1="e:back.inOut;st:1100;sp:1000;"
    data-frame_999="o:0;st:w;sR:7600;"
    style="z-index:11;font-family:'Roboto';">
    {{ $lang === 'ar' ? $slide->description_ar : $slide->description }}
</rs-layer><!--

--><rs-layer
    id="slider-3-slide-{{ $loop->iteration }}-layer-3"
    class="slider-title-shadow1"
    data-type="text"
    data-xy="yo:68px,68px,55px,55px;"
    data-pos="a"
    data-text="w:normal;s:75,70,40,28;l:80,80,46,36;fw:700;"
    data-rsp_o="off"
    data-rsp_bd="off"
    data-frame_0="x:50;"
    data-frame_1="e:back.inOut;st:900;sp:1000;"
    data-frame_999="o:0;st:w;sR:7800;"
    style="z-index:10;font-family:'Fira Sans';">
    {{ $lang === 'ar' ? $slide->title_ar : $slide->title }}
</rs-layer><!--

--><rs-layer
    id="slider-3-slide-{{ $loop->iteration }}-layer-2"
    data-type="text"
    data-color="#1475f7"
    data-xy="xo:6px;yo:6px;"
    data-pos="a"
    data-text="w:normal;s:22,22,18,15;l:42,42,40,38;fw:700;"
    data-rsp_o="off"
    data-rsp_bd="off"
    data-padding="r:30,30,30,22;l:30,30,30,22;"
    data-border="bor:30px,30px,30px,30px;"
    data-frame_0="y:50;"
    data-frame_1="e:back.inOut;st:700;sp:1000;"
    data-frame_999="o:0;st:w;sR:8000;"
    style="z-index:9;background-color:#ffffff;font-family:'Roboto';">
    <span class="text-gradient">{{ $lang === 'ar' ? $slide->subtitle_ar : $slide->subtitle }}</span>
</rs-layer><!--

--></rs-group><!--

--><rs-layer
    id="slider-3-slide-{{ $loop->iteration }}-layer-0"
    data-type="shape"
    data-rsp_ch="on"
    data-xy="x:c;y:m;"
    data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
    data-dim="w:100%;h:100%;"
    data-basealign="slide"
    data-frame_0="x:-50,-41,-31,-19;"
    data-frame_1="st:300;sp:1000;"
    data-frame_999="o:0;st:w;sR:8700;"
    style="z-index:8;background-color:rgba(0,0,0,0);">
    <rs-bg-elem style="background: url('wp-content/uploads/2021/11/h2-bg-slider1-overlay.png') no-repeat center center; background-size: cover;"></rs-bg-elem>
</rs-layer><!--
-->
</rs-slide>
@endforeach

</rs-slides>
</rs-module>
<script>
setREVStartSize({c: 'rev_slider_3_1',rl:[1240,1024,778,480],el:[760,760,700,700],gw:[1230,1024,778,480],gh:[760,760,700,700],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider31"]!==undefined) {
    window.RS_MODULES.modules["revslider31"].once = false;
    window.revapi3 = undefined;
    if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal();
}
</script>
</rs-module-wrap>
<!-- END REVOLUTION SLIDER -->
