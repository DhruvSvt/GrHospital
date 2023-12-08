<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('visitors.inc.header-links')

    @yield('head')
</head>

<body>

    <div class="wrapper">
        <!-- preloader -->
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div>
        <!-- /.preloader -->
        @include('visitors.inc.header')

        @yield('content')

        @include('visitors.inc.footer')
        <!-- wrapper -->
        <button id="scrollTopBtn">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
        <!-- /.wrapper -->
    </div>


    @include('visitors.inc.footer-links')

    @yield('script')
</body>

</html>
