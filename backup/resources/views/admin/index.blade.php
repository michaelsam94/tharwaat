<!DOCTYPE html>
<html lang="en" dir="">

@include('admin.layouts.head')
<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">
        @include('admin.layouts.aside')
        <div class="main-content-wrap d-flex flex-column">
            @include('admin.layouts.header')
            <div class="main-content">
                @include('admin.layouts.message')
                @yield('content')
                <div class="flex-grow-1"></div>
                @include('admin.layouts.footer')
            </div>
        </div>
    </div>
    @include('admin.layouts.customizer')
    @include('admin.layouts.scripts')
</body>
</html>
