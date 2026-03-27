@extends('layouts.app')

@section('content')
@if(app()->getLocale() === 'ar')
        <div id="content" class="site-content">
        	<div class="content-inner">
    <div class="container content-container">
        <div class="row content-row">
            <div id="primary" class="content-area content-full-width col-12">
                <main id="main" class="site-main">
                    
<article id="post-2392" class="post-2392 page type-page status-publish hentry">
    <div class="entry-content clearfix">
        		<div data-elementor-type="wp-page" data-elementor-id="2392" class="elementor elementor-2392">
				        <section class="elementor-section elementor-top-section elementor-element elementor-element-65f6353 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="65f6353" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7d7049 ct-column-none col-offset-none col-color-offset-none" data-id="a7d7049" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-db72988 elementor-widget elementor-widget-slider_revolution" data-id="db72988" data-element_type="widget" data-e-type="widget" data-widget_type="slider_revolution.default">
				<div class="elementor-widget-container">
					
		<div class="wp-block-themepunch-revslider">
			<!-- START Slider 2 REVOLUTION SLIDER 6.7.34 -->
			<rs-fullwidth-wrap id="rev_slider_3_1_forcefullwidth" style="margin-top:0px;margin-bottom:0px;">@include('frontend.slider.slider', ['slides' => $slides, 'lang' => 'ar'])
<!-- END REVOLUTION SLIDER -->
</div>

						</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-26520ec elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="26520ec" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1073px; right: -15px;">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5086957 ct-column-none col-offset-none col-color-offset-none" data-id="5086957" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
                @include('frontend.services.category-highlights', ['categories' => $categories, 'lang' => 'ar'])
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-68191f2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="68191f2" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8016cc7 ct-column-none col-offset-none col-color-offset-none" data-id="8016cc7" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-5b3d080 elementor-widget__width-auto elementor-widget elementor-widget-ct_heading" data-id="5b3d080" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-5b3d080" class="ct-heading h-align- item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    
  
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
        <span class="ct-text-inner">انضم إلى أكثر من 15000 عميل سعيد!</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3e329cd elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider animated fadeInUp" data-id="3e329cd" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8370284 ct-column-none col-offset-none col-color-offset-none" data-id="8370284" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		@include('frontend.partners.partner-logos', ['partners' => $partners, 'lang' => 'ar'])
		            </div>
        </div>
                    </div>
        </section>
                    </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-e7d3104 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="e7d3104" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-96a3404 ct-column-none col-offset-none col-color-offset-none" data-id="96a3404" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-8aa1330 elementor-widget__width-auto elementor-widget elementor-widget-ct_button_video" data-id="8aa1330" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button_video.default">
				<div class="elementor-widget-container">
					    <div id="ct_button_video-8aa1330" class="ct-button-video2 wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
        
        <div class="ct-video-image">
            <img loading="lazy" decoding="async" width="536" height="888" src="https://almalath.com/wp-content/uploads/2023/07/Assets-1.png" class="lazy-hidden attachment-full" alt=""><noscript><img loading="lazy" decoding="async" width="536" height="888" src="wp-content/uploads/2024/08/WhatsApp-Image-2024-08-22-at-7.40.17-PM.jpg" class="attachment-full" alt="" /></noscript>        </div>
                    <a class="el-btn-video" href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                <i class="fa fa-play"></i>
            </a>
                            <div class="ct-video-shape">
                <img loading="lazy" decoding="async" width="224" height="242" src="https://almalath.com/wp-content/uploads/2021/11/h2-video-shape1.png" class="lazy-hidden attachment-full" alt=""><noscript><img loading="lazy" decoding="async" width="224" height="242" src="wp-content/uploads/2021/11/h2-video-shape1.png" class="attachment-full" alt="" /></noscript>            </div>
            </div>
				</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-60205d7 ct-column-none col-offset-none col-color-offset-none" data-id="60205d7" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-bbf82a2 elementor-widget elementor-widget-ct_particle_animate" data-id="bbf82a2" data-element_type="widget" data-e-type="widget" data-widget_type="ct_particle_animate.default">
				<div class="elementor-widget-container">
						<div class="ct-particle-animate el-move-inner img-below-content" data-wow-delay="ms">
				    <div id="ct_particle_animate-bbf82a20" class="top-right shape-animate5">
		    				    			    	
			    			    			    		    	<img loading="lazy" decoding="async" width="123" height="242" src="https://almalath.com/wp-content/uploads/2021/11/h2-shape2.png" class="lazy-hidden attachment-full" alt=""><noscript><img loading="lazy" decoding="async" width="123" height="242" src="wp-content/uploads/2021/11/h2-shape2.png" class="attachment-full" alt="" /></noscript>		
		    </div>
			</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2503ff8 elementor-widget elementor-widget-ct_heading" data-id="2503ff8" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-2503ff8" class="ct-heading h-align- item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    
      <div class="item--text-below">
      
          </div>
  
			<div class="item--sub-title style-box-gr wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
                        <span>
                نبذة عنا  ~            </span>
                    </div>
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
        <span class="ct-text-inner">يختار         <cite class="ct-text-highlight">
            الأفضل        </cite>
         شركة خدمات تكنولوجيا المعلومات</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-580808e elementor-widget elementor-widget-ct_text_editor" data-id="580808e" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
				<div class="elementor-widget-container">
					<div id="ct_text_editor-580808e" class="ct-text-editor wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
	<div class="ct-item--inner">
		
		<div class="ct-text-editor elementor-clearfix">
			<p>تشهد الملاذ العربية منذ تأسيسها في عام 2011 نموّا ملحوظًا جعلها تتبوء مكانًا مرموقًا ضمن كبرى شركات تكامل حلول تكنولوجيا المعلومات في المملكة. تتمثل أهم نقاط قوتنا في جودة فريقنا الذي يضم خبراء محنكين يتمتعون بخبرة تزيد عن 30 عامًا في مجال تكنولوجيا المعلومات. تعزو قوة أساسنا إلى إنجازاتنا التاريخية في تخصصات عملنا ومنها على سبيل المثال أجهزة تكنولوجيا المعلومات والبرمجيات والخدمات وتطوير مفاهيم الأعمال والاستشارات. تسعى الشركات إلى التميز كجزءً  حيويًّا في أعمالها. وهذا يعني إضافة الجودة لكل ما تقوم به. وانطلاقًا من هذا الهدف، حرصنا على تقديم خدمات فائقة تضمن نجاح كامل ومستدام لعملائنا.</p>		
		</div>
	</div>
