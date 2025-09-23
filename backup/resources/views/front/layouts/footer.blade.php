<footer class="footer footer--front_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <a class="footer-logo__link" href="{{ route('welcome') }}">
                        <img class="footer-logo__img" src="{{ asset('/manage/img/logos/'.$setting->logo) }}" alt="logo"/>
                    </a>
                </div>
                <div class="footer-contacts">
                    <p class="footer-contacts__address">{{ $setting->address }}</p>
                    <p class="footer-contacts__phone">Phone: <a href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a></p>
                    <p class="footer-contacts__mail">Email: <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                </div>
                <!-- footer socials start-->
                <ul class="footer-socials">
                    <li class="footer-socials__item"><a class="footer-socials__link" href="{{ $setting->fb_link }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="footer-socials__item"><a class="footer-socials__link" href="{{ $setting->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="footer-socials__item"><a class="footer-socials__link" href="{{ $setting->google_link }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="footer-socials__item"><a class="footer-socials__link" href="{{ $setting->insta_link }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <!-- footer socials end-->
            </div>
            <div class="col-lg-8">
                <!-- footer nav start-->
                <nav>
                    <ul class="footer-menu">
                        @foreach($front_groups as $group)
                            <li class="footer-menu__item"><a class="footer-menu__link" href="{{ route('group', $group->title) }}">{{ $group->title }}</a></li>
                        @endforeach

                    </ul>
                </nav>
                <!-- footer nav end-->
            </div>
        </div>
    </div>
    <div class="footer__lower">
        <div class="container">
            <div class="row align-items-baseline flex-column-reverse flex-md-row">
                <div class="col-md-6 col-xl-7">
                    <p class="footer-copyright color--white">© 2021 by THRAWAAT INT'L INVESTMENT CORP</p>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="footer__form">
                        <a href="{{ route('joinUs') }}" class="footer__form-submit button button--primary" >Join us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>