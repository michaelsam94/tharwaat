@php
    use App\Services\WebsiteContentService;
    $aboutContent = WebsiteContentService::getSectionContent('home', 'about');
    $aboutImage = $aboutContent->where('type', 'image')->first();
    $aboutTexts = $aboutContent->where('type', 'text');
@endphp

<section class="section about-us--blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="img-box">
                    <div class="img-box__img">
                        @if($aboutImage && $aboutImage->image)
                            <img class="img--bg" src="{{ $aboutImage->image_url }}" alt="{{ $aboutImage->content }}" />
                        @else
                            @php
                                $aboutFallback = \App\Models\WebsiteContent::active()->where('key', 'home.about.fallback')->first();
                            @endphp
                            @if($aboutFallback)
                                <img class="img--bg" src="{{ $aboutFallback->image_url }}" alt="{{ $aboutFallback->content }}" />
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-1">
                <div class="heading heading--primary">
                    <span class="heading__pre-title color--mono">
                        {{ WebsiteContentService::getContentWithFallback('home.about.header', __('about.header')) }}
                    </span>
                    <h2 style="letter-spacing: 0px" class="heading__title color--white">
                        <span>{{ WebsiteContentService::getContentWithFallback('home.about.title', __('about.title')) }}</span>
                    </h2>
                </div>
                
                @if($aboutTexts->count() > 0)
                    @foreach($aboutTexts as $text)
                        <p class="{{ $loop->first ? 'color--white' : '' }}">
                            @if($loop->first)
                                <strong>{{ $text->content }}</strong>
                            @else
                                {{ $text->content }}
                            @endif
                        </p>
                    @endforeach
                @else
                    {{-- Fallback to original content --}}
                    <p><strong class="color--white">{{ __('about.p1') }}</strong></p>
                    <p>{{ __('about.p2') }}</p>
                    <p>{{ __('about.p3') }}</p>
                @endif

                <a class="button button--primary margin-top" href="{{ route('aboutUs') }}">
                    {{ WebsiteContentService::getContentWithFallback('home.about.button', __('about.button')) }}
                </a>
            </div>
        </div>
    </div>
</section>
