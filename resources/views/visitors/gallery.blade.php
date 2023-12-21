@extends('layouts.app')
@section('content')

<!-- ======================== page title =========================== -->
<section class="page-title page-title-layout5 bg-overlay text-center">
    <div class="bg-img"><img src="assets/images/page-titles/6.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading__title">Our Gallery</h1>
                {{-- <nav>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="about-us.html">About</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
                    </ol>
                </nav> --}}
            </div>
        </div>
    </div>
</section>
<!-- /.page-title -->

<!-- ======================== gallery layout2 =========================== -->
<section class="gallery-layout2 pt-130 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3 text-center">
                <div class="heading mb-60">
                    <h2 class="heading__subtitle">The Best Medical And General Practice Care!</h2>
                    <h3 class="heading__title">Providing Medical Care For The Sickest In Our Community.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($gallery as $gallery )
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="gallery-img">
                    <a class="popup-gallery-item" href="{{ Voyager::image($gallery->image) }}"><i
                            class="fas fa-eye"></i></a>
                    <img src="{{ Voyager::image($gallery->image) }}" alt="gallery img"
                        style="width: 370px;height: 277.5px;object-fit: cover;">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /.gallery layout2 -->
@endsection
