@extends('front.pages.index')

@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container" style="height:170px">
                        <h2 class="heading__title"><span>{{ \App\Services\WebsiteContentService::getContent('pages.richee.header') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.content.group_slider')
    @include('front.content.counter')
@endsection
