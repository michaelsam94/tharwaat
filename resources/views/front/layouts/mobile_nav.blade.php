<div class="mobile-nav">
    <div class="mobile-nav__inner">
        <button class="mobile-nav__close">&times;</button>
        <div class="mobile-nav__item">
            <nav class="menu-holder">
                <ul class="mobile-menu">
                    <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ route('welcome') }}">{{ __('header.home') }}</a></li>
                    <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ route('aboutUs') }}">{{ __('header.about') }}</a></li>
                    <li class="mobile-menu__item mobile-menu__item--has-child">
                        <a class="mobile-menu__link" href="javascript:void(0);">{{ __('header.group') }}</a>
                        <ul class="mobile-menu__sub-list">
                            @foreach ($front_groups as $group)
                                <li><a href="{{ route('group', $group->title) }}">{{ $group->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ route('joinUs') }}">{{ __('header.join') }}</a></li>
                    <li class="mobile-menu__item"><a class="mobile-menu__link" href="{{ route('contactUs') }}">{{ __('header.contact') }}</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
