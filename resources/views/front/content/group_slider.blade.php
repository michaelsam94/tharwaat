<section class="section causes causes--front_3 background--light">
    <div class="container">
        <div class="row align-items-center bottom-70 mt-0">
            <div class="col-xl-5">
                <div class="heading heading--primary" style="margin-top:-100px">
                    <h2 class="heading__title"><span>{{ __('groups.richeeTitle') }}</span></h2>
                    <p class="mb-2">{{ __('groups.richeeP1') }}</p>
                    <p class="no-margin-bottom">{{ __('groups.richeeP2') }}</p>
                </div><a class="button button--blue margin-top-40" href="#">{{ __('groups.richeeButton') }}</a>
            </div>
            <div class="col-xl-6 offset-xl-1 d-none d-xl-block">
                <div class="row offset-margin">
                    <div class="col-12 mb-5">
                        <div class="donors-slider__item">
                            <div class="donors-slider__img">
                                @php
                                    $groupG3 = \App\Models\WebsiteContent::active()->where('key', 'home.groups.g3')->first();
                                @endphp
                                @if($groupG3)
                                    <img src="{{ $groupG3->image_url }}"
                                    style="width:60%" alt="{{ $groupG3->content }}" />
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="donors-slider__item">
                            <div>
                                @php
                                    $groupG4 = \App\Models\WebsiteContent::active()->where('key', 'home.groups.g4')->first();
                                @endphp
                                @if($groupG4)
                                    <img src="{{ $groupG4->image_url }}" style="width:60%" alt="{{ $groupG4->content }}" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row offset-margin">
            <div class="col-12">
                <div class="items-slider-wrapper">
                    <div class="items-slider">
                        <div class="items-slider__item">
                            <div class="causes-item causes-item--style-3 causes-item--slider no-padding">
                                <div class="causes-item__body">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8">
                                            <div class="causes-item__img">
                                                @php
                                                    $groupSlider = \App\Models\WebsiteContent::active()->where('key', 'home.groups.slider')->first();
                                                @endphp
                                                @if($groupSlider)
                                                    <img class="img--bg" src="{{ $groupSlider->image_url }}" alt="{{ $groupSlider->content }}" />
                                                @endif
                                                <!-- slider nav start-->
                                                <div class="slider__nav items-slider__nav">
                                                    <div class="slider__arrows">
                                                        <div class="slider__prev"><i class="fa fa-chevron-left"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                        <div class="slider__next"><i class="fa fa-chevron-right"
                                                                aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- slider nav end-->
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="causes-item__wrapper">
                                                <!--<div class="causes-item__action">
                                                    <div class="causes-item__badge">Hospitality Management</div>
                                                </div>-->
                                                <div class="causes-item__top">
                                                    <h6 class="causes-item__title"> <a
                                                            href="cause-details.html">{{ __('groups.richee2') }}</a>
                                                    </h6>
                                                    <p>{{ __('groups.riceee2p') }}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
