<section class="section background--light instagram no-padding-bottom">
    <div class="container">
        <div class="row align-items-end margin-bottom">
            <div class="col-md-7 col-lg-8">
                <div class="heading heading--primary">
                    <h2 class="heading__title no-margin-bottom">
                        <span># Group</span>
                    </h2>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 text-md-right">
                <div class="slider__nav instagram-slider__nav">
                    <div class="slider__arrows">
                        <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-slider">
        @php
            $groupImages = [
                'groups.hardcoded.g1',
                'groups.hardcoded.g2', 
                'groups.hardcoded.g3',
                'groups.hardcoded.g4',
                'groups.hardcoded.g5',
                'groups.hardcoded.g6',
                'groups.hardcoded.g7'
            ];
        @endphp
        
        @foreach($groupImages as $imageKey)
            @php
                $groupImage = \App\Models\WebsiteContent::active()->where('key', $imageKey)->first();
            @endphp
            @if($groupImage)
                <a class="instagram-slider__item" href="#">
                    <img class="img--bg" src="{{ $groupImage->image_url }}" style="padding:20%;" alt="{{ $groupImage->content }}"/>
                    <span class="instagram-slider__icon">
                        <i class="fa fa-link" aria-hidden="true"> Group name</i>
                    </span>
                </a>
            @endif
        @endforeach
    </div>
</section>
