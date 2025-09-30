@php
    use App\Services\WebsiteContentService;
    $joinContent = WebsiteContentService::getSectionContent('home', 'join');
    $joinImage1 = $joinContent->where('type', 'image')->where('key', 'home.join.image1')->first();
    $joinImage2 = $joinContent->where('type', 'image')->where('key', 'home.join.image2')->first();
@endphp

<section class="section no-padding-top no-padding-bottom">
    <div class="row no-gutters">
        <div class="col-12 col-xl-6">
            <div class="action-block">
                <div class="action-block__inner">
                    @if($joinImage1 && $joinImage1->image)
                        <img class="img--bg" src="{{ $joinImage1->image_url }}" alt="{{ $joinImage1->content }}" />
                    @else
                        @php
                            $joinFallback1 = \App\Models\WebsiteContent::active()->where('key', 'home.join.fallback1')->first();
                        @endphp
                        @if($joinFallback1)
                            <img class="img--bg" src="{{ $joinFallback1->image_url }}" alt="{{ $joinFallback1->content }}" />
                        @endif
                    @endif
                    <h3 class="action-block__title">
                        {{ WebsiteContentService::getContentWithFallback('join.join', __('join.join')) }}
                    </h3>
                    <a class="action-block__link button button--primary" href="{{ route('joinUs') }}">
                        {{ WebsiteContentService::getContentWithFallback('join.joinCTA', __('join.joinCTA')) }}
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="action-block">
                <div class="action-block__inner">
                    @if($joinImage2 && $joinImage2->image)
                        <img class="img--bg" src="{{ $joinImage2->image_url }}" alt="{{ $joinImage2->content }}" />
                    @else
                        @php
                            $joinFallback2 = \App\Models\WebsiteContent::active()->where('key', 'home.join.fallback2')->first();
                        @endphp
                        @if($joinFallback2)
                            <img class="img--bg" src="{{ $joinFallback2->image_url }}" alt="{{ $joinFallback2->content }}" />
                        @endif
                    @endif
                    <h3 class="action-block__title">
                        {{ WebsiteContentService::getContentWithFallback('join.contact', __('join.contact')) }}
                    </h3>
                    <a class="action-block__link button button--primary" href="{{ route('contactUs') }}">
                        {{ WebsiteContentService::getContentWithFallback('join.contactCTA', __('join.contactCTA')) }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
