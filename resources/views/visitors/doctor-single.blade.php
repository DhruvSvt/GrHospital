@extends('layouts.app')
@section('content')
<!-- ======================== page title =========================== -->
<section class="page-title page-title-layout6">
    <div class="bg-img"><img src="{{ config('app.url') }}/assets/images/backgrounds/7.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
                <a href="{{ route('enquiry') }}" class="btn btn__white btn__rounded">Enquiry</a>
            </div>
        </div>
    </div>
</section>

<section class="pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar has-marign-right">
                    <div class="widget widget-member shifted-top">
                        <div class="member mb-0">
                            <div class="member__img">
                                <img src="{{ Voyager::image($doctor->image) }}" alt="member img">
                            </div>
                            <div class="member__info">
                                <h5 class="member__name">{{ $doctor->full_name }}</h5>
                                <p class="member__job">{{ $doctor->specialty }}</p>
                                <p class="member__desc">{{ \Illuminate\Support\Str::limit($doctor->desc, $limit = 100, $end = '...') }}</p>
                                <div class="mt-20 d-flex flex-wrap justify-content-between align-items-center">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-help bg-overlay bg-overlay-primary-gradient">
                        <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                        <div class="widget-content">
                            <div class="widget__icon">
                                <i class="icon-call3"></i>
                            </div>
                            <h4 class="widget__title">Emergency Cases</h4>
                            <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any
                                general
                                or medical enquiry call us.
                            </p>
                            <a href="tel:+9927600542" class="phone__number">
                                <i class="icon-phone"></i> <span>(91) 9927600542</span>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="text-block mb-50">
                    <p class="text-block__desc mb-20 font-weight-bold color-secondary">{{ $doctor->desc }}</p>
                </div>
                <ul class="details-list list-unstyled mb-60">
                    <li>
                        <h5 class="details__title">Speciality</h5>
                        <div class="details__content">
                            <p class="mb-0">{{ $doctor->specialty }}</p>
                        </div>
                    </li>

                </ul>
                <div class="text-block mb-50">
                    <h5 class="text-block__title"> Appreciation for Doctor’s</h5>
                    <p class="text-block__desc mb-20">Your expertise, empathy, and selflessness make a profound impact
                        on the well-being of individuals and families. Your ability to navigate challenges with grace
                        and determination does not go unnoticed. The trust you inspire and the difference you make in
                        the lives of those you care for are immeasurable.
                    </p>
                    <p class="text-block__desc mb-20">
                        Thank you for your tireless efforts, sacrifice, and the countless hours you dedicate to the
                        pursuit of health and healing. Your contributions are invaluable, and we are grateful for the
                        incredible work you do every day. In honoring your commitment to excellence, we recognize the
                        heroes among us, making the world a better and healthier place.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.page-title -->
@endsection
