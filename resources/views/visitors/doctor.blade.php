@extends('layouts.app')
@section('content')
<!-- ======================== page title =========================== -->
<section class="page-title page-title-layout1 bg-overlay">
    <div class="bg-img"><img src="assets/images/page-titles/7.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                <h1 class="pagetitle__heading">Doctors — We Were There The Day You Were Born! </h1>
                <p class="pagetitle__desc">GR Hospital has been present in India since 1990, offering innovative
                    solutions,
                    specializing in medical services for treatment of medical infrastructure.
                </p>
                <a href="appointment.html" class="btn btn__primary btn__rounded">
                    <span>Enquiry</span>
                    <i class="icon-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /.page-title -->

<!-- ======================== Doctors layout ========================== -->
<section class="team-layout3 pb-40">
    <div class="container">
        <div class="row">
            @foreach ($doctors as $doctor )
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="member">
                    <div class="member__img">
                        <img src="{{ Voyager::image($doctor->image) }}" alt="member img" style="width: 370px;height: 246px;object-fit: contain;">
                    </div><!-- /.member-img -->
                    <div class="member__info">
                        <h5 class="member__name">{{ $doctor->full_name }}</h5>
                        <p class="member__job">{{ $doctor->specialty }}</p>
                        <p class="member__desc">{{ \Illuminate\Support\Str::limit($doctor->desc, $limit = 150,
                            $end = '...') }}</p>
                        <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">
                            <a href="{{ route('doctor-detail',$doctor->id) }}"
                                class="btn btn__secondary btn__link btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- /.member-info -->
                </div><!-- /.member -->
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-center">
                {{-- <nav class="pagination-area">
                    <ul class="pagination justify-content-center">
                        <li><a class="current" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="icon-arrow-right"></i></a></li>
                    </ul>
                </nav> --}}
                <div class="float-right">
                    {!! $doctors->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.Doctors layout  -->
@endsection