</div>				</div>
				</div>
				<div class="elementor-element elementor-element-cd504c0 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="cd504c0" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
		        <section class="elementor-section elementor-inner-section elementor-element elementor-element-515d7b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="515d7b5" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c88d5b5 ct-column-none col-offset-none col-color-offset-none" data-id="c88d5b5" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-b4e1b9d elementor-widget elementor-widget-ct_fancy_box" data-id="b4e1b9d" data-element_type="widget" data-e-type="widget" data-widget_type="ct_fancy_box.default">
				<div class="elementor-widget-container">
					<div id="ct_fancy_box-b4e1b9d" class="ct-fancy-box ct-fancy-box-layout3 wow fadeInUp style2" data-wow-delay="40ms" style="visibility: hidden; animation-delay: 40ms; animation-name: none;">
    
    <div class="item--inner">
        <div class="item--meta">
                            <div class="item--icon icon-psb">
                    <i aria-hidden="true" class="flaticon flaticon-operation"></i>                </div>
                                    <h4 class="item--title">
                دعم تقني            </h4>
        </div>
        <div class="item--description el-empty"></div>
    </div>
</div>				</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
        		<div class="elementor-element elementor-element-2200bc1 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="2200bc1" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-d42ae32 elementor-widget__width-auto elementor-widget elementor-widget-ct_button" data-id="d42ae32" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button.default">
				<div class="elementor-widget-container">
					<div id="ct_button-d42ae32" class="ct-button-wrapper ct-button-layout1">
    

            <span class="ct-icon-active"></span>
        <a href="contact/index.html" class="btn btn-default wow fadeInUp icon-ps-right" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
                            <span class="ct-button-icon ct-icon-normal ct-align-icon-right">
                <i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>            </span>
                <span class="ct-button-text">
            اتصل بنا!        </span>
    </a>
