@extends('front.pages.index')
@section('title')
    {{ $groupDetails->title }}|Thrawaat
@endsection
@section('content')
    <section class="promo-primary">
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <div class="align-container" style="height:170px">
                        <h2 class="heading__title"><span>{{ $groupDetails->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($groupDetails->content->count() <= 0)
        <center>
            <h1>Under Constructuion</h1>
        </center>
    @endif
    @if ($groupDetails->title == 'Richee Hospitality Group')
        @include('front.content.group_slider')
        @include('front.content.counter')
    @else
        <!-- stories start-->
        <section class="section stories">
            <div class="container">
                <div class="row offset-70">
                    @foreach ($groupDetails->content as $content)
                        @if (!$content->reverse)
                            <section class="section about-us background--blue mb-5" style="padding: 30px 0;">
                                <div class="container">
                                    <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                                        <div class="stories-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-xl-5">
                                                    <div class="img-box">
                                                        <div class="img-box__img">
                                                            <img class="img--bg"
                                                                src="{{ asset('/manage/img/groups_content/' . $content->image) }}"
                                                                alt="img" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6 offset-xl-1">
                                                    <div class="heading heading--primary"><span
                                                            class="heading__pre-title color--mono"></span>
                                                        <h2 class="heading__title color--white">
                                                            <span>{{ $content->title }}</span> </h2>
                                                    </div>
                                                    <p class="color--white">{{ $content->description }}</p>
                                                    @if (!is_null($content->website))
                                                        <a target="_blank" class="button stories-item__button button--blue"
                                                            href="{{ $content->website }}">Webiste</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                        @if ($content->reverse)
                            <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
                                <div class="stories-item">
                                    <div class="row align-items-center flex-column-reverse flex-lg-row">
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="heading heading--primary"><span class="heading__pre-title"></span>
                                                <h2 class="heading__title"><span>{{ $content->title }}</span> </h2>
                                            </div>
                                            <p><strong>{{ $content->description }}</strong></p>
                                            @if (!is_null($content->website))
                                                <a target="_blank" class="button stories-item__button button--blue"
                                                    href="{{ $content->website }}">Webiste</a>
                                            @endif
                                        </div>
                                        <div class="col-lg-6 col-xl-5 offset-xl-1">
                                            <div class="img-box">
                                                <div class="img-box__img">
                                                    <img class="img--bg"
                                                        src="{{ asset('/manage/img/groups_content/' . $content->image) }}"
                                                        alt="img" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <!-- stories end-->
    @endif
@endsection
