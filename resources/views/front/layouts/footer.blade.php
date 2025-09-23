<footer class="footer footer--front_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <a class="footer-logo__link" href="{{ route('welcome') }}">
                        @php
                            $footerLogo = \App\Models\WebsiteContent::active()->where('key', 'footer.logo')->first();
                        @endphp
                        @if($footerLogo)
                            <img class="footer-logo__img" src="{{ $footerLogo->image_url }}" alt="{{ $footerLogo->content }}" />
                        @endif
                    </a>
                </div>
                <div class="footer-contacts">
                    <p class="footer-contacts__address">
                        @php
                            $euFlag = \App\Models\WebsiteContent::active()->where('key', 'footer.eu_flag')->first();
                        @endphp
                        @if($euFlag)
                            <img src="{{ $euFlag->image_url }}" alt="{{ $euFlag->content }}" style="width:28px;height:auto;margin-right:8px;vertical-align:middle;">
                        @endif
                        <span>{{ \App\Services\WebsiteContentService::getContent('contact.address1') }}</span>
                    </p>
                    <p class="footer-contacts__phone"><a href="tel:+20223589181">{{ \App\Services\WebsiteContentService::getContent('contact.phone1') }}</a>
                    <p class="footer-contacts__address">{{ \App\Services\WebsiteContentService::getContent('contact.address2') }}</p>
                    <p class="footer-contacts__phone"><a
                            href="tel:+212614892033">{{ \App\Services\WebsiteContentService::getContent('contact.phone2') }}</a>
                    </p>
                    <p class="footer-contacts__mail"><a href="mailto:{{ \App\Services\WebsiteContentService::getContent('contact.email_address') }}">{{ \App\Services\WebsiteContentService::getContent('contact.email') }}</a>
                    </p>
                </div>
                <!-- footer socials start-->
                <ul class="footer-socials">
                    <li class="footer-socials__item"><a class="footer-socials__link" href="{{ $setting->fb_link }}"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="footer-socials__item"><a class="footer-socials__link"
                            href="{{ $setting->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="footer-socials__item"><a class="footer-socials__link"
                            href="{{ $setting->google_link }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li class="footer-socials__item"><a class="footer-socials__link"
                            href="{{ $setting->insta_link }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <!-- footer socials end-->
            </div>
            <div class="col-lg-8">
                <!-- footer nav start-->
                <nav>
                    <ul class="footer-menu">

                        @foreach (__('footer.test') as $group)
                            <li class="footer-menu__item"><a class="footer-menu__link"
                                    href="{{ route($group['route']) }}">{{ $group['name'] }}</a></li>
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
                    <p class="footer-copyright color--white">{{ \App\Services\WebsiteContentService::getContent('footer.copyright') }}</p>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="footer__form">
                        <a href="{{ route('joinUs') }}"
                            class="footer__form-submit button button--primary">{{ \App\Services\WebsiteContentService::getContent('footer.join') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
