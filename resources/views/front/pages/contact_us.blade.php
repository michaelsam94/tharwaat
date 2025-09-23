@extends('front.pages.index')
@section('title')
    Contacts|Thrawaat
@endsection
@section('content')
    <section class="promo-primary">
        <picture>
            @php
                $contactHeader = \App\Models\WebsiteContent::active()->where('key', 'pages.contact.header')->first();
            @endphp
            @if($contactHeader)
                <source srcset="{{ $contactHeader->image_url }}" media="(min-width: 992px)" />
                <img class="img--bg" src="{{ $contactHeader->image_url }}" alt="{{ $contactHeader->content }}" />
            @endif
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item">
                            <h1 class="promo-primary__title color--white"><span>{{ \App\Services\WebsiteContentService::getContent('pages.contact.title') }}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start-->
    <section class="section contacts">
        <div class="container">
            @include('front.layouts.message')
            <div class="row offset-margin">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#location-pin"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p>{{ \App\Services\WebsiteContentService::getContent('contact.address1') }}</p>
                            <p>{{ \App\Services\WebsiteContentService::getContent('contact.address2') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#phone-call"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p> <a class="icon-item__link" href="tel:+20223589181">{{ \App\Services\WebsiteContentService::getContent('contact.phone1') }}</a>
                                <a class="icon-item__link" href="tel:+212614892033">{{ \App\Services\WebsiteContentService::getContent('contact.phone2') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#envelope"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <p><a class="icon-item__link"
                                    href="mailto:{{ \App\Services\WebsiteContentService::getContent('contact.email_address') }}">{{ \App\Services\WebsiteContentService::getContent('contact.email') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-item">
                        <div class="icon-item__img">
                            <svg class="icon icon-item__icon">
                                <use xlink:href="#share"></use>
                            </svg>
                        </div>
                        <div class="icon-item__text">
                            <!-- socials start-->
                            <ul class="socials">
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->insta_link }}"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->google_link }}"><i
                                            class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link socials__link--active"
                                        href="{{ $setting->twitter_link }}"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->fb_link }}"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                            <!-- socials end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->

    <!-- contacts start-->
    <section class="section contacts no-padding-top">
        <div class="contacts-wrapper">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-12">
                        <form class="form message-form" action="{{ route('sendMessage') }}" method="post">
                            @csrf
                            <h6 class="form__title">{{ __('joinForm.send') }}</h6>
                            <span class="form__text">{{ __('joinForm.req') }}</span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="fname"
                                        placeholder="{{ __('joinForm.firstName') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="lname"
                                        placeholder="{{ __('joinForm.lastName') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="email" name="email"
                                        placeholder="{{ __('joinForm.email') }}" required="required" />
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="tel" name="phone"
                                        placeholder="{{ __('joinForm.phone') }}" />
                                </div>
                                <div class="col-12">
                                    <textarea class="form__message form__field" name="message" placeholder="{{ __('joinForm.message') }}"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form__submit" type="submit">{{ __('joinForm.cta') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contacts end-->
@endsection
