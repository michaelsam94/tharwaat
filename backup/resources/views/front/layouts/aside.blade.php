<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
					<svg class="icon">
						<use xlink:href="#close"></use>
					</svg></span>
        <div class="aside-dropdown__item d-lg-none d-block">
            <ul class="aside-menu">
                <li class="aside-menu__item aside-menu__item aside-menu__item--active"><a class="aside-menu__link" href="{{ route('welcome') }}"><span>Home</span></a>
                </li>
                <li class="aside-menu__item aside-menu__item"><a class="aside-menu__link" href="{{ route('aboutUs') }}"><span>About</span></a>
                </li>
                <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="javascript:void(0);"><span>The Group</span></a>
                    <!-- sub menu start-->
                    <ul class="aside-menu__sub-list">
                        @foreach($front_groups as $group)
                            <li><a href="{{ route('group', $group->title) }}"><span>{{ $group->title }}</span></a></li>
                        @endforeach
                    </ul>
                    <!-- sub menu end-->
                </li>
                <li class="aside-menu__item aside-menu__item"><a class="aside-menu__link" href="{{ route('joinUs') }}"><span>Join Us</span></a>
                </li>
                <li class="aside-menu__item"><a class="aside-menu__link" href="{{ route('contactUs') }}"><span>Contacts</span></a></li>
            </ul>
        </div>
        <div class="aside-dropdown__item">
            <!-- aside menu start-->
            <ul class="aside-menu">
                @foreach($front_groups as $group)
                    <li class="aside-menu__item"><a class="aside-menu__link"  href="{{ route('group', $group->title) }}">{{ $group->title }}</a></li>
                @endforeach
            </ul>
            <!-- aside menu end-->
            <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
            <div class="aside-inner"><span class="aside-inner__title">Phone number</span><a class="aside-inner__link" href="tel:{{ $setting->phone_1 }}">{{ $setting->phone_1 }}</a>
            </div>
            <ul class="aside-socials">
                <li class="aside-socials__item"><a class="aside-socials__link" href="{{ $setting->insta_link }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="{{ $setting->google_link }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="{{ $setting->twitter_link }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="aside-socials__item"><a class="aside-socials__link" href="{{ $setting->fb_link }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>
