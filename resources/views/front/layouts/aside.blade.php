<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
            <svg class="icon">
                <use xlink:href="#close"></use>
            </svg></span>
        <div class="aside-dropdown__item d-lg-none d-block">
            <ul class="aside-menu">
                <li class="aside-menu__item aside-menu__item aside-menu__item--active"><a class="aside-menu__link"
                        href="{{ route('welcome') }}"><span>{{ __('header.home') }}</span></a>
                </li>
                <li class="aside-menu__item aside-menu__item"><a class="aside-menu__link"
                        href="{{ route('aboutUs') }}"><span>{{ __('header.about') }}</span></a>
                </li>
                <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link"
                        href="javascript:void(0);"><span>{{ __('header.group') }}</span></a>
                    <!-- sub menu start-->
                    <ul class="aside-menu__sub-list">
                        @foreach ($front_groups as $group)
                            <li><a href="{{ route('group', $group->title) }}"><span>{{ $group->title }}</span></a></li>
                        @endforeach
                    </ul>
                    <!-- sub menu end-->
                </li>
                <li class="aside-menu__item aside-menu__item"><a class="aside-menu__link"
                        href="{{ route('joinUs') }}"><span>{{ __('header.join') }}</span></a>
                </li>
                <li class="aside-menu__item"><a class="aside-menu__link"
                        href="{{ route('contactUs') }}"><span>{{ __('header.contact') }}</span></a></li>
            </ul>
        </div>
        <div class="aside-dropdown__item">
            <!-- aside menu start-->
            <ul class="aside-menu">
                @foreach (__('footer.test') as $group)
                    <li class="aside-menu__item"><a class="aside-menu__link"
                            href="{{ route($group['route']) }}">{{ $group['name'] }}</a></li>
                @endforeach
            </ul>
            <!-- aside menu end-->

            <!--Langs -->

            <div style="display: flex; flex-direction: column; gap: 5px">
                <a style="" href="locale/en" id="locale-en">
                    @php
                        $ukFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.uk')->first();
                    @endphp
                    @if($ukFlag)
                        <img style="width: 25px" src="{{ $ukFlag->image_url }}" alt="{{ $ukFlag->content }}" />
                    @endif
                </a>
               {{--  <a style="" href="locale/fr" id="locale-fr">
                    @php
                        $franceFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.france')->first();
                    @endphp
                    @if($franceFlag)
                        <img style="width: 25px" src="{{ $franceFlag->image_url }}"
                        alt="img" />
                </a> --}}
                <a style="" href="locale/ar" id="locale-ar">
                    @php
                        $egyptFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.egypt')->first();
                    @endphp
                    @if($egyptFlag)
                        <img style="width: 25px" src="{{ $egyptFlag->image_url }}" alt="{{ $egyptFlag->content }}" />
                    @endif
                </a>

                <a style="" href="locale/bg" id="locale-bg">
                    @php
                        $bgFlag = \App\Models\WebsiteContent::active()->where('key', 'lang.bg')->first();
                    @endphp
                    @if($bgFlag)
                        <img style="width: 25px" src="{{ $bgFlag->image_url }}" alt="{{ $bgFlag->content }}" />
                    @endif
                </a>
            </div>
            <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link"
                    href="mailto:{{ $setting->email }}">{{ __('footer.emailHeader') }}</a>
            </div>
            <div class="aside-inner"><span class="aside-inner__title">Phone number</span><a class="aside-inner__link"
                    href="tel:{{ $setting->phone_1 }}">{{ __('footer.phone2Header') }}</a>
            </div>
            <ul class="aside-socials">
                <li class="aside-socials__item"><a class="aside-socials__link" href="{{ $setting->insta_link }}"><i
                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="{{ $setting->google_link }}"><i
                            class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active"
                        href="{{ $setting->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="{{ $setting->fb_link }}"><i
                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
