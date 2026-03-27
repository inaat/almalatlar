@extends('layouts.app')

@php $isAr = app()->getLocale() === 'ar'; $serviceTitle = $isAr ? ($service->title_ar ?: $service->title) : $service->title; @endphp
@section('title', $serviceTitle)

@section('head_extra')
<style id="ct_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">body #ct-pagetitle{background-image:url('/wp-content/uploads/2023/07/Untitled-design-5.png');}a{color:#3f69b1;}a:hover{color:#3f69b1;}a:active{color:#3f69b1;}</style>
<style id="ct-service-dynamic-css" data-type="redux-output-css">.single-service #content{padding-top:0px;padding-bottom:0px;}</style>
@endsection

@section('body_class', 'wp-singular service-template-default single single-service wp-theme-itfirm elementor-default')

@section('content')
    <div id="ct-pagetitle" class="ct-pagetitle bg-image">
        <div class="container">
            <div class="ct-page-title-holder">
                <h1 class="ct-page-title">{{ $serviceTitle }}</h1>
            </div>
            <ul class="ct-breadcrumb">
                <li><a class="breadcrumb-entry" href="/">{{ __('Home') }}</a></li>
                <li><a class="breadcrumb-entry" href="/service">{{ __('Services') }}</a></li>
                <li><span class="breadcrumb-entry">{{ $serviceTitle }}</span></li>
            </ul>
        </div>
    </div>

    <div id="content" class="site-content">
        <div class="content-inner">
            <div class="container content-container">
                <div class="row content-row">
                    <div id="primary" class="col-12">
                        <main id="main" class="site-main">
                            <article class="service type-service status-publish hentry">
                                <div class="entry-body">
                                    <div class="entry-content clearfix">
                                        <div class="elementor">

                                            {{-- Row 1: Image + Contact Box --}}
                                            <section class="elementor-section elementor-top-section elementor-section-boxed ct-row-scroll-fixed ct-column-order">
                                                <div class="elementor-container elementor-column-gap-extended">

                                                    {{-- Left: Service Image --}}
                                                    <div class="elementor-column elementor-col-66 elementor-top-column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="ct-image-single ct-no-effect">
                                                                <div class="ct-image-single--inner">
                                                                    <img loading="lazy" decoding="async" class="img-main" src="{{ $service->image }}" alt="{{ $serviceTitle }}" title="{{ $serviceTitle }}" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Right: Contact Info Box --}}
                                                    <div class="elementor-column elementor-col-33 elementor-top-column ct-column-sticky">
                                                        <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="ct-info-box ct-info-box1 bg-image" style="background-image:url('/wp-content/uploads/2021/09/bg-info-box1.jpg');">
                                                                <div class="ct-infobox-inner">
                                                                    <div class="item--subtitle el-empty">{{ __('Contact us now') }}</div>
                                                                    <div class="item--title el-empty">{{ __('If need help!') }}</div>
                                                                    <div class="item--phone el-empty"></div>
                                                                    <div class="item--desc el-empty">{{ __('or go to contact form:') }}</div>
                                                                    <a class="ct-info-button" href="/contact">{{ __("Let's start now") }}<i class="fas fa-link"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>

                                            {{-- Row 2: Title + Description --}}
                                            <section class="elementor-section elementor-top-section elementor-section-boxed">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column">
                                                        <div class="elementor-widget-wrap elementor-element-populated">

                                                            @php
                                                                $serviceDesc    = $isAr ? ($service->description_ar ?: $service->description) : $service->description;
                                                                $serviceContent = $isAr ? ($service->content_ar    ?: $service->content)    : $service->content;
                                                            @endphp
                                                            <div class="ct-heading h-align- item-st-default highlight-style1">
                                                                <div class="ct-heading--inner">
                                                                    <h3 class="item--title st-default">
                                                                        <span class="ct-text-inner">{{ $serviceTitle }}</span>
                                                                    </h3>
                                                                </div>
                                                            </div>

                                                            <div class="ct-text-editor">
                                                                <div class="ct-item--inner">
                                                                    <div class="ct-text-editor elementor-clearfix">
                                                                        {{ $serviceDesc }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            @if($serviceContent)
                                                            <div class="ct-text-editor mt-4">
                                                                <div class="ct-item--inner">
                                                                    <div class="ct-text-editor elementor-clearfix">
                                                                        {!! $serviceContent !!}
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
                                </div>
                            </article>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