</div>				</div>
				</div>
				<div class="elementor-element elementor-element-536aaff elementor-widget__width-auto elementor-widget elementor-widget-ct_info_box" data-id="536aaff" data-element_type="widget" data-e-type="widget" data-widget_type="ct_info_box.default">
				<div class="elementor-widget-container">
					<div id="ct_info_box-536aaff" class="ct-info-box ct-info-box2 wow fadeInUp style1" data-wow-delay="40ms" style="visibility: hidden; animation-delay: 40ms; animation-name: none;">
    
	<div class="ct-infobox-inner">
                    <div class="item--icon el-bounce">
                <i aria-hidden="true" class="flaticon flaticon-phone-call"></i>                                    <a class="ct-info-link" href="tel:9112434672345"></a>
                            </div>
        		<div class="item--meta">
    		<div class="item--title el-empty">اتصل للحصول على المساعدة</div>
    		<div class="item--phone el-empty">+(966) 11 4002 03</div>
        </div>
	</div>
</div>				</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-0cbc6a3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="0cbc6a3" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1073px; right: -15px;">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-502a7af ct-column-none col-offset-none col-color-offset-none" data-id="502a7af" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-7d32c64 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="7d32c64" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9666a74 ct-column-none col-offset-none col-color-offset-none" data-id="9666a74" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bf06b79 ct-column-none col-offset-none col-color-offset-none" data-id="bf06b79" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-08a4c98 elementor-widget elementor-widget-ct_heading" data-id="08a4c98" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-08a4c98" class="ct-heading h-align-center item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    
      <div class="item--text-below">
      
          </div>
  
			<div class="item--sub-title style-box-gr wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
                        <span>
                ~ خدماتنا الرائعة ~            </span>
                    </div>
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
        <span class="ct-text-inner"> نسعد          <cite class="ct-text-highlight">
            بخدمتكم        </cite>
         في كل وقت .</span>    </h3>
  </div>
</div>
				</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8f2f152 ct-column-none col-offset-none col-color-offset-none" data-id="8f2f152" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                    </div>
        </section>
        		@include('frontend.services.service-cards', ['services' => $services, 'lang' => 'ar'])
		            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-b9098e2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="b9098e2" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1073px; right: -15px;">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68c4d3f ct-column-none col-offset-none col-color-offset-none" data-id="68c4d3f" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-43be3ab elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="43be3ab" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ff4167 ct-column-none col-offset-none col-color-offset-none" data-id="1ff4167" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-422aedf ct-column-none col-offset-none col-color-offset-none" data-id="422aedf" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-63544ea elementor-widget elementor-widget-ct_heading" data-id="63544ea" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-63544ea" class="ct-heading h-align-center item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    
      <div class="item--text-below">
      
          </div>
  
			<div class="item--sub-title style-box-gr wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
                        <span>
                ~ لماذا تختارنا؟ ~            </span>
                    </div>
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
        <span class="ct-text-inner">نحن نخدم على نطاق واسع         <cite class="ct-text-highlight">
            متنوع        </cite>
         من الصناعات</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3a1f269 elementor-widget elementor-widget-ct_text_editor" data-id="3a1f269" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
				<div class="elementor-widget-container">
					<div id="ct_text_editor-3a1f269" class="ct-text-editor wow fadeInUp" data-wow-delay="ms" style="visibility: hidden; animation-name: none;">
	<div class="ct-item--inner">
		
		<div class="ct-text-editor elementor-clearfix">
			وفيما يلي مجرد عينة صغيرة من بعض الصناعات التي نخدمها.		
		</div>
	</div>
</div>				</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1c57b11 ct-column-none col-offset-none col-color-offset-none" data-id="1c57b11" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                    </div>
        </section>
        		@include('frontend.about.tabs', ['aboutTabs' => $aboutTabs, 'lang' => 'ar'])
		            </div>
        </div>
                    </div>
        </section>
                @include('frontend.counters.counters', ['counters' => $counters, 'lang' => 'ar'])
        		</div>
		    </div><!-- .entry-content -->
</article><!-- #post-2392 -->
                </main><!-- #main -->
            </div><!-- #primary -->

            
        </div>
    </div>
	</div><!-- #content inner -->
