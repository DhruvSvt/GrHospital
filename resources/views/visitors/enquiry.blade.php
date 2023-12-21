@extends('layouts.app')
@section('content')
<!-- ========================= Google Map =========================  -->
<section class="google-map py-0">
    <iframe frameborder="0" height="500" width="100%"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d865.2124439103205!2d78.0520762908823!3d27.129613422122464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397473d81439c7cf%3A0xa7001f6bc2883eb4!2sG.R.%20Hospital%20%26%20Research%20Centre!5e0!3m2!1sen!2sin!4v1703144673684!5m2!1sen!2sin"></iframe>
</section>
<!-- /.GoogleMap -->

<!-- ========================== contact =========================== -->
<section class="contact-layout1 pt-0 mt--100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-panel d-flex flex-wrap">
                    <form class="contact-panel__form" method="POST" action="{{ route('enquiry-store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">How Can We Help? </h4>
                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                    reception staff
                                    with any general or medical enquiry. Our doctors will receive or return any urgent
                                    calls.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <i class="icon-user form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                        name="name" required>
                                    @error('name')
                                    <p class="font-weight-bold mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <i class="icon-email form-group-icon"></i>
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                        name="email" required>
                                    @error('email')
                                    <p class="font-weight-bold mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <i class="icon-phone form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                        name="phone" required>
                                    @error('phone')
                                    <p class="font-weight-bold mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <i class="icon-alert form-group-icon"></i>
                                    <textarea class="form-control" placeholder="Message" id="contact-message"
                                        name="message">
                                    </textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    Submit Request <i class="icon-arrow-right"></i>
                                </button>
                                {{-- <div class="contact-result"></div> --}}
                            </div>
                        </div>
                    </form>
                    <div
                        class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                        <div class="bg-img"><img src="{{ config('app.url') }}/assets/images/banners/1.jpg" alt="banner"></div>
                        <div>
                            <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                            <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                contact our
                                friendly staff with any medical enquiry.
                            </p>
                        </div>
                        <div>
                            <ul class="contact__list list-unstyled mb-30">
                                <li>
                                    <i class="icon-phone"></i><a href="tel:+9927600542">Emergency Line: (91)
                                        9927600542</a>
                                </li>
                                <li>
                                    <i class="icon-location"></i><a href="#">BEROLI AHIR SHAMSABAD ROAD,
                                        Shamsabad Road, Kaveri Vihar Phase II, Sri Nikunj Colony, Agra, Uttar Pradesh
                                        282001</a>
                                </li>
                                <li>
                                    <i class="icon-clock"></i><a href="#">Open 24 hours</a>
                                </li>
                            </ul>
                            <a href="tel:+9927600542" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.contact -->
@endsection
