@include('admin.HeaderStyle')
    {{--    LEFT MENU--}}
    @include('admin.leftMenu')

    {{--   END LEFT MENU--}}
    <div class="main-panel">
        <!-- Navbar -->
    @include('admin.navBar')
    <!-- End Navbar -->

        <div class="content">
          @yield('content')
        </div>


@include('admin.footer')
{{--        FOOTER--}}


{{--FILTER MENU--}}

{{--FILTER MENU--}}

@include('admin.footerJs')
