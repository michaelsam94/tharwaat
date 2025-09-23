<header class="header header--front_3">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-between">
            <div class="col-auto d-flex align-items-center">
 
                <div class="header-logo">
                    <a class="header-logo__link" href="{{ route('welcome') }}">
                        <img class="header-logo__img" src="{{ asset('/manage/img/logos/'.$setting->logo) }}" alt="logo"/>
                    </a>
                </div>
            </div>
            <div class="col-auto">
                <!-- main menu start-->
                <nav>
                    <ul class="main-menu">
                        <li class="main-menu__item main-menu__item--active">
                            <a class="main-menu__link" href="{{ route('welcome') }}">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="main-menu__item">
                            <a class="main-menu__link" href="{{ route('aboutUs') }}">
                                <span>About</span>
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--has-child">
                            <a class="main-menu__link" href="javascript:void(0);">
                                <span>The Group</span>
                            </a>
                            <!-- sub menu start-->
                            <ul class="main-menu__sub-list sub-list--style-1">
                                @foreach($front_groups as $group)
                                    <li><a href="{{ route('group', $group->title) }}"><span>{{ $group->title }}</span></a></li>
                                @endforeach
                            </ul>
                            <!-- sub menu end-->
                        </li>
                        <li class="main-menu__item"><a class="main-menu__link" href="{{ route('contactUs') }}"><span>Investor Relations</span></a></li>

                        <li class="main-menu__item"><a class="main-menu__link" href="{{ route('joinUs') }}"><span>Join Us</span></a></li>
                        <li class="main-menu__item"><a class="main-menu__link" href="{{ route('contactUs') }}"><span>Contact us</span></a></li>
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