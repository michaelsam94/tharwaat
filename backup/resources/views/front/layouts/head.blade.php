<head>
    <meta charset="UTF-8"/>
    <meta name="description" content="description"/>
    <meta name="keywords" content="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="shortcut icon" href="{{ asset('storage/logos/'.$setting->logo)}}"/>
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
