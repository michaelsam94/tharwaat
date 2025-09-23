@extends('front.pages.index')
@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container" style="height:170px">
                        <h2 class="heading__title"><span>{{ \App\Services\WebsiteContentService::getContent('pages.atasoy.header') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section stories">
        <div class="container">
            <div class="row offset-70">
                <section class="section about-us background--blue mb-5" style="padding: 30px 0;">
                    <div class="container">
                        <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                            <div class="stories-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-xl-5">
                                        <div class="img-box">
                                            <div class="img-box__img">
                                                @php
                                                    $atasoyImage1 = \App\Models\WebsiteContent::active()->where('key', 'pages.atasoy.image1')->first();
                                                @endphp
                                                @if($atasoyImage1)
                                                    <img class="img--bg" src="{{ $atasoyImage1->image_url }}" alt="{{ $atasoyImage1->content }}" />
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                                        <div class="heading heading--primary"><span
                                                class="heading__pre-title color--mono"></span>
                                            <h2 class="heading__title color--white">
                                                <span>{{ \App\Services\WebsiteContentService::getContent('pages.atasoy.title1') }}</span>
                                            </h2>
                                        </div>
                                        <p class="color--white">
                                            {{ \App\Services\WebsiteContentService::getContent('pages.atasoy.p1') }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                    <div class="stories-item">
                        <div class="row align-items-center flex-column-reverse flex-lg-row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="heading heading--primary"><span class="heading__pre-title"></span>
                                    <h2 class="heading__title"><span>
                                            {{ __('groups.atasoyTitle2') }}
                                        </span> </h2>
                                </div>
                                <p><strong>
                                        {{ __('groups.atasoyP2') }}
                                    </strong></p>
                                {{--  @if (!is_null($content->website))
                                    <a target="_blank" class="button stories-item__button button--blue"
                                        href="{{ $content->website }}">Webiste</a>
                                @endif --}}
                            </div>
                            <div class="col-lg-6 col-xl-5 offset-xl-1">
                                <div class="img-box">
                                    <div class="img-box__img">
                                        @php
                                            $atasoyImage2 = \App\Models\WebsiteContent::active()->where('key', 'pages.atasoy.image2')->first();
                                        @endphp
                                        @if($atasoyImage2)
                                            <img class="img--bg" src="{{ $atasoyImage2->image_url }}" alt="{{ $atasoyImage2->content }}" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                    <div class="stories-item">
                        <div class="row align-items-center flex-column-reverse flex-lg-row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="heading heading--primary"><span class="heading__pre-title"></span>
                                    <h2 class="heading__title"><span>{{ __('groups.atasoyTitle4') }}
                                        </span> </h2>
                                </div>
                                <p><strong>
                                        {{ __('groups.atasoyP4') }}
                                    </strong></p>
                                {{--  @if (!is_null($content->website))
                                    <a target="_blank" class="button stories-item__button button--blue"
                                        href="{{ $content->website }}">Webiste</a>
                                @endif --}}
                            </div>
                            <div class="col-lg-6 col-xl-5 offset-xl-1">
                                <div class="img-box">
                                    <div class="img-box__img">
                                        @php
                                            $atasoyImage3 = \App\Models\WebsiteContent::active()->where('key', 'pages.atasoy.image3')->first();
                                        @endphp
                                        @if($atasoyImage3)
                                            <img class="img--bg" src="{{ $atasoyImage3->image_url }}" alt="{{ $atasoyImage3->content }}" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                    <div class="stories-item">
                        <div class="row align-items-center flex-column-reverse flex-lg-row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="heading heading--primary"><span class="heading__pre-title"></span>
                                    <h2 class="heading__title"><span>{{ __('groups.atasoyTitle3') }}
                                        </span> </h2>
                                </div>
                                <p><strong>
                                        {{ __('groups.atasoyP3') }} </strong></p>
                                {{--  @if (!is_null($content->website))
                                    <a target="_blank" class="button stories-item__button button--blue"
                                        href="{{ $content->website }}">Webiste</a>
                                @endif --}}
                            </div>
                            <div class="col-lg-6 col-xl-5 offset-xl-1">
                                <div class="img-box">
                                    <div class="img-box__img">
                                        @php
                                            $atasoyImage4 = \App\Models\WebsiteContent::active()->where('key', 'pages.atasoy.image4')->first();
                                        @endphp
                                        @if($atasoyImage4)
                                            <img class="img--bg" src="{{ $atasoyImage4->image_url }}" alt="{{ $atasoyImage4->content }}" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
