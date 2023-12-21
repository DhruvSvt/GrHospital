@extends('layouts.app')
@section('content')
<!-- ======================== page title =========================== -->
<section class="page-title page-title-layout5">
    <div class="bg-img"><img src="{{ config('app.url') }}/assets/images/backgrounds/6.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading">Our Doctor’s</h1>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">GR Hospital Doctor’s</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- /.page-title -->

<!-- ======================== Doctors Timetable ========================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="doctors-timetable w-100">
                        <tbody>
                            <tr>
                                <td class="event">
                                    <span class="event__header">GENERAL MEDICINE</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. RAJENDRA SINGH</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">GENERAL SURGERY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. PRASHANT GUPTA</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">OBS & GYNAE</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. BHAVNA SINGH</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">UROLOGY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. PRASHANT GUPTA</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">ENT</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. SHOBHIT GUPTA</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="event">
                                    <span class="event__header">OPTHALMOLOGY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. AMIT SINGH</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">ORTHOPEDIC SURGERY<br>
                                        INCLUDING JOINT<br>
                                        REPLACEMENT</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. VIBHANSHU JAIN</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">CARDIOLOGY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. MUKESH GOYAL</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">NEPHROLOGY<br>
                                        INCLUDING DIALYSIS</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. MUDIT KHURANA</div>
                                </td>
                                <td class="event">
                                    <span class="event__header"></span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. DEEPENDRA SINGH</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="event">
                                    <span class="event__header">RADIOLOGY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. AK GUPTA</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">PATHOLOGY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. RENU MAHENDRU</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">PHYSIOTHERAPY</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. MANOJ JASAWAT</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">GASTROLOGIST</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. DEEPAK KUMAR SHARMA</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">NEURO SURGEON</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. PUNITA GUPTA</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="event">
                                    <span class="event__header">CHILD SPECIALIST , PEDIATRICIAN</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. SAMEER SHARMA</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">MAXILLOFACIAL SURGEON</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. SANJAY NARAYAN GOTAM</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">MAXILLOFACIAL SURGEON</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. BHUPENDRA HARJANI</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">PLASTIC SURGEON</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. PUNIT BHARADWAJ</div>
                                </td>
                                <td class="event">
                                    <span class="event__header">GENERAL PHYSICIAN</span>
                                    <div class="event__type">Consultation</div>
                                    <div class="doctor__name">DR. NEETESH GUPTA</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.Doctors Timetable  -->
@endsection
