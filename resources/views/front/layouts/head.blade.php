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

        @media (min-width: 768px) and (max-width: 991px) {
            /* Show 4th slide on md if col-md-4*/
            .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -33.3333%;  /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
        }
        @media (min-width: 576px) and (max-width: 768px) {
            /* Show 3rd slide on sm if col-sm-6*/
            .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -50%;  /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
        }
        @media (min-width: 576px) {
            .carousel-item {
                margin-right: 0;
            }
            /* show 2 items */
            .carousel-inner .active + .carousel-item {
                display: block;
            }
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
                transition: none;
            }
            .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }
            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            /* farthest right hidden item must be also positioned for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }
            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }
        /* MD */
        @media (min-width: 768px) {
            /* show 3rd of 3 item slide */
            .carousel-inner .active + .carousel-item + .carousel-item {
                display: block;
            }
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
                transition: none;
            }
            .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }
            /* left or forward direction */
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            /* right or prev direction */
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }
        /* LG */
        @media (min-width: 991px) {
            /* show 4th item */
            .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
                display: block;
            }
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
                transition: none;
            }
            /* Show 5th slide on lg if col-lg-3 */
            .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -25%;  /*change this with javascript in the future*/
                z-index: -1;
                display: block;
                visibility: visible;
            }
            /* left or forward direction */
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }
            /* right or prev direction //t - previous slide direction last item animation fix */
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

        /* Mobile Navigation Fixes */
        @media (max-width: 991.98px) {
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
            }
            
            .main {
                background-color: #fff !important;
            }
            
            /* Ensure sections have proper backgrounds */
            .section:not(.about-us--blue) {
                background-color: #fff !important;
            }
            
            /* Debug: Add temporary background colors to identify sections */
            .section {
                border: 1px solid #ddd;
                margin: 10px 0;
            }
            
            /* Ensure content is visible */
            .section .container {
                background: transparent;
            }
            
            .section .row {
                background: transparent;
            }
            
            /* Fix any hidden content */
            .section * {
                visibility: visible !important;
                opacity: 1 !important;
            }
            
            .page-wrapper {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
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
