<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="description"/>
    <meta name="keywords" content="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="shortcut icon" href="{{ asset('storage/website_images/header_logo.png') }}"/>
    <title>@yield('title')</title>
    <!-- styles-->
    <link rel="stylesheet" href="{{ asset('design/front/css/styles.min.css') }}"/>
    <!-- web-font loader-->
    <style type="text/css">

        /* ========================================
           COMPREHENSIVE RESPONSIVE DESIGN SYSTEM
           ======================================== */
        
        /* Mobile First Approach - Base styles for mobile */
        * {
            box-sizing: border-box;
        }
        
        body, html {
            width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        .container, .container-fluid {
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }
        
        /* ========================================
           RESPONSIVE BREAKPOINTS
           ======================================== */
        
        /* Extra Small devices (phones, 576px and down) */
        @media (max-width: 575.98px) {
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
            
            .section {
                padding: 20px 0;
            }
            
            .heading__title {
                font-size: 20px !important;
                line-height: 1.3;
            }
            
            .heading__pre-title {
                font-size: 12px;
            }
            
            .button {
                width: 100%;
                padding: 12px 16px;
                font-size: 14px;
            }
            
            .promo-slider__title {
                font-size: 18px !important;
            }
            
            .promo-slider__subtitle {
                font-size: 14px !important;
            }
        }
        
        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            .section {
                padding: 30px 0;
            }
            
            .heading__title {
                font-size: 22px !important;
            }
            
            .button {
                padding: 14px 20px;
                font-size: 15px;
            }
        }
        
        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .container {
                padding-left: 20px;
                padding-right: 20px;
            }
            
            .section {
                padding: 40px 0;
            }
            
            .heading__title {
                font-size: 24px !important;
            }
            
            .button {
                padding: 15px 25px;
                font-size: 16px;
            }
            
            /* Tablet-specific layout adjustments */
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .container {
                padding-left: 25px;
                padding-right: 25px;
            }
            
            .section {
                padding: 50px 0;
            }
            
            .heading__title {
                font-size: 28px !important;
            }
            
            .button {
                padding: 16px 30px;
                font-size: 16px;
            }
        }
        
        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .container {
                padding-left: 30px;
                padding-right: 30px;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .heading__title {
                font-size: 32px !important;
            }
            
            .button {
                padding: 18px 35px;
                font-size: 17px;
            }
        }
        
        /* ========================================
           RESPONSIVE IMAGES AND MEDIA
           ======================================== */
        
        /* Base image styles */
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
        .img--bg {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        
        /* Responsive images for different breakpoints */
        @media (max-width: 575.98px) {
            .promo-slider__item img {
                height: 250px;
                object-fit: cover;
            }
            
            .about-us--blue .img-box__img {
                height: 200px;
            }
            
            .action-block {
                min-height: 200px;
            }
        }
        
        @media (min-width: 576px) and (max-width: 767.98px) {
            .promo-slider__item img {
                height: 300px;
                object-fit: cover;
            }
            
            .about-us--blue .img-box__img {
                height: 250px;
            }
            
            .action-block {
                min-height: 250px;
            }
        }
        
        @media (min-width: 768px) and (max-width: 991.98px) {
            .promo-slider__item img {
                height: 400px;
                object-fit: cover;
            }
            
            .about-us--blue .img-box__img {
                height: 300px;
            }
            
            .action-block {
                min-height: 300px;
            }
        }
        
        @media (min-width: 992px) {
            .promo-slider__item img {
                height: 500px;
                object-fit: cover;
            }
            
            .about-us--blue .img-box__img {
                height: 400px;
            }
            
            .action-block {
                min-height: 350px;
            }
        }
        
        /* ========================================
           RESPONSIVE NAVIGATION
           ======================================== */
        
        /* Mobile navigation (950px and below) */
        @media (max-width: 950px) {
            .main-menu {
                display: none !important;
            }
            
            .dropdown-trigger {
                display: block !important;
            }
        }
        
        /* Desktop navigation (951px and above) */
        @media (min-width: 951px) {
            .main-menu {
                display: inline-flex !important;
            }
            
            .dropdown-trigger {
                display: none !important;
            }
            
            .mobile-nav {
                display: none !important;
            }
        }

        /* ========================================
           MOBILE LAYOUT OPTIMIZATION
           ======================================== */
        
        /* Fix excessive spacing on mobile */
        @media (max-width: 950px) {
            /* Reduce section padding on mobile */
            .section {
                padding: 20px 0 !important;
                margin: 0 !important;
            }
            
            /* Fix promo section spacing */
            .promo {
                padding: 0 !important;
                margin: 0 !important;
            }
            
            .promo-slider {
                margin: 0 !important;
                padding: 0 !important;
            }
            
            /* Fix about section spacing */
            .about-us--blue {
                padding: 20px 15px !important;
                margin: 0 !important;
            }
            
            /* Fix join us section spacing */
            .no-padding-top,
            .no-padding-bottom {
                padding: 0 !important;
            }
            
            /* Fix partners section spacing */
            .donors--style-2 {
                padding: 20px 0 !important;
            }
            
            /* Reduce container padding on mobile */
            .container {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
            
            /* Fix row spacing */
            .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            
            /* Ensure content fills viewport */
            .main {
                min-height: auto !important;
            }
            
            /* Fix any empty space issues */
            .page-wrapper {
                min-height: auto !important;
            }
            
            /* Optimize action blocks */
            .action-block {
                min-height: 200px !important;
                margin: 0 !important;
            }
            
            /* Fix carousel spacing */
            .carousel {
                margin: 0 !important;
                padding: 0 !important;
            }
            
            .carousel-inner {
                margin: 0 !important;
                padding: 0 !important;
            }
        }
        
        /* ========================================
           MOBILE WHITE AREA FIXES
           ======================================== */
        
        @media (max-width: 950px) {
            /* Force full width on mobile */
            body, html {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                overflow-x: hidden !important;
                background: #fff !important;
            }
            
            /* Reset any unwanted backgrounds that might cause dark margins */
            .page-wrapper {
                background-color: #fff !important;
                min-height: auto !important;
            }
            
            .main {
                background-color: #fff !important;
                min-height: auto !important;
            }
            
            /* Ensure sections have proper backgrounds and no excessive spacing */
            .section:not(.about-us--blue) {
                background-color: #fff !important;
                padding: 15px 0 !important;
                margin: 0 !important;
            }
            
            /* Remove any excessive margins or padding */
            * {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }
            
            /* Fix specific section spacing */
            .section + .section {
                margin-top: 0 !important;
                padding-top: 15px !important;
            }
            
            /* Ensure content is visible and properly spaced */
            .section .container {
                background: transparent;
                padding: 0 15px !important;
            }
            
            .section .row {
                background: transparent;
                margin: 0 !important;
            }
            
            /* Fix any hidden content */
            .section * {
                visibility: visible !important;
                opacity: 1 !important;
            }
            
            /* Specific fixes for content sections */
            .promo-slider__item {
                min-height: 300px !important;
            }
            
            .about-us--blue {
                min-height: auto !important;
                padding: 20px 15px !important;
            }
            
            .action-block {
                min-height: 200px !important;
                padding: 20px !important;
            }
            
            .donors--style-2 {
                min-height: auto !important;
                padding: 20px 0 !important;
            }
            
            /* Remove any empty space between sections */
            .section:empty {
                display: none !important;
            }
            
            /* Ensure proper content flow */
            .main > * {
                margin-bottom: 0 !important;
            }
            
            .main > * + * {
                margin-top: 0 !important;
            }
            
            .main-menu {
                display: none !important;
            }
            
            .dropdown-trigger {
                display: block !important;
            }
            
            .mobile-nav {
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                opacity: 0;
                visibility: hidden;
                z-index: 9999;
                transition: all 0.3s ease;
            }
            
            .mobile-nav--active {
                opacity: 1;
                visibility: visible;
            }
            
            .mobile-nav__inner {
                width: 300px;
                min-height: 100%;
                padding: 50px 20px;
                background-color: #fff;
                transform: translateX(-300px);
                transition: all 0.3s ease;
                overflow-y: auto;
            }
            
            .mobile-nav--active .mobile-nav__inner {
                transform: translateX(0);
            }
            
            .mobile-menu {
                list-style: none;
                padding: 0;
                margin: 0;
                background: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            }
            
            .mobile-menu__item {
                margin-bottom: 0;
                border-bottom: 1px solid #f0f0f0;
            }
            
            .mobile-menu__item:last-child {
                border-bottom: none;
            }
            
            .mobile-menu__link {
                display: block;
                padding: 15px 20px;
                color: #333;
                text-decoration: none;
                font-weight: 500;
                font-size: 16px;
                transition: all 0.3s ease;
                background: #fff;
            }
            
            .mobile-menu__link:hover {
                color: #002344;
                background: #f8f9fa;
                padding-left: 25px;
            }
            
            .mobile-menu__sub-list {
                list-style: none;
                padding: 0;
                margin: 0;
                background: #f8f9fa;
                border-radius: 0 0 8px 8px;
                display: none;
            }
            
            .mobile-menu__item--has-child .mobile-menu__link:after {
                content: '+';
                float: right;
                font-size: 18px;
                font-weight: bold;
                color: #002344;
            }
            
            .mobile-menu__item--has-child.active .mobile-menu__link:after {
                content: '-';
            }
            
            .mobile-menu__item--has-child.active .mobile-menu__sub-list {
                display: block;
            }
            
            .mobile-menu__sub-list li {
                margin-bottom: 0;
                border-bottom: 1px solid #e9ecef;
            }
            
            .mobile-menu__sub-list li:last-child {
                border-bottom: none;
            }
            
            .mobile-menu__sub-list a {
                color: #666;
                text-decoration: none;
                font-size: 14px;
                padding: 12px 20px;
                display: block;
                transition: all 0.3s ease;
            }
            
            .mobile-menu__sub-list a:hover {
                color: #002344;
                background: #fff;
                padding-left: 25px;
            }
            
            /* Close button for mobile nav */
            .mobile-nav__close {
                position: absolute;
                top: 20px;
                right: 20px;
                background: none;
                border: none;
                font-size: 24px;
                color: #333;
                cursor: pointer;
                z-index: 10000;
            }
            
            /* Prevent body scroll when mobile nav is open */
            body.mobile-nav-open {
                overflow: hidden;
            }
            
            /* Ensure header is properly positioned on mobile */
            .header--front_3 {
                position: relative;
                z-index: 1000;
            }
            
            /* Make sure dropdown trigger is visible and properly styled */
            .dropdown-trigger {
                display: block !important;
                margin: 0 15px 0 0;
            }
            
            /* Hide main menu completely on mobile */
            .main-menu {
                display: none !important;
            }
            
            /* Ensure header logo is properly sized on mobile */
            .header-logo__img {
                max-height: 40px;
                width: auto;
            }
            
            /* Fix container padding on mobile */
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            /* Ensure proper spacing for mobile content */
            .promo-slider__title {
                font-size: 24px !important;
                line-height: 1.3;
            }
            
            .promo-slider__subtitle {
                font-size: 16px !important;
                line-height: 1.4;
            }
            
            /* Fix button sizing on mobile */
            .button {
                padding: 12px 24px;
                font-size: 14px;
            }
            
            /* Ensure images are responsive */
            .img--bg {
                width: 100%;
                height: auto;
                object-fit: cover;
            }
            
            /* Optimize all images for mobile */
            img {
                max-width: 100%;
                height: auto;
            }
            
            /* Ensure logo images are properly sized */
            .header-logo__img,
            .footer-logo__img {
                max-width: 200px;
                height: auto;
            }
            
            /* Optimize slider images for mobile */
            .promo-slider__item img {
                width: 100%;
                height: 300px;
                object-fit: cover;
            }
            
            /* Fix slider layout for mobile */
            .promo-slider__item .col-xl-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .promo-slider__item .container {
                padding: 20px 15px;
            }
            
            .promo-slider__item .row {
                margin: 0;
            }
            
            /* Fix about section layout for mobile */
            .about-us--blue .col-lg-6,
            .about-us--blue .col-xl-5,
            .about-us--blue .col-xl-6 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 30px;
            }
            
            .about-us--blue .offset-xl-1 {
                margin-left: 0;
            }
            
            /* Fix heading spacing on mobile */
            .heading {
                margin-bottom: 20px;
            }
            
            .heading__title {
                font-size: 24px !important;
                line-height: 1.3;
                margin-bottom: 15px;
            }
            
            .heading__pre-title {
                font-size: 14px;
                margin-bottom: 10px;
            }
            
            /* Fix button sizing on mobile */
            .button {
                width: 100%;
                text-align: center;
                margin: 15px 0;
                padding: 15px 20px;
                font-size: 16px;
            }
            
            /* Fix text spacing on mobile */
            p {
                margin-bottom: 15px;
                line-height: 1.6;
            }
            
            /* Optimize content images */
            .content img,
            .about img,
            .partners img {
                max-width: 100%;
                height: auto;
            }
            
            /* Fix container padding on mobile */
            .container {
                padding-left: 15px;
                padding-right: 15px;
                width: 100% !important;
                max-width: 100% !important;
            }
            
            /* Force full width sections */
            .section {
                width: 100% !important;
                margin: 0 !important;
                padding: 30px 15px !important;
            }
            
            /* Fix promo section for mobile */
            .promo {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            
            .promo-slider {
                width: 100% !important;
            }
            
            .promo-slider__item {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            
            /* Fix about section for mobile */
            .about-us--blue {
                width: 100% !important;
                margin: 0 !important;
                padding: 30px 15px !important;
                background-color: #002344 !important;
                min-height: auto !important;
            }
            
            .about-us--blue .heading__title,
            .about-us--blue .heading__pre-title,
            .about-us--blue p {
                color: #fff !important;
            }
            
            .about-us--blue .img-box {
                margin-bottom: 20px;
            }
            
            .about-us--blue .img-box__img {
                height: 250px;
                overflow: hidden;
                border-radius: 8px;
            }
            
            .about-us--blue .img-box__img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            /* Fix join us section for mobile */
            .no-padding-top,
            .no-padding-bottom {
                padding: 0 !important;
            }
            
            .row.no-gutters {
                margin: 0 !important;
            }
            
            .row.no-gutters > [class*="col-"] {
                padding: 0 !important;
            }
            
            /* Fix join us section for mobile */
            .action-block {
                min-height: 250px;
                margin-bottom: 20px;
            }
            
            .action-block__title {
                font-size: 20px !important;
                margin-bottom: 15px;
            }
            
            .action-block__link {
                width: 100%;
                text-align: center;
                padding: 12px 20px;
                font-size: 14px;
            }
            
            /* Fix partners carousel for mobile */
            .carousel-item {
                padding: 10px;
            }
            
            .carousel-item img {
                max-height: 80px;
                width: auto;
                margin: 0 auto;
            }
            
            /* Fix footer for mobile */
            .footer {
                padding: 30px 0;
            }
            
            .footer .row {
                margin: 0;
            }
            
            .footer .col-lg-3,
            .footer .col-md-6 {
                margin-bottom: 30px;
            }
            
            /* Fix any overflow issues */
            .row {
                margin-left: -15px;
                margin-right: -15px;
            }
            
            .row > * {
                padding-left: 15px;
                padding-right: 15px;
            }
            
            /* Override any dark backgrounds that might cause margins */
            * {
                box-sizing: border-box;
            }
            
            /* Ensure no unwanted margins or backgrounds */
            .main {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            
            /* Fix header for mobile */
            .header {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 15px !important;
            }
            
            /* Fix footer for mobile */
            .footer {
                width: 100% !important;
                margin: 0 !important;
                padding: 30px 15px !important;
            }
            
            /* Additional overrides for 950px and below */
            .main-menu {
                display: none !important;
            }
            
            .dropdown-trigger {
                display: block !important;
            }
            
            /* Ensure all Bootstrap columns stack properly */
            [class*="col-"] {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }
            
            /* Override any desktop-specific styles */
            .col-lg-6,
            .col-xl-5,
            .col-xl-6 {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }
            
            /* Fix any remaining layout issues */
            .row {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
            
            .container-fluid {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
        }
        
        /* ========================================
           RESPONSIVE GRID SYSTEM
           ======================================== */
        
        /* Mobile-first grid approach */
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-left: -15px;
            margin-right: -15px;
        }
        
        [class*="col-"] {
            position: relative;
            width: 100%;
            padding-left: 15px;
            padding-right: 15px;
        }
        
        /* Extra small devices (phones, 576px and down) */
        @media (max-width: 575.98px) {
            [class*="col-"] {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            
            .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }
        
        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            
            .col-lg-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            
            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        
        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            
            .col-xl-5 {
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
            
            .col-xl-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            
            .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        
        /* ========================================
           RESPONSIVE COMPONENTS
           ======================================== */
        
        /* ========================================
           PROMO SLIDER MOBILE OPTIMIZATION
           ======================================== */
        
        /* Mobile promo slider fixes */
        @media (max-width: 950px) {
            .promo-slider__item {
                padding: 20px 15px !important;
                text-align: center !important;
            }
            
            .align-container {
                display: block !important;
                height: auto !important;
                min-height: auto !important;
            }
            
            .align-container__item {
                display: block !important;
                position: static !important;
                transform: none !important;
                top: auto !important;
                left: auto !important;
                width: 100% !important;
                padding: 0 !important;
            }
            
            /* Promo slider title mobile styling */
            .promo-slider__title {
                font-size: 24px !important;
                line-height: 1.3 !important;
                margin-bottom: 15px !important;
                text-align: center !important;
                font-weight: 700 !important;
            }
            
            .promo-slider__title span {
                display: block !important;
                margin-bottom: 5px !important;
            }
            
            /* Promo slider subtitle mobile styling */
            .promo-slider__subtitle {
                font-size: 16px !important;
                line-height: 1.5 !important;
                margin-bottom: 20px !important;
                text-align: center !important;
                color: #666 !important;
                max-width: 100% !important;
            }
            
            /* Promo slider button mobile styling */
            .promo-slider__button {
                width: 100% !important;
                max-width: 280px !important;
                margin: 0 auto !important;
                padding: 15px 25px !important;
                font-size: 16px !important;
                font-weight: 600 !important;
                border-radius: 8px !important;
                display: block !important;
                text-align: center !important;
            }
            
            /* Promo slider wrapper spacing */
            .promo-slider__wrapper-1,
            .promo-slider__wrapper-2,
            .promo-slider__wrapper-3 {
                margin-bottom: 15px !important;
                width: 100% !important;
            }
            
            .promo-slider__wrapper-3 {
                margin-bottom: 0 !important;
            }
        }
        
        /* Extra small devices promo slider */
        @media (max-width: 575.98px) {
            .promo-slider__title {
                font-size: 20px !important;
                line-height: 1.2 !important;
            }
            
            .promo-slider__subtitle {
                font-size: 14px !important;
                line-height: 1.4 !important;
            }
            
            .promo-slider__button {
                padding: 12px 20px !important;
                font-size: 14px !important;
            }
        }
        
        /* Small devices promo slider */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .promo-slider__title {
                font-size: 22px !important;
            }
            
            .promo-slider__subtitle {
                font-size: 15px !important;
            }
            
            .promo-slider__button {
                padding: 14px 22px !important;
                font-size: 15px !important;
            }
        }
        
        /* Medium devices promo slider */
        @media (min-width: 768px) and (max-width: 950px) {
            .promo-slider__title {
                font-size: 26px !important;
            }
            
            .promo-slider__subtitle {
                font-size: 17px !important;
            }
            
            .promo-slider__button {
                padding: 16px 28px !important;
                font-size: 16px !important;
            }
        }
        
        /* Responsive carousel */
        @media (max-width: 575.98px) {
            .carousel-item {
                padding: 5px;
            }
            
            .carousel-item img {
                max-height: 60px;
            }
        }
        
        @media (min-width: 576px) and (max-width: 767.98px) {
            .carousel-item {
                padding: 8px;
            }
            
            .carousel-item img {
                max-height: 70px;
            }
        }
        
        @media (min-width: 768px) and (max-width: 991.98px) {
            .carousel-item {
                padding: 10px;
            }
            
            .carousel-item img {
                max-height: 80px;
            }
        }
        
        @media (min-width: 992px) {
            .carousel-item {
                padding: 15px;
            }
            
            .carousel-item img {
                max-height: 100px;
            }
        }
        
        /* Additional mobile fixes for 950px breakpoint */
        @media (max-width: 950px) and (min-width: 768px) {
            /* Tablet-specific fixes */
            .promo-slider__item .col-xl-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .about-us--blue .col-lg-6,
            .about-us--blue .col-xl-5,
            .about-us--blue .col-xl-6 {
                flex: 0 0 100%;
                max-width: 100%;
            }
            
            .action-block {
                min-height: 200px;
            }
        }

    </style>
    <script>
        WebFontConfig = {

            google: {

                families: ['Quicksand:300,400,500,700', 'Permanent+Marker:400'],

            }

        }

        function font() {

            var wf = document.createElement('script')

            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
            wf.type = 'text/javascript'
            wf.async = 'true'

            var s = document.getElementsByTagName('script')[0]

            s.parentNode.insertBefore(wf, s)

        }
        font()
    </script>
</head>

