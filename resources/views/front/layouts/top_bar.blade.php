{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const frElement = document.getElementById("locale-fr");
        frElement.addEventListener("click", function() {
            window.location.href = '/fr';
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const frElement = document.getElementById("locale-en");
        frElement.addEventListener("click", function() {
            window.location.href = '/';
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const frElement = document.getElementById("locale-ar");
        frElement.addEventListener("click", function() {
            window.location.href = '/ar';
        });
    });
</script>
 --}}


<div class="top-bar d-none d-lg-block">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <!--<a class="top-bar__link" href="tel:+180012345678">{{ $setting->phone_1 }}</a>
                <a class="top-bar__link" href="mailto:support@helpo.org">{{ $setting->email }}</a> -->
            </div>
            <div class="col-lg-4 text-right">
                <ul class="socials">
                    <li class="socials__item"><a class="socials__link" href="{{ \Illuminate\Support\Str::startsWith($setting->fb_link, ['http://','https://']) ? $setting->fb_link : 'https://' . ltrim($setting->fb_link, '/') }}"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="{{ \Illuminate\Support\Str::startsWith($setting->twitter_link, ['http://','https://']) ? $setting->twitter_link : 'https://' . ltrim($setting->twitter_link, '/') }}"><i
                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="{{ \Illuminate\Support\Str::startsWith($setting->google_link, ['http://','https://']) ? $setting->google_link : 'https://' . ltrim($setting->google_link, '/') }}"><i
                                class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li class="socials__item"><a class="socials__link" href="{{ \Illuminate\Support\Str::startsWith($setting->insta_link, ['http://','https://']) ? $setting->insta_link : 'https://' . ltrim($setting->insta_link, '/') }}"><i
                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-2 text-right">
                <ul class="socials">

                    <a style="margin: 10px" href="locale/en" id="locale-en">
                        @php
                            $ukFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.uk')->first();
                        @endphp
                        @if($ukFlag)
                            <img style="width: 25px" src="{{ $ukFlag->image_url }}" alt="{{ $ukFlag->content }}" />
                        @endif
                    </a>
                    <br>
                   {{--  <a style="margin: 10px" href="locale/fr" id="locale-fr">
                        @php
                            $franceFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.france')->first();
                        @endphp
                        @if($franceFlag)
                            <img style="width: 25px" src="{{ $franceFlag->image_url }}"
                            alt="img" />
                    </a> --}}
                    <br>
                    <a style="margin: 10px" href="locale/ar" id="locale-ar">
                        @php
                            $egyptFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.egypt')->first();
                        @endphp
                        @if($egyptFlag)
                            <img style="width: 25px" src="{{ $egyptFlag->image_url }}" alt="{{ $egyptFlag->content }}" />
                        @endif
                    </a>

                    <a style="margin: 10px" href="locale/bg" id="locale-bg">
                        @php
                            $bgFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.bg')->first();
                        @endphp
                        @if($bgFlag)
                            <img style="width: 25px" src="{{ $bgFlag->image_url }}" alt="{{ $bgFlag->content }}" />
                        @endif
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
