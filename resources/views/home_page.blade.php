<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>
            @yield('page_title', setting('site.title') . " - " .
            setting('site.description'))
        </title>
	<link rel="icon" type="image/x-icon" href="/storage/settings/July2022/gqUw5wHXc9YsreJxXass.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"/>
        <link href="{{ asset('css/common.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/extra.css') }}" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
            }
            body {
                margin: 0;
            }
            a {
                background-color: transparent;
            }
            [hidden] {
                display: none;
            }
            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont,
                    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans,
                    sans-serif, Apple Color Emoji, Segoe UI Emoji,
                    Segoe UI Symbol, Noto Color Emoji;
                line-height: 1.5;
            }
            *,
            :after,
            :before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            svg,
            video {
                display: block;
                vertical-align: middle;
            }
            video {
                max-width: 100%;
                height: auto;
            }
            .bg-white {
                --bg-opacity: 1;
                background-color: #fff;
                background-color: rgba(255, 255, 255, var(--bg-opacity));
            }
            .bg-gray-100 {
                --bg-opacity: 1;
                background-color: #f7fafc;
                background-color: rgba(247, 250, 252, var(--bg-opacity));
            }
            .border-gray-200 {
                --border-opacity: 1;
                border-color: #edf2f7;
                border-color: rgba(237, 242, 247, var(--border-opacity));
            }
            .border-t {
                border-top-width: 1px;
            }
            .flex {
                display: flex;
            }
            .grid {
                display: grid;
            }
            .hidden {
                display: none;
            }
            .items-center {
                align-items: center;
            }
            .justify-center {
                justify-content: center;
            }
            .font-semibold {
                font-weight: 600;
            }
            .h-5 {
                height: 1.25rem;
            }
            .h-8 {
                height: 2rem;
            }
            .h-16 {
                height: 4rem;
            }
            .text-sm {
                font-size: 0.875rem;
            }
            .text-lg {
                font-size: 1.125rem;
            }
            .leading-7 {
                line-height: 1.75rem;
            }
            .mx-auto {
                margin-left: auto;
                margin-right: auto;
            }
            .ml-1 {
                margin-left: 0.25rem;
            }
            .mt-2 {
                margin-top: 0.5rem;
            }
            .mr-2 {
                margin-right: 0.5rem;
            }
            .ml-2 {
                margin-left: 0.5rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .ml-4 {
                margin-left: 1rem;
            }
            .mt-8 {
                margin-top: 2rem;
            }
            .ml-12 {
                margin-left: 3rem;
            }
            .-mt-px {
                margin-top: -1px;
            }
            .max-w-6xl {
                max-width: 72rem;
            }
            .min-h-screen {
                min-height: 100vh;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .p-6 {
                padding: 1.5rem;
            }
            .py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .pt-8 {
                padding-top: 2rem;
            }
            .fixed {
                position: fixed;
            }
            .relative {
                position: relative;
            }
            .top-0 {
                top: 0;
            }
            .right-0 {
                right: 0;
            }
            .shadow {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
                    0 1px 2px 0 rgba(0, 0, 0, 0.06);
            }
            .text-center {
                text-align: center;
            }
            .text-gray-200 {
                --text-opacity: 1;
                color: #edf2f7;
                color: rgba(237, 242, 247, var(--text-opacity));
            }
            .text-gray-300 {
                --text-opacity: 1;
                color: #e2e8f0;
                color: rgba(226, 232, 240, var(--text-opacity));
            }
            .text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity));
            }
            .text-gray-500 {
                --text-opacity: 1;
                color: #a0aec0;
                color: rgba(160, 174, 192, var(--text-opacity));
            }
            .text-gray-600 {
                --text-opacity: 1;
                color: #718096;
                color: rgba(113, 128, 150, var(--text-opacity));
            }
            .text-gray-700 {
                --text-opacity: 1;
                color: #4a5568;
                color: rgba(74, 85, 104, var(--text-opacity));
            }
            .text-gray-900 {
                --text-opacity: 1;
                color: #1a202c;
                color: rgba(26, 32, 44, var(--text-opacity));
            }
            .underline {
                text-decoration: underline;
            }
            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .w-5 {
                width: 1.25rem;
            }
            .w-8 {
                width: 2rem;
            }
            .w-auto {
                width: auto;
            }
            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            @media (min-width: 640px) {
                .sm\:rounded-lg {
                    border-radius: 0.5rem;
                }
                .sm\:block {
                    display: block;
                }
                .sm\:items-center {
                    align-items: center;
                }
                .sm\:justify-start {
                    justify-content: flex-start;
                }
                .sm\:justify-between {
                    justify-content: space-between;
                }
                .sm\:h-20 {
                    height: 5rem;
                }
                .sm\:ml-0 {
                    margin-left: 0;
                }
                .sm\:px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }
                .sm\:pt-0 {
                    padding-top: 0;
                }
                .sm\:text-left {
                    text-align: left;
                }
                .sm\:text-right {
                    text-align: right;
                }
            }
            @media (min-width: 768px) {
                .md\:border-t-0 {
                    border-top-width: 0;
                }
                .md\:border-l {
                    border-left-width: 1px;
                }
                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }
            @media (min-width: 1024px) {
                .lg\:px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem;
                }
            }
            @media (prefers-color-scheme: dark) {
                .dark\:bg-gray-800 {
                    --bg-opacity: 1;
                    background-color: #2d3748;
                    background-color: rgba(45, 55, 72, var(--bg-opacity));
                }
                .dark\:bg-gray-900 {
                    --bg-opacity: 1;
                    background-color: #1a202c;
                    background-color: rgba(26, 32, 44, var(--bg-opacity));
                }
                .dark\:border-gray-700 {
                    --border-opacity: 1;
                    border-color: #4a5568;
                    border-color: rgba(74, 85, 104, var(--border-opacity));
                }
                .dark\:text-white {
                    --text-opacity: 1;
                    color: #fff;
                    color: rgba(255, 255, 255, var(--text-opacity));
                }
                .dark\:text-gray-400 {
                    --text-opacity: 1;
                    color: #cbd5e0;
                    color: rgba(203, 213, 224, var(--text-opacity));
                }
                .dark\:text-gray-500 {
                    --tw-text-opacity: 1;
                    color: #6b7280;
                    color: rgba(107, 114, 128, var(--tw-text-opacity));
                }
            }
        </style>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <style type="text/css">
            svg:not(:root).svg-inline--fa {
                overflow: visible;
            }
            .svg-inline--fa {
                display: inline-block;
                font-size: inherit;
                height: 1em;
                overflow: visible;
                vertical-align: -0.125em;
            }
            .svg-inline--fa.fa-lg {
                vertical-align: -0.225em;
            }
            .svg-inline--fa.fa-w-1 {
                width: 0.0625em;
            }
            .svg-inline--fa.fa-w-2 {
                width: 0.125em;
            }
            .svg-inline--fa.fa-w-3 {
                width: 0.1875em;
            }
            .svg-inline--fa.fa-w-4 {
                width: 0.25em;
            }
            .svg-inline--fa.fa-w-5 {
                width: 0.3125em;
            }
            .svg-inline--fa.fa-w-6 {
                width: 0.375em;
            }
            .svg-inline--fa.fa-w-7 {
                width: 0.4375em;
            }
            .svg-inline--fa.fa-w-8 {
                width: 0.5em;
            }
            .svg-inline--fa.fa-w-9 {
                width: 0.5625em;
            }
            .svg-inline--fa.fa-w-10 {
                width: 0.625em;
            }
            .svg-inline--fa.fa-w-11 {
                width: 0.6875em;
            }
            .svg-inline--fa.fa-w-12 {
                width: 0.75em;
            }
            .svg-inline--fa.fa-w-13 {
                width: 0.8125em;
            }
            .svg-inline--fa.fa-w-14 {
                width: 0.875em;
            }
            .svg-inline--fa.fa-w-15 {
                width: 0.9375em;
            }
            .svg-inline--fa.fa-w-16 {
                width: 1em;
            }
            .svg-inline--fa.fa-w-17 {
                width: 1.0625em;
            }
            .svg-inline--fa.fa-w-18 {
                width: 1.125em;
            }
            .svg-inline--fa.fa-w-19 {
                width: 1.1875em;
            }
            .svg-inline--fa.fa-w-20 {
                width: 1.25em;
            }
            .svg-inline--fa.fa-pull-left {
                margin-right: 0.3em;
                width: auto;
            }
            .svg-inline--fa.fa-pull-right {
                margin-left: 0.3em;
                width: auto;
            }
            .svg-inline--fa.fa-border {
                height: 1.5em;
            }
            .svg-inline--fa.fa-li {
                width: 2em;
            }
            .svg-inline--fa.fa-fw {
                width: 1.25em;
            }
            .fa-layers svg.svg-inline--fa {
                bottom: 0;
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 0;
            }
            .fa-layers {
                display: inline-block;
                height: 1em;
                position: relative;
                text-align: center;
                vertical-align: -0.125em;
                width: 1em;
            }
            .fa-layers svg.svg-inline--fa {
                -webkit-transform-origin: center center;
                transform-origin: center center;
            }
            .fa-layers-counter,
            .fa-layers-text {
                display: inline-block;
                position: absolute;
                text-align: center;
            }
            .fa-layers-text {
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                -webkit-transform-origin: center center;
                transform-origin: center center;
            }
            .fa-layers-counter {
                background-color: #ff253a;
                border-radius: 1em;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                color: #fff;
                height: 1.5em;
                line-height: 1;
                max-width: 5em;
                min-width: 1.5em;
                overflow: hidden;
                padding: 0.25em;
                right: 0;
                text-overflow: ellipsis;
                top: 0;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: top right;
                transform-origin: top right;
            }
            .fa-layers-bottom-right {
                bottom: 0;
                right: 0;
                top: auto;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: bottom right;
                transform-origin: bottom right;
            }
            .fa-layers-bottom-left {
                bottom: 0;
                left: 0;
                right: auto;
                top: auto;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: bottom left;
                transform-origin: bottom left;
            }
            .fa-layers-top-right {
                right: 0;
                top: 0;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: top right;
                transform-origin: top right;
            }
            .fa-layers-top-left {
                left: 0;
                right: auto;
                top: 0;
                -webkit-transform: scale(0.25);
                transform: scale(0.25);
                -webkit-transform-origin: top left;
                transform-origin: top left;
            }
            .fa-lg {
                font-size: 1.3333333333em;
                line-height: 0.75em;
                vertical-align: -0.0667em;
            }
            .fa-xs {
                font-size: 0.75em;
            }
            .fa-sm {
                font-size: 0.875em;
            }
            .fa-1x {
                font-size: 1em;
            }
            .fa-2x {
                font-size: 2em;
            }
            .fa-3x {
                font-size: 3em;
            }
            .fa-4x {
                font-size: 4em;
            }
            .fa-5x {
                font-size: 5em;
            }
            .fa-6x {
                font-size: 6em;
            }
            .fa-7x {
                font-size: 7em;
            }
            .fa-8x {
                font-size: 8em;
            }
            .fa-9x {
                font-size: 9em;
            }
            .fa-10x {
                font-size: 10em;
            }
            .fa-fw {
                text-align: center;
                width: 1.25em;
            }
            .fa-ul {
                list-style-type: none;
                margin-left: 2.5em;
                padding-left: 0;
            }
            .fa-ul > li {
                position: relative;
            }
            .fa-li {
                left: -2em;
                position: absolute;
                text-align: center;
                width: 2em;
                line-height: inherit;
            }
            .fa-border {
                border: solid 0.08em #eee;
                border-radius: 0.1em;
                padding: 0.2em 0.25em 0.15em;
            }
            .fa-pull-left {
                float: left;
            }
            .fa-pull-right {
                float: right;
            }
            .fa.fa-pull-left,
            .fab.fa-pull-left,
            .fal.fa-pull-left,
            .far.fa-pull-left,
            .fas.fa-pull-left {
                margin-right: 0.3em;
            }
            .fa.fa-pull-right,
            .fab.fa-pull-right,
            .fal.fa-pull-right,
            .far.fa-pull-right,
            .fas.fa-pull-right {
                margin-left: 0.3em;
            }
            .fa-spin {
                -webkit-animation: fa-spin 2s infinite linear;
                animation: fa-spin 2s infinite linear;
            }
            .fa-pulse {
                -webkit-animation: fa-spin 1s infinite steps(8);
                animation: fa-spin 1s infinite steps(8);
            }
            @-webkit-keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            @keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0);
                }
                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg);
                }
            }
            .fa-rotate-90 {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg);
            }
            .fa-rotate-180 {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
            }
            .fa-rotate-270 {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg);
            }
            .fa-flip-horizontal {
                -webkit-transform: scale(-1, 1);
                transform: scale(-1, 1);
            }
            .fa-flip-vertical {
                -webkit-transform: scale(1, -1);
                transform: scale(1, -1);
            }
            .fa-flip-both,
            .fa-flip-horizontal.fa-flip-vertical {
                -webkit-transform: scale(-1, -1);
                transform: scale(-1, -1);
            }
            :root .fa-flip-both,
            :root .fa-flip-horizontal,
            :root .fa-flip-vertical,
            :root .fa-rotate-180,
            :root .fa-rotate-270,
            :root .fa-rotate-90 {
                -webkit-filter: none;
                filter: none;
            }
            .fa-stack {
                display: inline-block;
                height: 2em;
                position: relative;
                width: 2.5em;
            }
            .fa-stack-1x,
            .fa-stack-2x {
                bottom: 0;
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 0;
            }
            .svg-inline--fa.fa-stack-1x {
                height: 1em;
                width: 1.25em;
            }
            .svg-inline--fa.fa-stack-2x {
                height: 2em;
                width: 2.5em;
            }
            .fa-inverse {
                color: #fff;
            }
            .sr-only {
                border: 0;
                clip: rect(0, 0, 0, 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }
            .sr-only-focusable:active,
            .sr-only-focusable:focus {
                clip: auto;
                height: auto;
                margin: 0;
                overflow: visible;
                position: static;
                width: auto;
            }
            .svg-inline--fa .fa-primary {
                fill: var(--fa-primary-color, currentColor);
                opacity: 1;
                opacity: var(--fa-primary-opacity, 1);
            }
            .svg-inline--fa .fa-secondary {
                fill: var(--fa-secondary-color, currentColor);
                opacity: 0.4;
                opacity: var(--fa-secondary-opacity, 0.4);
            }
            .svg-inline--fa.fa-swap-opacity .fa-primary {
                opacity: 0.4;
                opacity: var(--fa-secondary-opacity, 0.4);
            }
            .svg-inline--fa.fa-swap-opacity .fa-secondary {
                opacity: 1;
                opacity: var(--fa-primary-opacity, 1);
            }
            .svg-inline--fa mask .fa-primary,
            .svg-inline--fa mask .fa-secondary {
                fill: #000;
            }
            .fad.fa-inverse {
                color: #fff;
            }
        </style>
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    </head>
    <body class="">
        <div class="container-fluid target-home">
            <header class="navbar navbar-expand-md navbar-expand-md navbar-dark d-md-flex justify-content-center py-0 mb-4 fixed-top">
                <div class="container row p-0">
                        <div class="col-3">
                            <a class="navbar-brand p-0 scroll-to" data-target="target-home">
                                <img src="{{ Storage::disk(config('voyager.storage.disk'))->url(setting('site.logo')) }}"
                                    class="header__logo"/>
                            </a>
                        </div>
                        <div class="col-9 d-flex justify-content-end">
                            <div id="navbarMain">
                                {!! menu('site_navbar', 'site_navbar') !!}
                            </div>
                        </div>
                </div>
            </header>
        </div>
        <div class="clearfix"></div>
        <main class="wf-wp wf-main container-fluid" style="min-height: calc(80vh)">
            <div class="wf-ct">
                <div class="row">
                    <div class="col-12">
                        <div class="carousel-wp">
                            <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators d-block">
                                    <div class="container-xxl container-res">
                                        <div class="row">
                                            <div class="col-12 col-md-8">
                                                <div class="carousel-caption text-start">
                                                    <h4 class="header-banner-title">
                                                        {{ setting('site-header.header_banner_1') }}
                                                    </h4>
                                                    <p>{{setting('site-header.header_banner_2')}}</p>
                                                    <button
                                                        class="btn btn-lg btn-outline-primary scroll-to d-flex flex-nowrap"
                                                        data-target="target-menu" title="Menu">
                                                        <span>{{ setting('site-header.header_banner_button') }}</span>
                                                        <img src="/images/icon-arrow-left.png" class=""/>
                                                    </button>
                                                    <div class="info">
                                                        <div class="address w-100">
                                                            <span>{{ setting('site-header.header_banner_address') }}</span>
                                                        </div>
                                                        <div class="social w-100 d-flex">
                                                            <a href="{{ setting('site-footer.footer_facebook') }}" target="_blank">
                                                                <img src="/images/icon-facebook-top.png"/>
                                                                <span >Facebook</span>
                                                            </a>
                                                            <a href="{{ setting('site-footer.footer_instagram') }}" target="_blank">
                                                                <img src="/images/icon-instagram-top.png"/>
                                                                <span>Instagram</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="control d-flex justify-content-end">
                                                    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0"
                                                            class="" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#mainCarousel"
                                                            data-bs-slide-to="1" aria-label="Slide 2"
                                                            class="active" aria-current="true"></button>
                                                    @if(setting('site-header.carousel_image_3'))
                                                    <button type="button" data-bs-target="#mainCarousel"
                                                            data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
				<div class="carousel-inner">
                                    <div class="carousel-item active carousel-item-start" data-bs-interval="5000">
                                        <img src="{{ Storage::disk(config('voyager.storage.disk'))->url(setting('site-header.carousel_image_1')) }}" class=""/>
                                    </div>
                                    <div class="carousel-item carousel-item-next carousel-item-start" data-bs-interval="5000">
                                        <img src="{{ Storage::disk(config('voyager.storage.disk'))->url(setting('site-header.carousel_image_2')) }}" class=""/>
                                    </div>
                                        <div class="carousel-item" data-bs-interval="5000">
                                            <img src="{{ Storage::disk(config('voyager.storage.disk'))->url(setting('site-header.carousel_image_3')) }}" class=""/>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="container about-us target-about-us">
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <img src="/images/story-01-v2.jpg" class="screen-delay screen-show"/>
                                    <div class="story-box d-block d-sm-none">
                                        <div class="head">
                                            <h3 class="screen-delay screen-show story__title">
                                                {{ setting('site-story.story_title') }}
                                            </h3>
                                        </div>
                                        <div class="text screen-delay screen-show story__subtitle">
                                            {{ setting('site-story.story_subtitle') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-8">
                                    <div class="row block-first">
                                        <div class="col-12 col-md-4 col-lg-5">
                                            <img src="/images/story-02.jpg" class="screen-delay screen-show"/>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-7 d-none d-sm-block">
                                            <div class="head">
                                                <h3 class="screen-delay screen-show story__title">
                                                    {{ setting('site-story.story_title') }}
                                                </h3>
                                            </div>
                                            <div class="text screen-delay screen-show story__subtitle">
                                                {{ setting('site-story.story_subtitle') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row block-second">
                                        <div class="col-12 col-md-4 col-lg-5">
                                            <img src="/images/story-03.jpg" class="screen-delay screen-show"/>
                                        </div>
                                        <div class="col-12 col-md-8 col-lg-7 d-none d-sm-block">
                                            <div class="text screen-delay screen-show">
                                                {{ setting('site-story.story_description') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block d-sm-none mobile-story-box-text screen-delay screen-show">
                                {{ setting('site-story.story_description') }}
                            </div>
                        </div>

                        <div class="container menu target-menu">
                            <div class="menu__head row">
                                <div class="col-2">
                                    <h3 class="d-flex flex-row">Menu</h3>
                                </div>
                                
                                <div class="col-10">
                                    <hr>
                                </div>
                            </div>
                            
                            <div id="products"></div>
                            <div class="row">
                                <!-- <div class="col-12 col-md-4">
                                    {!! menu('site_sidebar', 'site_sidebar') !!}
                                </div> -->
                                <!-- <div class="col-12 col-md-8">
                                    @include('vendor.voyager.products._product_items', $products)
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="clearfix"></div>
        <footer class="wf-wp wf-footer container-fluid target-contact-us">
            <div class="container wf-ct">
                <div class="row">
                    <div class="col-12 col-md-6 map text-end">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1654.4295340722788!2d150.85651343872829!3d-33.970461668870335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12eca8fec2acb9%3A0x18e95a5328ed07ae!2s52%20Soldiers%20Parade%2C%20Edmondson%20Park%20NSW%202174%2C%20Australia!5e0!3m2!1sen!2s!4v1742655175485!5m2!1sen!2" 
                                width="415" height="510" style="border:0;" allowfullscreen="" loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade" class="d-none d-sm-block iframe-google-map"></iframe> 
                    </div>
                    <div class="col-12 col-md-6 contact-us">
                        <div>
                            <div class="head">
                                <h3 class="contact-us__title">{{ setting('site-footer.footer_title') }}</h3>
                            </div>
                            <ul class="">
                                <li class="phone">
                                    <a href="tel:{{ setting('site-footer.footer_phone') }}">
                                        {{ setting('site-footer.footer_phone') }}
                                    </a>
                                </li>
                                <li class="address">
                                    {!! setting('site-footer.footer_address') !!}
                                </li>
                                <li class="email">
                                    <a href="mailto:{{ setting('site-footer.footer_mail') }}">
                                        {{ setting('site-footer.footer_mail') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="social w-100">
                                <a href="{{ setting('site-footer.footer_facebook') }}" target="_blank">
                                    <img src="/images/icons/icon-facebook-bottom.png" width="48" height="48"/>
                                </a>
                                <a href="{{ setting('site-footer.footer_instagram') }}" target="_blank">
                                    <img src="/images/icons/icon-instagram-bottom.png" width="48" height="48"/>
                                </a>
                                <a href="{{ setting('site-footer.footer_twitter') }}" target="_blank">
                                    <img src="/images/icon-twitter-bottom.png" width="48" height="48"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="back-to-top visible" href="#" title="Top">
            <svg class="svg-inline--fa fa-arrow-up fa-w-14"
                aria-hidden="true"
                focusable="false"
                data-prefix="fa"
                data-icon="arrow-up"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"
                data-fa-i2svg="">
                <path
                    fill="currentColor"
                    d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"
                ></path>
            </svg>
            <br />
            Top
        </a>

        <script src="/js/common.js"></script>
        <script src="/js/extra.js"></script>
        <script src="/js/scroll.js"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
