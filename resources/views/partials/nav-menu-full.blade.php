@php $isAr = app()->getLocale() === 'ar'; @endphp
<li id="menu-item-9013" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-9013"><a href="/"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr ? 'الصفحة الرئيسية' : 'Home' }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a></li>
<li id="menu-item-9014" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-9014"><a href="/about"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr ? 'نبذة عنا' : 'About' }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a>
<ul class="sub-menu">
	@foreach($navAboutPages as $navAboutPage)
	<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/about/{{ $navAboutPage->slug }}"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr && $navAboutPage->title_ar ? $navAboutPage->title_ar : $navAboutPage->title }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a></li>
	@endforeach
</ul>
</li>
@php $megaColIds=[['col'=>'dd797c6','h'=>'2ad64e7','m'=>'cfec087'],['col'=>'d576266','h'=>'7cf32ec','m'=>'f2c17ab'],['col'=>'c737809','h'=>'094a9e7','m'=>'9cc1b2a'],['col'=>'820fea2','h'=>'50775e9','m'=>'1739158']]; @endphp
<li id="menu-item-9195" class="menu-item menu-item-type-custom menu-item-object-custom megamenu megamenu-style-alt menu-item-has-children menu-item-9195"><a href="#"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr ? 'الخدمات' : 'Services' }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a><ul class="sub-menu"><li><div class="container">		<div data-elementor-type="wp-post" data-elementor-id="9051" class="elementor elementor-9051">
			        <section class="elementor-section elementor-top-section elementor-element elementor-element-ceec42a elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="ceec42a" data-element_type="section" data-e-type="section">
                        <div class="elementor-container elementor-column-gap-extended ">
    @foreach($navServiceCategories as $navCat)
    @php $ids = $megaColIds[$loop->index] ?? $megaColIds[0]; @endphp
    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-{{ $ids['col'] }} ct-column-none col-offset-none col-color-offset-none" data-id="{{ $ids['col'] }}" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-{{ $ids['h'] }} elementor-widget elementor-widget-ct_heading" data-id="{{ $ids['h'] }}" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-{{ $ids['h'] }}" class="ct-heading h-align- item-st-default highlight-style1">
  <div class="ct-heading--inner">
    <div class="ct-inline-css" data-css="                                "></div>
	    <h3 class="item--title st-default " data-wow-delay="ms">
        <span class="ct-text-inner">{{ $isAr && $navCat->name_ar ? $navCat->name_ar : $navCat->name }}</span></h3>
  </div>
</div>
				</div>
			</div>
			<div class="elementor-element elementor-element-{{ $ids['m'] }} elementor-widget elementor-widget-ct_menu_item" data-id="{{ $ids['m'] }}" data-element_type="widget" data-e-type="widget" data-widget_type="ct_menu_item.default">
				<div class="elementor-widget-container">
					    <ul class="ct-menu-item style-default ">
                        @foreach($navCat->services as $navService)
                        <li><a href="/service/{{ $navService->slug }}"><i aria-hidden="true" class="far fa-dot-circle"></i> {{ $isAr && $navService->title_ar ? $navService->title_ar : $navService->title }}</a></li>
                        @endforeach
                    </ul>
				</div>
			</div>
        </div>
    </div>
    @endforeach
</div>
        </section>
        		</div>
		</div></li></ul></li>
<li id="menu-item-9016" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9016"><a href="#"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr ? 'المنتجات' : 'Products' }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a>
<ul class="sub-menu">
	@foreach($navProducts as $navProduct)
	<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/product/{{ $navProduct->slug }}"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr && $navProduct->name_ar ? $navProduct->name_ar : $navProduct->name }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a></li>
	@endforeach
</ul>
</li>
<li id="menu-item-9635" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9635"><a href="/contact"><span class="ct-menu-item"><span class="ct-item--number"><span></span></span>{{ $isAr ? 'تواصل معنا' : 'Contact' }}</span><span class="ct-menu--plus"></span><span class="ct-menu--line"></span></a></li>
