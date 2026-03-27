@extends('layouts.app')

@php $isAr = app()->getLocale() === 'ar'; $productName = $isAr ? ($product->name_ar ?: $product->name) : $product->name; @endphp
@section('title', $productName)

@section('head_extra')
<style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">body #ct-pagetitle{background-image:url('/wp-content/uploads/2023/07/Untitled-design-5.png');}a{color:#3f69b1;}a:hover{color:#3f69b1;}a:active{color:#3f69b1;}</style>
@endsection

@section('body_class', 'wp-singular page-template-default page wp-theme-itfirm elementor-default')

@section('content')
    <div id="ct-pagetitle" class="ct-pagetitle bg-image">
        <div class="container">
            <div class="ct-page-title-holder">
                <h1 class="ct-page-title">{{ $productName }}</h1>
            </div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="/">{{ __('Home') }}</a></li>
                <li><span class="breadcrumb-entry">{{ __('Products') }}</span></li>
                <li><span class="breadcrumb-entry">{{ $productName }}</span></li>
            </ul>
        </div>
    </div>

    <div id="content" class="site-content">
        <div class="content-inner">
            <div class="container content-container">
                <div class="row content-row">
                    <div id="primary" class="content-area content-full-width col-12">
                        <main id="main" class="site-main">
                            <article class="type-page status-publish hentry">
                                <div class="entry-content clearfix">
                                    <div class="elementor">
                                        <section class="elementor-section elementor-top-section elementor-section-boxed elementor-section-height-default ct-header-fixed-none ct-column-none ct-row-scroll-none ct-row-gradient--none">
                                            <div class="elementor-container elementor-column-gap-extended">

                                                <div class="elementor-column elementor-col-50 elementor-top-column ct-column-none">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        @if($product->image)
                                                        <div class="ct-banner ct-banner2 wow fadeInUp">
                                                            <div class="ct-banner-inner">
                                                                <div class="ct-banner-image">
                                                                    <img loading="lazy" decoding="async" src="{{ $product->image }}" alt="{{ $productName }}" title="{{ $productName }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="elementor-column elementor-col-50 elementor-top-column ct-column-none">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="ct-heading h-align- item-st-default highlight-style1">
                                                            <div class="ct-heading--inner">
                                                                <div class="item--sub-title style-default wow fadeInUp">
                                                                    <span>{{ __('Products') }}</span>
                                                                </div>
                                                                <h3 class="item--title st-default wow fadeInUp">
                                                                    <span class="ct-text-inner">{{ $productName }}</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        @php $productContent = $isAr ? ($product->content_ar ?: $product->content) : $product->content; @endphp
                                                        @if($productContent)
                                                        <div class="ct-text-editor wow fadeInUp">
                                                            <div class="ct-item--inner">
                                                                <div class="ct-text-editor elementor-clearfix">
                                                                    {{ $productContent }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </article>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
