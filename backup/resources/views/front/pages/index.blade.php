<!DOCTYPE html>
<html lang="en">
@include('front.layouts.head')
<body>
<div class="page-wrapper">
    @include('front.layouts.mobile_nav')
    @include('front.layouts.aside')
    @include('front.layouts.top_bar')
    @include('front.layouts.header')
    <main class="main">
        @yield('content')
    </main>
    @include('front.layouts.footer')
</div>
@include('front.layouts.scripts')
</body>
</html>
