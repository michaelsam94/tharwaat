@extends('front.pages.index')
@section('title')
    Thrawaat|Welcome
@endsection
@section('content')
    @include('front.content.slider')
    @include('front.content.about')
    {{-- @include('front.content.groups') --}}
    {{-- @include('front.content.projects')--}}
    {{--  @include('front.content.text')--}}
    @include('front.content.join_us')
    {{--  @include('front.content.testimonials')--}}
    {{--  @include('front.content.blog')--}}
    @include('front.content.partners')
 @endsection
