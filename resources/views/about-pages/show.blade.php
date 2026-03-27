@extends('layouts.app')

@section('title', $page->title)

@section('head_extra')
<style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">body #ct-pagetitle{background-image:url('../wp-content/uploads/2023/07/Untitled-design-5.png');}a{color:#3f69b1;}a:hover{color:#3f69b1;}a:active{color:#3f69b1;}</style>
@endsection

@section('body_class', 'wp-singular page-template-default page page-id-9396 wp-theme-itfirm translatepress-en_US redux-page  site-h2401 body-default-font heading-default-font  site-404-default elementor-default elementor-kit-6 elementor-page elementor-page-9396')

@section('content')
    <div id="ct-pagetitle" class="ct-pagetitle bg-image">
        <div class="container">
            <div class="ct-page-title-holder">
                                <h1 class="ct-page-title">{{ $page->title }}</h1>            </div>

                            <ul class="ct-breadcrumb"><li><a class="breadcrumb-entry" href="/">{{ __('Home') }}</a></li><li><a class="breadcrumb-entry" href="/about">{{ __('About') }}</a></li><li><span class="breadcrumb-entry">{{ $page->title }}</span></li></ul>                    </div>
    </div>
        <div id="content" class="site-content">
        	<div class="content-inner">
    <div class="container content-container">
        <div class="row content-row">
            <div id="primary"  class="content-area content-full-width col-12">
                <main id="main" class="site-main">
                    
<article id="post-9396" class="post-9396 page type-page status-publish hentry">
    <div class="entry-content clearfix">
        		<div data-elementor-type="wp-page" data-elementor-id="9396" class="elementor elementor-9396">
				        <section class="elementor-section elementor-top-section elementor-element elementor-element-8c85553 elementor-section-boxed elementor-section-height-default elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none" data-id="8c85553" data-element_type="section" data-e-type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6aa3593 ct-column-none col-offset-none col-color-offset-none" data-id="6aa3593" data-element_type="column" data-e-type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
                    
        		<div class="elementor-element elementor-element-df38fc0 elementor-widget elementor-widget-ct_heading" data-id="df38fc0" data-element_type="widget" data-e-type="widget" data-widget_type="ct_heading.default">
				<div class="elementor-widget-container">
					<div id="ct_heading-df38fc0" class="ct-heading h-align-center item-st-default highlight-style1">
  <div class="ct-heading--inner"> 
    <div class="ct-inline-css"  data-css="
                            #ct_heading-df38fc0.ct-heading .item--sub-title span {
                background-image: -webkit-gradient(linear, left top, left bottom, from(#3F69B1), to(#3F69B163));
                background-image: -webkit-linear-gradient(to left, #3F69B1, #3F69B163);
                background-image: -moz-linear-gradient(to left, #3F69B1, #3F69B163);
                background-image: -ms-linear-gradient(to left, #3F69B1, #3F69B163);
                background-image: -o-linear-gradient(to left, #3F69B1, #3F69B163);
                background-image: linear-gradient(to left, #3F69B1, #3F69B163);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#3F69B1', endColorStr='#3F69B163');
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
  
	    <h3 class="item--title st-default wow fadeInUp" data-wow-delay="ms">
        <span class="ct-text-inner">{{ $page->title }}</span>    </h3>
  </div>
</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-b3ac640 elementor-widget elementor-widget-ct_text_editor" data-id="b3ac640" data-element_type="widget" data-e-type="widget" data-widget_type="ct_text_editor.default">
				<div class="elementor-widget-container">
					<div id="ct_text_editor-b3ac640" class="ct-text-editor wow fadeInUp" data-wow-delay="ms">
	<div class="ct-item--inner">
		<div class="ct-inline-css"  data-css="
	        			">

	    </div>
		<div class="ct-text-editor elementor-clearfix">
			{{ $page->content }}
		</div>
	</div>
</div>				</div>
				</div>
		            </div>
        </div>
                    </div>
        </section>
                @isset($clients)
                <section class="elementor-section elementor-top-section elementor-section-boxed" style="padding: 40px 0;">
                    <div class="elementor-container">
                        <div style="display:flex;flex-wrap:wrap;gap:30px;justify-content:center;align-items:center;">
                            @foreach($clients as $client)
                            <div style="flex:0 0 180px;text-align:center;padding:15px;background:#fff;border:1px solid #eee;border-radius:8px;">
                                <img src="{{ $client->logo }}" alt="{{ $client->name }}" style="max-width:150px;max-height:80px;object-fit:contain;" />
                                <p style="margin:8px 0 0;font-size:13px;color:#555;">{{ $client->name }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @endisset

                @isset($partners)
                <section class="elementor-section elementor-top-section elementor-section-boxed" style="padding: 40px 0;">
                    <div class="elementor-container">
                        <div style="display:flex;flex-wrap:wrap;gap:30px;justify-content:center;align-items:center;">
                            @foreach($partners as $partner)
                            <div style="flex:0 0 180px;text-align:center;padding:15px;background:#fff;border:1px solid #eee;border-radius:8px;">
                                <img src="{{ $partner->logo }}" alt="{{ $partner->name }}" style="max-width:150px;max-height:80px;object-fit:contain;" />
                                <p style="margin:8px 0 0;font-size:13px;color:#555;">{{ $partner->name }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                @endisset
        		</div>
		    </div><!-- .entry-content -->
</article><!-- #post-9396 -->
                </main><!-- #main -->
            </div><!-- #primary -->

            
        </div>
    </div>
	</div><!-- #content inner -->
</div><!-- #content -->

@endsection
