<header class="header header--front_3">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">

                <div class="header-logo">
                    <a class="header-logo__link" href="{{ route('welcome') }}">
                        @php
                            $headerLogo = \App\Models\WebsiteContent::active()->where('key', 'header.logo')->first();
                        @endphp
                        @if($headerLogo)
                            <img class="header-logo__img" src="{{ $headerLogo->image_url }}" alt="{{ $headerLogo->content }}" />
                        @endif
                    </a>
                </div>
            </div>
            <div class="col-auto">
                <!-- main menu start-->
                <nav>
                    <ul class="main-menu">
                        <li class="main-menu__item main-menu__item--active">
                            <a class="main-menu__link" href="{{ route('welcome') }}">
                                <span>{{ \App\Services\WebsiteContentService::getContent('header.home') }}</span>
                            </a>
                        </li>
                        <li class="main-menu__item">
                            <a class="main-menu__link" href="{{ route('aboutUs') }}">
                                <span>{{ \App\Services\WebsiteContentService::getContent('header.about') }}</span>
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--has-child">
                            <a class="main-menu__link" href="javascript:void(0);">
                                <span>{{ \App\Services\WebsiteContentService::getContent('header.group') }} </span>
                            </a>
                            <!-- sub menu start-->
                            <ul class="main-menu__sub-list sub-list--style-1">
                                @foreach (__('footer.test') as $group)
                                    <li><a href="{{ route($group['route']) }}">{{ $group['name'] }}</a></li>
                        </li>
                        @endforeach
                    </ul>
                    <!-- sub menu end-->
                    </li>
                    <li class="main-menu__item"><a class="main-menu__link"
                            href="{{ route('contactUs') }}"><span>{{ \App\Services\WebsiteContentService::getContent('header.investor') }}</span></a></li>

                    <li class="main-menu__item"><a class="main-menu__link" href="{{ route('joinUs') }}"><span>
                                {{ \App\Services\WebsiteContentService::getContent('header.join') }}</span></a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="{{ route('contactUs') }}"><span>
                                {{ \App\Services\WebsiteContentService::getContent('header.contact') }}</span></a></li>
                    </ul>
                </nav>
                <!-- main menu end-->
            </div>
            <div class="col-auto d-flex align-items-center">
                <!-- lang select start-->
                <!--<ul class="lang-select">
                    <li class="lang-select__item lang-select__item--active"><span>En</span>
                        <ul class="lang-select__sub-list">
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
                </ul>-->
                <!-- lang select end-->
                <div class="dropdown-trigger d-block d-sm-none">
                    <div class="dropdown-trigger__item"></div>
                </div>
            </div>
        </div>
    </div>
</header>
