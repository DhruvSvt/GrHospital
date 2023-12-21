<!-- ========================= Header =========================== -->
<header class="header header-layout1">
    {{-- <div class="header-topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                            <li>
                                <button class="miniPopup-emergency-trigger" type="button">24/7 Emergency</button>
                                <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                                    <div class="emergency__icon">
                                        <i class="icon-call3"></i>
                                    </div>
                                    <a href="tel:+201061245741" class="phone__number">
                                        <i class="icon-phone"></i> <span>+2 01061245741</span>
                                    </a>
                                    <p>Please feel free to contact our friendly reception staff with any general or
                                        medical enquiry.
                                    </p>
                                    <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                                        <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                                    </a>
                                </div><!-- /.miniPopup-emergency -->
                            </li>
                            <li>
                                <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002)
                                    01061245741</a>
                            </li>
                            <li>
                                <i class="icon-location"></i><a href="#">Location: Brooklyn, New York</a>
                            </li>
                            <li>
                                <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00 pm</a>
                            </li>
                        </ul><!-- /.contact__list -->
                        <div class="d-flex">
                            <ul class="social-icons list-unstyled mb-0 mr-30">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                            <form class="header-topbar__search">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div> --}}
    <!-- /.header-top -->
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
                                <a href="services.html" class="nav__item-link">Our Services</a>
                            </li>
                            <li class="nav__item">
                                <a href="gallery.html" class="nav__item-link">Our Gallery</a>
                            </li>
                            <li class="nav__item">
                                <a href="appointment.html" class="nav__item-link">Enquiry</a>
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
                        <a href="#" class="nav__item-link">facilitaties</a>
                    </li>

                </ul>
                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div><!-- /.navbar-collapse -->
            <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                <a href="appointment.html" class="btn btn__primary btn__rounded ml-30" style="
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
