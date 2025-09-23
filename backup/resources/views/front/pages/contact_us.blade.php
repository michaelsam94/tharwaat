@extends('front.pages.index')
@section('title')
    Contacts|Thrawaat
@endsection
@section('content')
    <section class="promo-primary">
        <picture>
            <source srcset="{{ asset('design/front/img/images/slider1.jpg')}}" media="(min-width: 992px)"/>
            <img class="img--bg" src="{{ asset('design/front/img/images/slider1.jpg')}}" alt="img"/>
        </picture>
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container">
                        <div class="align-container__item">
                            <h1 class="promo-primary__title color--white"><span>Contact Us</span></h1>
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
                            <p>Adress: {{ $setting->address }}</p>
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
                            <p>Phone: <a class="icon-item__link" href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a>
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
                            <p>Email: <a class="icon-item__link" href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
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
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->insta_link }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->google_link }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link socials__link--active" href="{{ $setting->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="socials__item"><a class="socials__link" href="{{ $setting->fb_link }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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
                            <h6 class="form__title">Send Message</h6>
                            <span class="form__text">* The following info is required</span>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="fname" placeholder="First Name *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="text" name="lname" placeholder="Last Name *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="email" name="email" placeholder="Email *" required="required"/>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form__field" type="tel" name="phone" placeholder="Phone"/>
                                </div>
                                <div class="col-12">
                                    <textarea class="form__message form__field" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="form__submit" type="submit">Send Message</button>
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