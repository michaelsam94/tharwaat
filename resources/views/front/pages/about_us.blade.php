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

                            <span class="promo-primary__pre-title no-margin-bottom">{{ \App\Services\WebsiteContentService::getContent('fullAbout.header2') }}</span>
                            <h1 class="heading__title no-margin-bottom">{{ \App\Services\WebsiteContentService::getContent('fullAbout.title') }}</span></h1>
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
                        <div class="img-box__img">
                            @php
                                $aboutHeader = \App\Models\WebsiteContent::active()->where('key', 'pages.about.header')->first();
                            @endphp
                            @if($aboutHeader)
                                <img class="img--bg" src="{{ $aboutHeader->image_url }}" alt="{{ $aboutHeader->content }}" />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary"><span
                            class="heading__pre-title color--mono">{{ \App\Services\WebsiteContentService::getContent('fullAbout.header2') }}</span>
                        <h2 class="heading__title color--white">
                            <span>{{ \App\Services\WebsiteContentService::getContent('fullAbout.title2') }}</span>
                        </h2>
                    </div>
                    <p><strong class="color--white">{{ \App\Services\WebsiteContentService::getContent('fullAbout.title3') }}</strong></p>

                    <p>{{ \App\Services\WebsiteContentService::getContent('fullAbout.p1') }}</p>

                    <p>{{ \App\Services\WebsiteContentService::getContent('fullAbout.p2') }}</p>
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
                        <h1 class="heading__title no-margin-bottom"><span>{{ __('fullAbout.missionTitle') }}</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 offset-lg-1 col-xl-11 offset-xl-1">
                    <h3 class="heading__title">
                        <span>{{ __('fullAbout.missionHeader') }}</span>
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12  col-xl-12">
                    <p class="color--blue">
                        {{ __('fullAbout.missionBody') }} </p>
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
                        <h1 class="heading__title no-margin-bottom"><span> {{ __('fullAbout.visionTitle') }}</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 offset-lg-4 col-xl-7 offset-xl-4">
                    <h3 class="heading__title"><span>{{ __('fullAbout.visionBody') }}</span></h3>
                </div>
            </div>
        </div>
    </section>
    @include('front.content.join_us')
@endsection
