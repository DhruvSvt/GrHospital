<!-- ========================= Header =========================== -->
<header class="header header-layout1">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index-2.html">
                <img src="{{ config('app.url') }}/assets/images/logo/logo.png" class="logo-light" width="270px"
                    alt="logo">
                <img src="{{ config('app.url') }}/assets/images/logo/logo.png" class="logo-dark" width="270px"
                    alt="logo">
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">

                <ul class="navbar-nav ml-auto">

                    <li class="nav__item has-dropdown">
                        <a href="{{ route('index') }}" class="nav__item-link active">Home</a>
                    </li>

                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About Us</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="{{ route('facilities') }}" class="nav__item-link">Our Services</a>
                            </li>
                            <li class="nav__item">
                                <a href="gallery.html" class="nav__item-link">Our Gallery</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('enquiry') }}" class="nav__item-link">Enquiry</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Doctors</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="{{ route('doctors') }}" class="nav__item-link">Doctors</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('doctor-list') }}" class="nav__item-link">Our Doctors List</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item has-dropdown">
                        <a href="{{ route('blogs') }}" class="nav__item-link">Blog</a>
                    </li>

                    <li class="nav__item has-dropdown">
                        <a href="{{ route('facilities') }}" class="nav__item-link">Facilities</a>
                    </li>

                </ul>
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                <a href="{{ route('enquiry') }}" class="btn btn__primary btn__rounded ml-30" style="
                min-width: 133px;
                height: 48px;">
                    <span>Enquiry</span>
                </a>
            </div>
        </div><!-- /.container -->
    </nav>
    <!-- /.na
vabr -->
</header>
<!-- /.Header -->