</div><!-- #content -->
@else
        <div id="content" class="site-content">
        	<div class="content-inner">
    <div class="container content-container">
        <div class="row content-row">
            <div id="primary"  class="content-area content-full-width col-12">
                <main id="main" class="site-main">
                    
<article id="post-2392" class="post-2392 page type-page status-publish hentry">
    <div class="entry-content clearfix">
        		<div data-elementor-type="wp-page" data-elementor-id="2392" class="elementor elementor-2392">
				        <section class="elementor-section elementor-top-section elementor-element elementor-element-65f6353 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="65f6353" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-no ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7d7049 ct-column-none col-offset-none col-color-offset-none" data-id="a7d7049" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-db72988 elementor-widget elementor-widget-slider_revolution" data-id="db72988" data-element_type="widget" data-e-type="widget" data-widget_type="slider_revolution.default">
				<div class="elementor-widget-container">
					
		<div class="wp-block-themepunch-revslider">
			<!-- START Slider 2 REVOLUTION SLIDER 6.7.34 --><p class="rs-p-wp-fix"></p>
			@include('frontend.slider.slider', ['slides' => $slides, 'lang' => 'en'])
<!-- END REVOLUTION SLIDER -->
</div>

						</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-26520ec elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="26520ec" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5086957 ct-column-none col-offset-none col-color-offset-none" data-id="5086957" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
                @include('frontend.services.category-highlights', ['categories' => $categories, 'lang' => 'en'])
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-68191f2 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="68191f2" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8016cc7 ct-column-none col-offset-none col-color-offset-none" data-id="8016cc7" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-5b3d080 elementor-widget__width-auto elementor-widget elementor-widget-ct_heading" data-id="5b3d080" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-5b3d080" class="ct-heading h-align- item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    <div class="ct-inline-css"  data-css="
                                ">
    </div>
  
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
        <span class="ct-text-inner">Join over +15,000 happy clients!</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3e329cd elementor-widget__width-auto elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="3e329cd" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8370284 ct-column-none col-offset-none col-color-offset-none" data-id="8370284" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		@include('frontend.partners.partner-logos', ['partners' => $partners])
		            </div>
        </div>
                    </div>
        </section>
                    </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-e7d3104 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="e7d3104" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-96a3404 ct-column-none col-offset-none col-color-offset-none" data-id="96a3404" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-8aa1330 elementor-widget__width-auto elementor-widget elementor-widget-ct_button_video" data-id="8aa1330" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button_video.default">
				<div class="elementor-widget-container">
					    <div id="ct_button_video-8aa1330" class="ct-button-video2 wow fadeInUp" data-wow-delay="ms">
        <div class="ct-inline-css"  data-css="
                            #ct_button_video-8aa1330.ct-button-video2 .el-btn-video {
                    background-image: -webkit-gradient(linear, left top, right top, from(#3F69B1), to(#3F69B1));
                    background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B1);
                    background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B1);
                    background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B1);
                    background-image: -o-linear-gradient(to left, #3F69B1, #3F69B1);
                    background-image: linear-gradient(to left, #3F69B1, #3F69B1);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B1', gradientType='1');
                }
            ">
        </div>
        <div class="ct-video-image">
            <img loading="lazy" decoding="async" width="536" height="888" src="wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://almalath.com/wp-content/uploads/2023/07/Assets-1.png" class="lazy lazy-hidden attachment-full" alt="" /><noscript><img loading="lazy" decoding="async" width="536" height="888" src="wp-content/uploads/2023/07/Assets-1.png" class="attachment-full" alt="" /></noscript>        </div>
                    <a class="el-btn-video" href="https://www.youtube.com/watch?v=SF4aHwxHtZ0">
                <i class="fa fa-play"></i>
            </a>
                            <div class="ct-video-shape">
                <img loading="lazy" decoding="async" width="224" height="242" src="wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://almalath.com/wp-content/uploads/2021/11/h2-video-shape1.png" class="lazy lazy-hidden attachment-full" alt="" /><noscript><img loading="lazy" decoding="async" width="224" height="242" src="wp-content/uploads/2021/11/h2-video-shape1.png" class="attachment-full" alt="" /></noscript>            </div>
            </div>
				</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-60205d7 ct-column-none col-offset-none col-color-offset-none" data-id="60205d7" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-bbf82a2 elementor-widget elementor-widget-ct_particle_animate" data-id="bbf82a2" data-element_type="widget" data-e-type="widget" data-widget_type="ct_particle_animate.default">
				<div class="elementor-widget-container">
						<div class="ct-particle-animate el-move-inner img-below-content " data-wow-delay="ms">
				    <div id="ct_particle_animate-bbf82a20" class="top-right shape-animate5" >
		    				    			    	<div class="ct-inline-css"  data-css="
			            .ct-particle-animate #ct_particle_animate-bbf82a20 {
			                right: -230px;
			                top: -140px;
			            }">
			        </div>
			    			    			    		    	<img loading="lazy" decoding="async" width="123" height="242" src="wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="https://almalath.com/wp-content/uploads/2021/11/h2-shape2.png" class="lazy lazy-hidden attachment-full" alt="" /><noscript><img loading="lazy" decoding="async" width="123" height="242" src="wp-content/uploads/2021/11/h2-shape2.png" class="attachment-full" alt="" /></noscript>		
		    </div>
			</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2503ff8 elementor-widget elementor-widget-ct_heading" data-id="2503ff8" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-2503ff8" class="ct-heading h-align- item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    <div class="ct-inline-css"  data-css="
                            #ct_heading-2503ff8.ct-heading .item--sub-title span {
                background-image: -webkit-gradient(linear, left top, left bottom, from(#3F69B1), to(#3F69B161));
                background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B161);
                background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B161);
                background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B161);
                background-image: -o-linear-gradient(to left, #3F69B1, #3F69B161);
                background-image: linear-gradient(to left, #3F69B1, #3F69B161);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B161');
                background-color: transparent;
                background-clip: text;
                -o-background-clip: text;
                -ms-background-clip: text;
                -moz-background-clip: text;
                -webkit-background-clip: text;
                text-fill-color: transparent;
                -o-text-fill-color: transparent;
                -ms-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
                -webkit-text-fill-color: transparent;
            }
                        ">
    </div>
      <div class="item--text-below">
      <div class="ct-inline-css"  data-css="
        ">
      </div>
          </div>
  
			<div class="item--sub-title style-box-gr wow fadeInUp" data-wow-delay="ms">
                        <span>
                About Our Company ~            </span>
                    </div>
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
        <span class="ct-text-inner">Choose         <cite class="ct-text-highlight">
            The Best        </cite>
         IT Service Company</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-580808e elementor-widget elementor-widget-ct_text_editor" data-id="580808e" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
				<div class="elementor-widget-container">
					<div id="ct_text_editor-580808e" class="ct-text-editor wow fadeInUp" data-wow-delay="ms">
	<div class="ct-item--inner">
		<div class="ct-inline-css"  data-css="
	        			">

	    </div>
		<div class="ct-text-editor elementor-clearfix">
			<p>Since its founding in 2011 Al Malath Al Arabia has grown to be one of the major IT solutions integrators in the Kingdom. Our most key strength is the quality of our team of seasoned experts with over 30 years in the IT space. We have a strong foundation built on legacy including specialties in IT Hardware, Software and Services, Business Concepts Development, and Consultancy.</p>		
		</div>
	</div>
</div>				</div>
				</div>
				<div class="elementor-element elementor-element-cd504c0 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="cd504c0" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
		        <section class="elementor-section elementor-inner-section elementor-element elementor-element-515d7b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="515d7b5" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c88d5b5 ct-column-none col-offset-none col-color-offset-none" data-id="c88d5b5" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-b4e1b9d elementor-widget elementor-widget-ct_fancy_box" data-id="b4e1b9d" data-element_type="widget" data-e-type="widget" data-widget_type="ct_fancy_box.default">
				<div class="elementor-widget-container">
					<div id="ct_fancy_box-b4e1b9d" class="ct-fancy-box ct-fancy-box-layout3 wow fadeInUp style2" data-wow-delay="40ms">
    <div class="ct-inline-css"  data-css="
                    #ct_fancy_box-b4e1b9d.ct-fancy-box .item--icon i {
                background-image: -webkit-gradient(linear, left top, right top, from(#3F69B1), to(#3F69B154));
                background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B154);
                background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B154);
                background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B154);
                background-image: -o-linear-gradient(to left, #3F69B1, #3F69B154);
                background-image: linear-gradient(to left, #3F69B1, #3F69B154);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B154', gradientType='1');
                background-color: transparent !important;
            }
        ">
    </div>
    <div class="item--inner">
        <div class="item--meta">
                            <div class="item--icon icon-psb">
                    <i aria-hidden="true" class="flaticon flaticon-operation"></i>                </div>
                                    <h4 class="item--title">
                Technical Support            </h4>
        </div>
        <div class="item--description el-empty"></div>
    </div>
</div>				</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
        		<div class="elementor-element elementor-element-2200bc1 elementor-widget-divider--view-line elementor-invisible elementor-widget elementor-widget-divider" data-id="2200bc1" data-element_type="widget" data-e-type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-d42ae32 elementor-widget__width-auto elementor-widget elementor-widget-ct_button" data-id="d42ae32" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button.default">
				<div class="elementor-widget-container">
					<div id="ct_button-d42ae32" class="ct-button-wrapper ct-button-layout1">
    <div class="ct-inline-css"  data-css="
                    #ct_button-d42ae32.ct-button-wrapper .btn {
                background-image: -webkit-linear-gradient(90deg, #3F69B1 0%, #3F69B152 50%, #3F69B1) !important;
                background-image: -moz-linear-gradient(90deg, #3F69B1 0%, #3F69B152 50%, #3F69B1) !important;
                background-image: -ms-linear-gradient(90deg, #3F69B1 0%, #3F69B152 50%, #3F69B1) !important;
                background-image: -o-linear-gradient(90deg, #3F69B1 0%, #3F69B152 50%, #3F69B1) !important;
                background-image: linear-gradient(90deg, #3F69B1 0%, #3F69B152 50%, #3F69B1) !important;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B152') !important;
                background-color: transparent !important;

            }
        ">
    </div>

            <span class="ct-icon-active"></span>
        <a href="contact/index.html" class="btn btn-default wow fadeInUp icon-ps-right " data-wow-delay="ms">
                            <span class="ct-button-icon ct-icon-normal ct-align-icon-right">
                <i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>            </span>
                <span class="ct-button-text">
            Contact Us!        </span>
    </a>
</div>				</div>
				</div>
				<div class="elementor-element elementor-element-536aaff elementor-widget__width-auto elementor-widget elementor-widget-ct_info_box" data-id="536aaff" data-element_type="widget" data-e-type="widget" data-widget_type="ct_info_box.default">
				<div class="elementor-widget-container">
					<div id="ct_info_box-536aaff" class="ct-info-box ct-info-box2 wow fadeInUp style1" data-wow-delay="40ms">
    <div class="ct-inline-css"  data-css="
                    #ct_info_box-536aaff.ct-info-box2 .item--icon i {
                background-image: -webkit-gradient(linear, left top, right top, from(#3F69B1), to(#3F69B1));
                background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: -o-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: linear-gradient(to left, #3F69B1, #3F69B1);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B1', gradientType='1');
            }
                ">
    </div>
	<div class="ct-infobox-inner">
                    <div class="item--icon el-bounce">
                <i aria-hidden="true" class="flaticon flaticon-phone-call"></i>                                    <a class="ct-info-link" href="tel:9112434672345"></a>
                            </div>
        		<div class="item--meta">
    		<div class="item--title el-empty">Call for help</div>
    		<div class="item--phone el-empty"></div>
        </div>
	</div>
</div>				</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-0cbc6a3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="0cbc6a3" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-502a7af ct-column-none col-offset-none col-color-offset-none" data-id="502a7af" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-7d32c64 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="7d32c64" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9666a74 ct-column-none col-offset-none col-color-offset-none" data-id="9666a74" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bf06b79 ct-column-none col-offset-none col-color-offset-none" data-id="bf06b79" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-08a4c98 elementor-widget elementor-widget-ct_heading" data-id="08a4c98" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-08a4c98" class="ct-heading h-align-center item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    <div class="ct-inline-css"  data-css="
                            #ct_heading-08a4c98.ct-heading .item--sub-title span {
                background-image: -webkit-gradient(linear, left top, left bottom, from(#3F69B1), to(#3F69B1));
                background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: -o-linear-gradient(to left, #3F69B1, #3F69B1);
                background-image: linear-gradient(to left, #3F69B1, #3F69B1);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B1');
                background-color: transparent;
                background-clip: text;
                -o-background-clip: text;
                -ms-background-clip: text;
                -moz-background-clip: text;
                -webkit-background-clip: text;
                text-fill-color: transparent;
                -o-text-fill-color: transparent;
                -ms-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
                -webkit-text-fill-color: transparent;
            }
                        ">
    </div>
      <div class="item--text-below">
      <div class="ct-inline-css"  data-css="
        ">
      </div>
          </div>
  
			<div class="item--sub-title style-box-gr wow fadeInUp" data-wow-delay="ms">
                        <span>
                ~ Our Awesome Services ~            </span>
                    </div>
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
        <span class="ct-text-inner"> We are          <cite class="ct-text-highlight">
            dedicated        </cite>
         to serve you all time.</span>    </h3>
  </div>
</div>
				</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8f2f152 ct-column-none col-offset-none col-color-offset-none" data-id="8f2f152" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                    </div>
        </section>
        		@include('frontend.services.service-cards', ['services' => $services, 'lang' => 'en'])
		            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-b9098e2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="b9098e2" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-68c4d3f ct-column-none col-offset-none col-color-offset-none" data-id="68c4d3f" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
                <section class="elementor-section elementor-inner-section elementor-element elementor-element-43be3ab elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="43be3ab" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1ff4167 ct-column-none col-offset-none col-color-offset-none" data-id="1ff4167" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-422aedf ct-column-none col-offset-none col-color-offset-none" data-id="422aedf" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-63544ea elementor-widget elementor-widget-ct_heading" data-id="63544ea" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-63544ea" class="ct-heading h-align-center item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    <div class="ct-inline-css"  data-css="
                            #ct_heading-63544ea.ct-heading .item--sub-title span {
                background-image: -webkit-gradient(linear, left top, left bottom, from(#3F69B1), to(#3F69B173));
                background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B173);
                background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B173);
                background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B173);
                background-image: -o-linear-gradient(to left, #3F69B1, #3F69B173);
                background-image: linear-gradient(to left, #3F69B1, #3F69B173);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B173');
                background-color: transparent;
                background-clip: text;
                -o-background-clip: text;
                -ms-background-clip: text;
                -moz-background-clip: text;
                -webkit-background-clip: text;
                text-fill-color: transparent;
                -o-text-fill-color: transparent;
                -ms-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
                -webkit-text-fill-color: transparent;
            }
                        ">
    </div>
      <div class="item--text-below">
      <div class="ct-inline-css"  data-css="
        ">
      </div>
          </div>
  
			<div class="item--sub-title style-box-gr wow fadeInUp" data-wow-delay="ms">
                        <span>
                ~ Why choose Us? ~            </span>
                    </div>
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
        <span class="ct-text-inner">We serve a wide         <cite class="ct-text-highlight">
            variety        </cite>
         of industries</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3a1f269 elementor-widget elementor-widget-ct_text_editor" data-id="3a1f269" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
				<div class="elementor-widget-container">
					<div id="ct_text_editor-3a1f269" class="ct-text-editor wow fadeInUp" data-wow-delay="ms">
	<div class="ct-item--inner">
		<div class="ct-inline-css"  data-css="
	        			">

	    </div>
		<div class="ct-text-editor elementor-clearfix">
			Below is just a small sample of some of the industries that we serve.		
		</div>
	</div>
</div>				</div>
				</div>
		            </div>
        </div>
                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1c57b11 ct-column-none col-offset-none col-color-offset-none" data-id="1c57b11" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap">
                    
                    </div>
        </div>
                    </div>
        </section>
        		@include('frontend.about.tabs', ['aboutTabs' => $aboutTabs, 'lang' => 'en'])
		            </div>
        </div>
                    </div>
        </section>
                @include('frontend.counters.counters', ['counters' => $counters, 'lang' => 'en'])
        		</div>
		    </div><!-- .entry-content -->
</article><!-- #post-2392 -->
                </main><!-- #main -->
            </div><!-- #primary -->

            
        </div>
    </div>
	</div><!-- #content inner -->
</div><!-- #content -->
@endif
@endsection
