<section class="section donors donors--style-2 no-padding-bottom">
    <div class="container">
        <div class="row margin-bottom">
            <div class="col-12">
                <div class="heading heading--primary heading--center">
                    <h2 class="heading__title no-margin-bottom"><span>{{ __('join.groups') }}</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner row w-100 mx-auto" role="listbox">
                        <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            @php
                                $partner1 = \App\Models\WebsiteContent::active()->where('key', 'home.partners.1')->first();
                            @endphp
                            @if($partner1)
                                <img src="{{ $partner1->image_url }}" class="img-fluid mx-auto d-block"
                                alt="img1">
                            @endif
                        </div>
                        @php
                            $partnerKeys = [
                                'home.partners.2', 'home.partners.3', 'home.partners.4', 'home.partners.5',
                                'home.partners.6', 'home.partners.7', 'home.partners.8', 'home.partners.10',
                                'home.partners.11', 'home.partners.12', 'home.partners.13', 'home.partners.14'
                            ];
                        @endphp
                        
                        @foreach($partnerKeys as $index => $partnerKey)
                            @php
                                $partner = \App\Models\WebsiteContent::active()->where('key', $partnerKey)->first();
                            @endphp
                            @if($partner)
                                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                                    <img src="{{ $partner->image_url }}" class="img-fluid mx-auto d-block" alt="{{ $partner->content }}">
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
