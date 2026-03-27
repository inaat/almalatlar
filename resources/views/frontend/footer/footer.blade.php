{{--
    Reusable Footer Component
    Usage:
        @include('frontend.footer.footer', ['lang' => 'en'])
        @include('frontend.footer.footer', ['lang' => 'ar'])
    Variables:
        $lang - 'en' (default) or 'ar'
--}}
@php $lang = $lang ?? 'en'; @endphp

<footer id="colophon" class="site-footer-custom">
    <div class="footer-custom-inner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div data-elementor-type="wp-post" data-elementor-id="2405" class="elementor elementor-2405">

                {{-- Top CTA Section --}}
                <section class="elementor-section elementor-top-section elementor-element elementor-element-2d018230 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none"
                         data-id="2d018230" data-element_type="section" data-e-type="section"
                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-extended">
                        <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-9ade9d6 ct-column-none col-offset-none col-color-offset-none" data-id="9ade9d6" data-element_type="column" data-e-type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-42b7ca05 elementor-widget elementor-widget-ct_heading" data-id="42b7ca05" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
                                    <div class="elementor-widget-container">
                                        <div id="ct_heading-42b7ca05" class="ct-heading h-align- item-st-default highlight-style1">
                                            <div class="ct-heading--inner">
                                                <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
                                                    <span class="ct-text-inner">
                                                        {{ $lang === 'ar' ? 'هل تبحث عن أفضل حلول أعمال تكنولوجيا المعلومات؟' : 'Looking for the Best IT Business Solutions?' }}
                                                    </span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-200c8d04 elementor-widget elementor-widget-ct_text_editor" data-id="200c8d04" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
                                    <div class="elementor-widget-container">
                                        <div id="ct_text_editor-200c8d04" class="ct-text-editor wow fadeInUp" data-wow-delay="ms">
                                            <div class="ct-item--inner">
                                                <div class="ct-text-editor elementor-clearfix">
                                                    {{ $lang === 'ar' ? 'باعتبارنا خبيرًا في زاحف الويب الخاص بالتطبيقات، سنساعدك في التنظيم.' : 'As a app web crawler expert, We will help to organize.' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1d427c3a ct-column-none col-offset-none col-color-offset-none" data-id="1d427c3a" data-element_type="column" data-e-type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-4f368a76 elementor-align-left elementor-widget__width-auto elementor-widget elementor-widget-ct_button" data-id="4f368a76" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button.default">
                                    <div class="elementor-widget-container">
                                        <div id="ct_button-4f368a76" class="ct-button-wrapper ct-button-layout1">
                                            <div class="ct-inline-css" data-css="
                                                #ct_button-4f368a76.ct-button-wrapper .btn {
                                                    background-image: linear-gradient(90deg, #000000 0%, #3F69B163 50%, #000000) !important;
                                                    background-color: transparent !important;
                                                }
                                            "></div>
                                            <span class="ct-icon-active"></span>
                                            <a href="contact/index.html" class="btn btn-default wow fadeInUp icon-ps-" data-wow-delay="ms">
                                                <span class="ct-button-icon ct-icon-normal ct-align-icon-"></span>
                                                <span class="ct-button-text">
                                                    {{ $lang === 'ar' ? 'احصل على عرض أسعار' : 'Get a quote' }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Main Footer Section --}}
                <section class="elementor-section elementor-top-section elementor-element elementor-element-6bc1161e elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none"
                         data-id="6bc1161e" data-element_type="section" data-e-type="section"
                         data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-extended">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e33126 ct-column-none col-offset-none col-color-offset-none" data-id="4e33126" data-element_type="column" data-e-type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">

                                {{-- 3-Column Inner Section --}}
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-1c9e241b elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none"
                                         data-id="1c9e241b" data-element_type="section" data-e-type="section">
                                    <div class="elementor-container elementor-column-gap-extended">

                                        {{-- Col 1: Logo + Description --}}
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-363064f9 ct-column-none col-offset-none col-color-offset-none" data-id="363064f9" data-element_type="column" data-e-type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5163ffb5 elementor-widget__width-auto elementor-widget elementor-widget-ct_logo" data-id="5163ffb5" data-element_type="widget" data-e-type="widget" data-widget_type="ct_logo.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_logo-5163ffb5" class="ct-logo style1">
                                                            <a href="index.html">
                                                                <img width="1852" height="1628" src="wp-content/uploads/2021/11/web-logo1.png" class="attachment-full" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-2d3e84d9 elementor-widget elementor-widget-ct_text_editor" data-id="2d3e84d9" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_text_editor-2d3e84d9" class="ct-text-editor" data-wow-delay="ms">
                                                            <div class="ct-item--inner">
                                                                <div class="ct-text-editor elementor-clearfix">
                                                                    {{ $lang === 'ar'
                                                                        ? 'اعتماد تقنيات تكنولوجيا المعلومات الجديدة المتطورة. العمل بأخلاقيات قوية وصدق وشفافية.'
                                                                        : 'Adopting the evolving new IT technologies. Acting with strong ethics, Honesty, and transparency.' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-20c391b5 elementor-widget elementor-widget-ct_button" data-id="20c391b5" data-element_type="widget" data-e-type="widget" data-widget_type="ct_button.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_button-20c391b5" class="ct-button-wrapper ct-button-layout1">
                                                            <div class="ct-inline-css" data-css="
                                                                #ct_button-20c391b5.ct-button-wrapper .btn {
                                                                    background-image: linear-gradient(90deg, #7114EF 0%, #3F69B163 50%, #7114EF) !important;
                                                                    background-color: transparent !important;
                                                                }
                                                            "></div>
                                                            <span class="ct-icon-active"></span>
                                                            <a href="about/index.html" class="btn btn-default icon-ps-" data-wow-delay="ms">
                                                                <span class="ct-button-icon ct-icon-normal ct-align-icon-"></span>
                                                                <span class="ct-button-text">
                                                                    {{ $lang === 'ar' ? 'معلومات عنا' : 'About us' }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Col 2: Contact Info --}}
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-377a1168 ct-column-none col-offset-none col-color-offset-none" data-id="377a1168" data-element_type="column" data-e-type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-d39aa3 elementor-widget elementor-widget-ct_heading" data-id="d39aa3" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_heading-d39aa3" class="ct-heading h-align- item-st-default highlight-style1">
                                                            <div class="ct-heading--inner">
                                                                <h3 class="item--title st-default" data-wow-delay="ms">
                                                                    <span class="ct-text-inner">
                                                                        {{ $lang === 'ar' ? 'المعلومات الرسمية:' : 'Official info:' }}
                                                                    </span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7db981e6 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="7db981e6" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider"><span class="elementor-divider-separator"></span></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7c1dfdae elementor-widget elementor-widget-ct_contact_info" data-id="7c1dfdae" data-element_type="widget" data-e-type="widget" data-widget_type="ct_contact_info.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_contact_info-7c1dfdae" class="ct-contact-info ct-contact-info1 style1" data-wow-duration="1.2s">
                                                            <div class="item--contact-info">
                                                                <span class="ct-contact-icon"><i aria-hidden="true" class="fas fa-map-marker-alt"></i></span>
                                                                <span class="ct-contact-content">
                                                                    @if($lang === 'ar')
                                                                        مكتب رقم 3، مبنى ديم المناهل<br>
                                                                        8775 الأمير عبد العزيز بن مساعد بن جلوي، حي السليمانية.<br>
                                                                        ص.ب. 12234 - الرياض 2949<br>
                                                                        المملكة العربية السعودية
                                                                    @else
                                                                        P.O. Box 12234 - Riyadh 2949 Kingdom of Saudi Arabia
                                                                    @endif
                                                                </span>
                                                            </div>
                                                            <div class="item--contact-info">
                                                                <span class="ct-contact-icon"><i aria-hidden="true" class="fas fa-phone-alt"></i></span>
                                                                <span class="ct-contact-content">
                                                                    {{ $lang === 'ar' ? '+(966) 11 4002 03' : '' }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-604876e6 elementor-widget elementor-widget-ct_text_editor" data-id="604876e6" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_text_editor-604876e6" class="ct-text-editor" data-wow-delay="ms">
                                                            <div class="ct-item--inner">
                                                                <div class="ct-text-editor elementor-clearfix">
                                                                    {{ $lang === 'ar' ? 'ساعات العمل:' : 'Open Hours:' }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-459e0c47 elementor-widget elementor-widget-ct_text_editor" data-id="459e0c47" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_text_editor-459e0c47" class="ct-text-editor" data-wow-delay="ms">
                                                            <div class="ct-item--inner">
                                                                <div class="ct-text-editor elementor-clearfix">
                                                                    @if($lang === 'ar')
                                                                        الإثنين – السبت: 8 صباحًا – 5 مساءً<br>الأحد: مغلق
                                                                    @else
                                                                        Mon &#8211; Sat: 8 am &#8211; 5 pm,<br>Sunday: CLOSED
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Col 3: Map --}}
                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-23f70cc ct-column-none col-offset-none col-color-offset-none" data-id="23f70cc" data-element_type="column" data-e-type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-10fc4fa1 elementor-widget elementor-widget-ct_heading" data-id="10fc4fa1" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_heading-10fc4fa1" class="ct-heading h-align- item-st-default highlight-style1">
                                                            <div class="ct-heading--inner">
                                                                <h3 class="item--title st-default" data-wow-delay="ms">
                                                                    <span class="ct-text-inner">
                                                                        {{ $lang === 'ar' ? 'رسم خريطة' : 'MAP' }}
                                                                    </span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-503502e1 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="503502e1" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-divider"><span class="elementor-divider-separator"></span></div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-b207f12 elementor-widget elementor-widget-google_maps" data-id="b207f12" data-element_type="widget" data-e-type="widget" data-widget_type="google_maps.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-custom-embed">
                                                            <iframe loading="lazy"
                                                                src="https://maps.google.com/maps?q=P.O.%20Box%2012234%20-%20Riyadh%202949%20Kingdom%20of%20Saudi%20Arabia&amp;t=m&amp;z=5&amp;output=embed&amp;iwloc=near"
                                                                title="{{ $lang === 'ar' ? 'ص.ب. 12234 - الرياض 2949 المملكة العربية السعودية' : 'P.O. Box 12234 - Riyadh 2949 Kingdom of Saudi Arabia' }}"
                                                                aria-label="{{ $lang === 'ar' ? 'ص.ب. 12234 - الرياض 2949 المملكة العربية السعودية' : 'P.O. Box 12234 - Riyadh 2949 Kingdom of Saudi Arabia' }}"
                                                            ></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>

                                {{-- Bottom Bar: Copyright + Social --}}
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-c7917bc elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none"
                                         data-id="c7917bc" data-element_type="section" data-e-type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0917639 ct-column-none col-offset-none col-color-offset-none" data-id="0917639" data-element_type="column" data-e-type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6b14a97f elementor-widget elementor-widget-ct_text_editor" data-id="6b14a97f" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div id="ct_text_editor-6b14a97f" class="ct-text-editor" data-wow-delay="ms">
                                                            <div class="ct-item--inner">
                                                                <div class="ct-text-editor elementor-clearfix">
                                                                    &copy; <span class="ct-year">{{ date('Y') }}</span>
                                                                    @if($lang === 'ar')
                                                                        الملاذ العربي . جميع الحقوق محفوظة. تصميم وتطوير بواسطة <a href="https://rsna.com.sa/" target="_blank" rel="noopener">RSN Advance IT Company</a>
                                                                    @else
                                                                        Al Malath Al Arabia. All rights reserved. Design and Developed by <a href="https://rsna.com.sa/" target="_blank" rel="noopener">RSN Advance IT Company</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a7e3b0a ct-column-none col-offset-none col-color-offset-none" data-id="a7e3b0a" data-element_type="column" data-e-type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-8df806a elementor-widget elementor-widget-ct_icon" data-id="8df806a" data-element_type="widget" data-e-type="widget" data-widget_type="ct_icon.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="ct-icon1 style1 icon-align-right">
                                                            <a class="ct_icon-8df806a-0 elementor-repeater-item-9f033d2" href="#"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                                            <a class="ct_icon-8df806a-1 elementor-repeater-item-3f0e626" href="#"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                                            <a class="ct_icon-8df806a-2 elementor-repeater-item-05c7498" href="#"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                                            <a class="ct_icon-8df806a-3 elementor-repeater-item-7342d6c" href="#"><i aria-hidden="true" class="fab fa-behance"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                </section>

                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
