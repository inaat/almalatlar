{{--
    Reusable Header Component
    Usage:
        @include('frontend.header.header', ['lang' => 'en'])
        @include('frontend.header.header', ['lang' => 'ar'])
    Variables:
        $lang - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; App::setLocale($lang); @endphp
    <header id="ct-header-elementor" class="is-sticky">
		<div class="ct-header-elementor-main">
	    <div class="ct-header-content">
	        <div class="row">
	        	<div class="col-12">
		            		<div data-elementor-type="wp-post" data-elementor-id="2401" class="elementor elementor-2401">
			        <section class="elementor-section elementor-top-section elementor-element elementor-element-b9f255b elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="b9f255b" data-element_type="section" data-e-type="section">

                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d35353a ct-column-none col-offset-none col-color-offset-none" data-id="d35353a" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">

        		<div class="elementor-element elementor-element-130ea0a1 elementor-widget__width-auto elementor-widget elementor-widget-ct_contact_info" data-id="130ea0a1" data-element_type="widget" data-e-type="widget" data-widget_type="ct_contact_info.default">
			<div class="elementor-widget-container">
				    <div id="ct_contact_info-130ea0a1" class="ct-contact-info ct-contact-info1 style1 " data-wow-duration="1.2s">
        <div class="ct-inline-css"  data-css="
                            #ct_contact_info-130ea0a1.ct-contact-info .ct-contact-icon i {
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
                        <div class="item--contact-info">
                	    			        <span class="ct-contact-icon">
    		                <i aria-hidden="true" class="flaticon flaticon-telephone-call"></i>    		                    			        </span>
    			                        <span class="ct-contact-content">
                	   {{ $lang === 'ar' ? '+(966) 11 4002 03' : '' }}                    </span>
                                            <a class="pxl-item--link" href="tel:+96611400203" target="_blank"></a>
                                   </div>
            </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-655822b4 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="655822b4" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
						<div class="elementor-divider">
		<span class="elementor-divider-separator">
					</span>
	</div>
					</div>
			</div>
			<div class="elementor-element elementor-element-974b276 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="974b276" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
								<img fetchpriority="high" width="523" height="477" src="wp-content/uploads/2021/11/16.2-removebg-preview-1.png" class="attachment-full size-full wp-image-9176" alt="" sizes="(max-width: 523px) 100vw, 523px" />								</div>
			</div>
			<div class="elementor-element elementor-element-91ad50b elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="91ad50b" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
								<img width="150" height="150" src="wp-content/uploads/2021/11/16.3-removebg-preview-150x150.png" class="attachment-thumbnail size-thumbnail wp-image-9175" alt="" sizes="(max-width: 150px) 100vw, 150px" />								</div>
			</div>
			<div class="elementor-element elementor-element-f3d1d91 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="f3d1d91" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
			<div class="elementor-widget-container">
								<img width="524" height="476" src="wp-content/uploads/2021/11/16-removebg-preview.png" class="attachment-full size-full wp-image-9177" alt="" sizes="(max-width: 524px) 100vw, 524px" />								</div>
			</div>
			<div class="elementor-element elementor-element-6c4ac572 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="6c4ac572" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
						<div class="elementor-divider">
		<span class="elementor-divider-separator">
					</span>
	</div>
					</div>
			</div>
			<div class="elementor-element elementor-element-4d22c464 elementor-widget__width-auto elementor-widget elementor-widget-ct_contact_info" data-id="4d22c464" data-element_type="widget" data-e-type="widget" data-widget_type="ct_contact_info.default">
			<div class="elementor-widget-container">
				    <div id="ct_contact_info-4d22c464" class="ct-contact-info ct-contact-info1 style1 " data-wow-duration="1.2s">
        <div class="ct-inline-css"  data-css="
                            #ct_contact_info-4d22c464.ct-contact-info .ct-contact-icon i {
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
                        <div class="item--contact-info">
                	    			        <span class="ct-contact-icon">
    		                <i aria-hidden="true" class="flaticon flaticon-inbox"></i>    		                    			        </span>
    			                        <span class="ct-contact-content">
                	   Info@almalath.com                    </span>
                                            <a class="pxl-item--link" href="mailto:envato@mail.com" target="_blank"></a>
                                   </div>
            </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-26c5256e elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="26c5256e" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
			<div class="elementor-widget-container">
						<div class="elementor-divider">
		<span class="elementor-divider-separator">
					</span>
	</div>
					</div>
			</div>
			<div class="elementor-element elementor-element-2c117fd3 elementor-widget__width-auto elementor-widget elementor-widget-ct_icon" data-id="2c117fd3" data-element_type="widget" data-e-type="widget" data-widget_type="ct_icon.default">
			<div class="elementor-widget-container">
				    <div class="ct-icon1 style1 icon-align-">

                            <a class="ct_icon-2c117fd3-0 elementor-repeater-item-7eacdc1" href="#">
                    <i aria-hidden="true" class="fab fa-facebook-f"></i>                                    </a>



                            <a class="ct_icon-2c117fd3-1 elementor-repeater-item-57b3b7e" href="#">
                    <i aria-hidden="true" class="fab fa-twitter"></i>                                    </a>



                            <a class="ct_icon-2c117fd3-2 elementor-repeater-item-e8ffe57" href="#">
                    <i aria-hidden="true" class="fab fa-dribbble"></i>                                    </a>



                            <a class="ct_icon-2c117fd3-3 elementor-repeater-item-8a132e8" href="#">
                    <i aria-hidden="true" class="fab fa-behance"></i>                                    </a>


            </div>
			</div>
			</div>
	            </div>
        </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-59df7a2 elementor-section-stretched elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none ct-container-none" data-id="59df7a2" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">

                        <div class="elementor-container elementor-column-gap-no ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a5adb1f ct-column-none col-offset-none col-color-offset-none" data-id="a5adb1f" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">

        		<div class="elementor-element elementor-element-11e2f69 elementor-widget__width-auto elementor-widget elementor-widget-ct_logo" data-id="11e2f69" data-element_type="widget" data-e-type="widget" data-widget_type="ct_logo.default">
			<div class="elementor-widget-container">
				    <div id="ct_logo-11e2f69" class="ct-logo  style3">
        <div class="ct-inline-css"  data-css="
                            #ct_logo-11e2f69.ct-logo.style3::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#FFFFFF));
                    background-image: -webkit-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: -moz-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: -ms-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: -o-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: linear-gradient(to left, #FFFFFF, #FFFFFF);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#FFFFFF', endColorStr='#FFFFFF');
                }
            ">
        </div>
        <a href="index.html">            <img loading="lazy" width="2412" height="505" src="wp-content/uploads/2021/11/web-logo.png" class="attachment-full" alt="" />        </a>    </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-909ae21 elementor-widget__width-auto el-flex-grow elementor-widget elementor-widget-ct_menu" data-id="909ae21" data-element_type="widget" data-e-type="widget" data-widget_type="ct_menu.default">
			<div class="elementor-widget-container">
				    <div id="ct_menu-909ae21" class="ct-nav-menu ct-nav-menu1 style2  sub-hv-style1 ct-mega-fullwidth">
        <div class="ct-inline-css"  data-css="
                            #ct_menu-909ae21.ct-nav-menu1.style2 .ct-main-menu > li > a::before,
                #ct_menu-909ae21.ct-nav-menu1.style3 .ct-main-menu > li > a::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#7114EF), to(#1475F7));
                    background-image: -webkit-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: -moz-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: -ms-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: -o-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: linear-gradient(to left, #7114EF, #1475F7);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#7114EF', endColorStr='#1475F7');
                }
            ">
        </div>
        <div class="menu-header-menu-container"><ul id="menu-header-menu" class="ct-main-menu clearfix">@include('partials.nav-menu-full', ['isAr' => $lang === 'ar'])
</ul></div>    </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-7a06970 elementor-widget__width-initial elementor-widget elementor-widget-ct_icon_search" data-id="7a06970" data-element_type="widget" data-e-type="widget" data-widget_type="ct_icon_search.default">
			<div class="elementor-widget-container">
				<div class="ct-search-form1">
@if($lang === 'ar')
	<form role="search" method="get" action="https://almalath.com/ar/">
        <input type="text" placeholder="يبحث..." name="s" class="search-field">
        <button type="submit" class="search-submit"><i class="caseicon-search"></i></button>
    <input type="hidden" name="trp-form-language" value="ar"></form>
@else
	<form role="search" method="get" action="https://almalath.com/">
        <input type="text" placeholder="Search..." name="s" class="search-field" />
        <button type="submit" class="search-submit"><i class="caseicon-search"></i></button>
    </form>
@endif
</div>			</div>
			</div>
			<div class="elementor-element elementor-element-135a733 elementor-widget__width-auto elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-ct_language_switcher" data-id="135a733" data-element_type="widget" data-e-type="widget" data-widget_type="ct_language_switcher.default">
			<div class="elementor-widget-container">
				    <div class="ct-language-switcher1 dr-left">
        <div class="current--item">
            <svg height="22" viewBox="0 0 32 32" width="22" xmlns="http://www.w3.org/2000/svg" data-name="Layer 3"><path d="m21.386 10c-1.055-4.9-3.305-8-5.386-8s-4.331 3.1-5.386 8z"/><path d="m10 16a30.013 30.013 0 0 0 .267 4h11.466a30.013 30.013 0 0 0 .267-4 30.013 30.013 0 0 0 -.267-4h-11.466a30.013 30.013 0 0 0 -.267 4z"/><path d="m10.614 22c1.055 4.9 3.305 8 5.386 8s4.331-3.1 5.386-8z"/><path d="m23.434 10h6.3a15.058 15.058 0 0 0 -10.449-8.626c1.897 1.669 3.385 4.755 4.149 8.626z"/><path d="m30.453 12h-6.7a32.332 32.332 0 0 1 .247 4 32.332 32.332 0 0 1 -.248 4h6.7a14.9 14.9 0 0 0 0-8z"/><path d="m19.285 30.626a15.058 15.058 0 0 0 10.451-8.626h-6.3c-.766 3.871-2.254 6.957-4.151 8.626z"/><path d="m8.566 22h-6.3a15.058 15.058 0 0 0 10.451 8.626c-1.899-1.669-3.387-4.755-4.151-8.626z"/><path d="m12.715 1.374a15.058 15.058 0 0 0 -10.451 8.626h6.3c.766-3.871 2.254-6.957 4.151-8.626z"/><path d="m8 16a32.332 32.332 0 0 1 .248-4h-6.7a14.9 14.9 0 0 0 0 8h6.7a32.332 32.332 0 0 1 -.248-4z"/></svg>
            <label>English</label>
        </div>
        <ul>
                                <li>
                        <a href="#">
                            France                        </a>
                    </li>
                                <li>
                        <a href="#">
                            Germany                        </a>
                    </li>
                                <li>
                        <a href="#">
                            Russia                        </a>
                    </li>
                    </ul>
    </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-b70dbce elementor-widget__width-auto elementor-widget elementor-widget-ct_button" data-id="b70dbce" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button.default">
			<div class="elementor-widget-container">
				<div id="ct_button-b70dbce" class="ct-button-wrapper ct-button-layout1">
    <div class="ct-inline-css"  data-css="
                    #ct_button-b70dbce.ct-button-wrapper .btn {
                background-image: -webkit-linear-gradient(90deg, #3F69B1 0%, #3F69B199 50%, #3F69B1) !important;
                background-image: -moz-linear-gradient(90deg, #3F69B1 0%, #3F69B199 50%, #3F69B1) !important;
                background-image: -ms-linear-gradient(90deg, #3F69B1 0%, #3F69B199 50%, #3F69B1) !important;
                background-image: -o-linear-gradient(90deg, #3F69B1 0%, #3F69B199 50%, #3F69B1) !important;
                background-image: linear-gradient(90deg, #3F69B1 0%, #3F69B199 50%, #3F69B1) !important;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B199') !important;
                background-color: transparent !important;

            }
        ">
    </div>

            <span class="ct-icon-active"></span>
        <a href="contact/index.html" class="btn btn-default  icon-ps-right " data-wow-delay="ms">
                            <span class="ct-button-icon ct-icon-normal ct-align-icon-right">
                <i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>            </span>
                <span class="ct-button-text">
            {{ $lang === 'ar' ? 'احصل على عرض أسعار' : 'Get a quote now' }}        </span>
    </a>
</div>			</div>
			</div>
	            </div>
        </div>
                    </div>
        </section>
        		</div>
		                </div>
	        </div>
	    </div>
	</div>
			<div class="ct-header-elementor-sticky">
	    <div class="container">
	        <div class="row">
	            		<div data-elementor-type="wp-post" data-elementor-id="2408" class="elementor elementor-2408">
			        <section class="elementor-section elementor-top-section elementor-element elementor-element-5e0a361f elementor-section-stretched elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none ct-container-none" data-id="5e0a361f" data-element_type="section" data-e-type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">

                        <div class="elementor-container elementor-column-gap-default ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-40633889 ct-column-none col-offset-none col-color-offset-none" data-id="40633889" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">

        		<div class="elementor-element elementor-element-6742c1c3 elementor-widget__width-auto elementor-widget elementor-widget-ct_logo" data-id="6742c1c3" data-element_type="widget" data-e-type="widget" data-widget_type="ct_logo.default">
			<div class="elementor-widget-container">
				    <div id="ct_logo-6742c1c3" class="ct-logo  style3">
        <div class="ct-inline-css"  data-css="
                            #ct_logo-6742c1c3.ct-logo.style3::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#FFFFFF));
                    background-image: -webkit-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: -moz-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: -ms-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: -o-linear-gradient(to left, #FFFFFF, #FFFFFF);
                    background-image: linear-gradient(to left, #FFFFFF, #FFFFFF);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#FFFFFF', endColorStr='#FFFFFF');
                }
            ">
        </div>
        <a href="index.html">            <img loading="lazy" width="2412" height="505" src="wp-content/uploads/2021/11/web-logo.png" class="attachment-full" alt="" />        </a>    </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-78effc1f elementor-widget__width-auto el-flex-grow elementor-widget elementor-widget-ct_menu" data-id="78effc1f" data-element_type="widget" data-e-type="widget" data-widget_type="ct_menu.default">
			<div class="elementor-widget-container">
				    <div id="ct_menu-78effc1f" class="ct-nav-menu ct-nav-menu1 style2  sub-hv-style1 ct-mega-fullwidth">
        <div class="ct-inline-css"  data-css="
                            #ct_menu-78effc1f.ct-nav-menu1.style2 .ct-main-menu > li > a::before,
                #ct_menu-78effc1f.ct-nav-menu1.style3 .ct-main-menu > li > a::before {
                    background-image: -webkit-gradient(linear, left top, left bottom, from(#7114EF), to(#1475F7));
                    background-image: -webkit-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: -moz-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: -ms-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: -o-linear-gradient(to left, #7114EF, #1475F7);
                    background-image: linear-gradient(to left, #7114EF, #1475F7);
                    filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#7114EF', endColorStr='#1475F7');
                }
            ">
        </div>
        <div class="menu-header-menu-container"><ul id="menu-header-menu-1" class="ct-main-menu clearfix">@include('partials.nav-menu-full', ['isAr' => $lang === 'ar'])
</ul></div>    </div>
			</div>
			</div>
			<div class="elementor-element elementor-element-57ac974c elementor-widget__width-auto elementor-widget elementor-widget-ct_icon_search" data-id="57ac974c" data-element_type="widget" data-e-type="widget" data-widget_type="ct_icon_search.default">
			<div class="elementor-widget-container">
				<div class="ct-search-form1">
@if($lang === 'ar')
	<form role="search" method="get" action="https://almalath.com/ar/">
        <input type="text" placeholder="يبحث..." name="s" class="search-field">
        <button type="submit" class="search-submit"><i class="caseicon-search"></i></button>
    <input type="hidden" name="trp-form-language" value="ar"></form>
@else
	<form role="search" method="get" action="https://almalath.com/">
        <input type="text" placeholder="Search..." name="s" class="search-field" />
        <button type="submit" class="search-submit"><i class="caseicon-search"></i></button>
    </form>
@endif
</div>			</div>
			</div>
			<div class="elementor-element elementor-element-39cfae3c elementor-widget__width-auto elementor-widget elementor-widget-ct_button" data-id="39cfae3c" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button.default">
			<div class="elementor-widget-container">
				<div id="ct_button-39cfae3c" class="ct-button-wrapper ct-button-layout1">
    <div class="ct-inline-css"  data-css="
                    #ct_button-39cfae3c.ct-button-wrapper .btn {
                background-image: -webkit-linear-gradient(90deg, #3F69B1 0%, #3F69B163 50%, #3F69B1) !important;
                background-image: -moz-linear-gradient(90deg, #3F69B1 0%, #3F69B163 50%, #3F69B1) !important;
                background-image: -ms-linear-gradient(90deg, #3F69B1 0%, #3F69B163 50%, #3F69B1) !important;
                background-image: -o-linear-gradient(90deg, #3F69B1 0%, #3F69B163 50%, #3F69B1) !important;
                background-image: linear-gradient(90deg, #3F69B1 0%, #3F69B163 50%, #3F69B1) !important;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B163') !important;
                background-color: transparent !important;

            }
        ">
    </div>

            <span class="ct-icon-active"></span>
        <a href="contact/index.html" class="btn btn-default  icon-ps-right " data-wow-delay="ms">
                            <span class="ct-button-icon ct-icon-normal ct-align-icon-right">
                <i aria-hidden="true" class="flaticon flaticon-right-arrow"></i>            </span>
                <span class="ct-button-text">
            {{ $lang === 'ar' ? 'احصل على عرض أسعار' : 'Get a quote now' }}        </span>
    </a>
</div>			</div>
			</div>
	            </div>
        </div>
                    </div>
        </section>
        		</div>
			        </div>
	    </div>
	</div>
	    <div class="ct-header-mobile">
        <div id="ct-header" class="ct-header-main">
            <div class="container">
                <div class="row">
                    <div class="ct-header-branding">
                        <a class="logo-mobile" href="index.html" title="MAC |" rel="home"><img src="wp-content/uploads/2021/11/web-logo.png" alt="MAC |"/></a><a class="logo-light" href="index.html" title="MAC |" rel="home"><img src="wp-content/themes/itfirm/assets/images/logo-df.png" alt="MAC |"/></a>                    </div>
                    <div class="ct-header-navigation">
                        <nav class="ct-main-navigation">
                            <div class="ct-main-navigation-inner">
                                                                    <div class="ct-logo-mobile">
                                        <a class="logo-mobile" href="index.html" title="MAC |" rel="home"><img src="wp-content/uploads/2021/11/web-logo.png" alt="MAC |"/></a><a class="logo-light" href="index.html" title="MAC |" rel="home"><img src="wp-content/themes/itfirm/assets/images/logo-df.png" alt="MAC |"/></a>                                    </div>
                                                                                                <ul id="menu-header-menu-2" class="ct-main-menu clearfix">@include('partials.nav-menu-simple', ['isAr' => $lang === 'ar'])
</ul>                            </div>
                        </nav>
                    </div>
                    <div class="ct-menu-overlay"></div>
                </div>
            </div>
            <div id="ct-menu-mobile">
                <div class="ct-mobile-meta-item btn-nav-mobile open-menu">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>
