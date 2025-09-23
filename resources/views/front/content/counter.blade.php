<section class="section elements no-padding-top">
    <!-- counter style-2 start-->
    <section class="section counter counter--style-2 mt-5">
        <div class="counter--style-2__bg jarallax">
            <picture>
                @php
                    $counterBg = \App\Models\WebsiteContent::active()->where('key', 'home.counter.bg')->first();
                @endphp
                @if($counterBg)
                    <source srcset="{{ $counterBg->image_url }}" media="(min-width: 992px)"/>
                    <img class="jarallax-img" src="{{ $counterBg->image_url }}" alt="{{ $counterBg->content }}"/>
                @endif
            </picture>
        </div>
        <div class="container">
            <div class="row offset-margin">
                <div class="col-md-4 text-center">
                    <div class="counter-item counter-item--style-2">
                        <div class="counter-item__top">
                            <h5 class="counter-item__title"> {{__("groups.counter1")}}</h5>
                        </div>
                        <div class="counter-item__lower"><span class="js-counter">9,300</span><span> +</span></div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="counter-item counter-item--style-2">
                        <div class="counter-item__top">
                            <h5 class="counter-item__title">{{__("groups.counter2")}}</h5>
                        </div>
                        <div class="counter-item__lower"><span class="js-counter">831</span><span>K +</span></div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="counter-item counter-item--style-2">
                        <div class="counter-item__top">
                            <h5 class="counter-item__title">{{__("groups.counter3")}}</h5>
                        </div>
                        <div class="counter-item__lower"><span class="js-counter">87</span><span>M +</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter style-2 end-->
</section>