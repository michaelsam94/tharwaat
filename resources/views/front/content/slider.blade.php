@php
    use App\Services\WebsiteContentService;
    $sliders = WebsiteContentService::getSliders();
@endphp

<section class="promo promo--front_3">
    <div class="promo-slider">
        @forelse($sliders as $slider)
            <div class="promo-slider__item promo-slider__item--style-3">
                <picture>
                    <source srcset="{{ $slider->image_url }}" media="(min-width: 992px)" />
                    <img class="img--bg" src="{{ $slider->mobile_image_url ?: $slider->image_url }}" alt="{{ $slider->title }}" />
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 text-left">
                            <div class="align-container">
                                <div class="align-container__item">
                                    @if($slider->title)
                                        <div class="promo-slider__wrapper-1">
                                            <h2 class="promo-slider__title">
                                                {!! $slider->title !!}
                                            </h2>
                                        </div>
                                    @endif
                                    @if($slider->subtitle)
                                        <div class="promo-slider__wrapper-2">
                                            <p class="promo-slider__subtitle">{{ $slider->subtitle }}</p>
                                        </div>
                                    @endif
                                    @if($slider->button_text && $slider->button_link)
                                        <div class="promo-slider__wrapper-3">
                                            <a class="button promo-slider__button button--primary" href="{{ $slider->button_link }}">
                                                {{ $slider->button_text }}
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            {{-- Fallback to original static content --}}
            <div class="promo-slider__item promo-slider__item--style-3">
                <picture>
                    @php
                        $sliderBg = \App\Models\WebsiteContent::active()->where('key', 'home.slider.bg')->first();
                    @endphp
                    @if($sliderBg)
                        <source srcset="{{ $sliderBg->image_url }}" media="(min-width: 992px)" />
                        <img class="img--bg" src="{{ $sliderBg->image_url }}" alt="{{ $sliderBg->content }}" />
                    @endif
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 text-left">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="promo-slider__title">
                                            <span>{{ \App\Services\WebsiteContentService::getContent('home.silderSpan1') }}</span><br /><span>{{ \App\Services\WebsiteContentService::getContent('home.silderSpan2') }}</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="promo-slider__subtitle">{{ \App\Services\WebsiteContentService::getContent('home.silderContent') }}</p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button promo-slider__button button--primary" href="{{ route('aboutUs') }}">
                                            {{ \App\Services\WebsiteContentService::getContent('home.CTA') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <!-- promo pannel start-->
    {{--    <div class="promo-pannel">
        <div class="promo-actual">
            <div class="promo-actual__inner">
                <h6 class="promo-actual__title"><a href="#">The Culture of Africa. Rebirth</a></h6>
                <p class="promo-actual__location"><strong>Dark Spurt,</strong> San Francisco, CA 94528, USA</p>
                <p class="promo-actual__date"><strong>April 15 - April 20, 2019,</strong> 2019</p>
                <p class="promo-actual__time"><strong>10:00 AM - 15:00 PM,</strong> Everyday</p>
            </div>
        </div>
    </div> --}}
    <!-- promo pannel end-->
    <!-- slider nav start-->
    {{--     <div class="slider__nav slider__nav--promo">
        <div class="promo-slider__count"></div>
        <div class="slider__arrows">
            <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
        </div>
    </div> --}}
    <!-- slider nav end-->
</section>
