@extends('front.pages.index')
@section('title')
    About|Thrawaat
@endsection
@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div>
                        	<span class="promo-primary__pre-title no-margin-bottom">About</span>
                        	<h1 class="heading__title no-margin-bottom"><span>ThrawaaT</span><span> Int’l Investment Corp S.A.E</span></h1>
	                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us start-->
    <section class="section about-us background--blue mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="img-box">
                        <div class="img-box__img"><img class="img--bg" src="{{ asset('design/front/img/images/about.jpeg') }}" alt="img"/></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary"><span class="heading__pre-title color--mono">About Us</span>
                        <h2 class="heading__title color--white"><span>ThrawaaT Int’l Investment Corp S.A.E</span> <span>(a Holding company under incorporat)</span></h2>
                    </div>
                    <p><strong class="color--white">"Egyptian Joint Stock Company under the provisions of companies‘ law no. 59 of 1981" since 1980</strong></p>

                    <p>"Thrawaat Int’l Investment corp. Have shares in subsidiary companies established in Late 1970’s in Gulf area in the construction and consultation field, Expanded then into Egyptian markets of Real Estate Development and petroleum services."</p>

                    <p class="no-margin-bottom">• Total Turnover in excess of 500 million $ at the end 2020.</p>
                    <p class="no-margin-bottom">• Professional and versatile technical and engineering capability.</p>
                    <p class="no-margin-bottom">• Diversified range of Products & Services. </p>
                    <p>• Focus on Quality Brand Names, Solid Innovation & Customer Satisfaction.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us end-->
    <!-- text section start-->
    <section class="section text-section text-section--style-2 no-padding-top">
        <div class="container">
            <div class="row">
                <div class="align-container">
                    <div>
                        <h1 class="heading__title no-margin-bottom"><span>Our</span><span> Mission</span></h1>
	            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 offset-lg-4 col-xl-7 offset-xl-4">
                    <h3 class="heading__title">
                    	<span>Delivering optimized solutions rather than Products & services for our valued customers</span>
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12  col-xl-12">
                    <p class="color--blue">
                        Investing in the Precious Resources, Thrawaat Int’l Investment corp. is a global, family-owned corp. (Holding company under establishment) with a presence in a lot of countries around the globe. Thrawaat Int’l Investment corp. Have shares in subsidiary companies established in Late 1970’s in Gulf area in the construction and consultation field, Expanded then into Egyptian markets of Real Estate Development and petroleum services. In the early 2000’s Thrawaat Int’l Investment corp., established the Trading, distribution & Agencies, with Automotive agencies, then Tourism, Advertising passing by Mining and Renewable energy Investments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- info banner end-->
     <section class="section text-section text-section--style-2 no-padding-top">
        <div class="container">
            <div class="row">
                <div class="align-container">
                    <div>
                        <h1 class="heading__title no-margin-bottom"><span>Our</span><span> Vision</span></h1>
	            </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 offset-lg-4 col-xl-7 offset-xl-4">
                    <h3 class="heading__title"><span>To be the Largest Group in MENA Region, who are serving diversified Market Segments.</span></h3>
                </div>
            </div>
        </div>
    </section>
    @include('front.content.join_us')
@endsection