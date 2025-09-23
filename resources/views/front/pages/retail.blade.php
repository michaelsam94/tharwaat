@extends('front.pages.index')
@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container" style="height:170px">
                        <h2 class="heading__title"><span>{{ __('groups.retailHeader') }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <h1 style="text-align: center">{{ __('groups.retailTitle') }}</h1>
    </section>
@endsection
