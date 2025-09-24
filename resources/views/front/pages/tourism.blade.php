@extends('front.pages.index')
@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container" style="height:170px">
                        <h2 class="heading__title"><span>{{ __('groups.tourismHeader') }}</h2>
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
                                                <img class="img--bg"
                                                    src="{{ asset('/storage/website_images/pages_tourism_logo.jpg') }}"
                                                    alt="img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6 offset-xl-1">
                                        <div class="heading heading--primary"><span
                                                class="heading__pre-title color--mono"></span>
                                            <h2 class="heading__title color--white">
                                                <span>{{ __('groups.tourismTitle') }}
                                                </span>
                                            </h2>
                                        </div>
                                        <p class="color--white">
                                            {{ __('groups.tourismP1') }}
                                        </p>
                                        <a target="_blank" class="button stories-item__button button--blue"
                                            href="http://monami-travel.com/">{{ __('groups.tourismCTA') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </section>
@endsection
