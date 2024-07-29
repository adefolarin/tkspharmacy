@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
     
    <!-- hero-about-area start -->
    <div class="banner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-about-text text-center">
                        <h3>Medication Therapy Management</h3>
                        <h4><span>Home/Service/ </span> Medication Therapy Management</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-about-area End -->

            @if($errors->any())
                    <div class="alert alert-danger" style="margin-top:50px;padding:30px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:50px;padding:30px;">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:50px;padding:30px;">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        </section>
        <!-- common banner -->



    <!--    about-doctor-start-start-->
    <div class="about-doctors-area tedd">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="eye-list-lf teart title">
                        <h4>Medication Therapy Management</h4>
                        <p>Our Medication Therapy Management (MTM) program is designed to help you get the most out of your medications. Our team of expert pharmacists and healthcare professionals will work with you and your healthcare providers to ensure that your medications are safe, effective, and appropriate for your specific needs.</p>
                        <div class="imgg">
                        <img src="{{ asset('frontendassets/assets/img/services/mtm1.png') }}" alt="">
                        <img src="{{ asset('frontendassets/assets/img/services/mtm2.png') }}" alt="">
                        </div>
                        <p>Our aim is to improve medication effecacy and safety.
                         </p>
                    </div>
         Comprehensive medication reviews





           <div class="eye-list-lf">
                        <h3>Our MTM services include </h3>
                        <div class="llff">

                            <ul>
                                <li><a href="#"><i class="icofont-arrow-right"></i> Personalized medication plans

</a></li>
                                <li><a href="#"><i class="icofont-arrow-right"></i> 
</a></li>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Medication therapy monitoring and adjustments
                                        </a></li>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Education on proper medication use and potential side effects
                                        </a></li>

                            </ul>

                            <ul>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Drug interaction and allergy screening</a></li>
                                <!--<li><a href="#"><i class="icofont-arrow-right"></i>Solution</a></li>-->
                                <li><a href="#"><i class="icofont-arrow-right"></i>Communication with your healthcare providers to ensure coordinated care
                                        </a></li>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Regular progress assessments and reporting</a></li>

                            </ul>
                        </div>
                        <div class="pp">
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-teart">
                      @include('frontendlayout.appointmentform')
                    </div>
                    <div class="doctor-into mrd">
                        <h3>Pharmacy Open Hour</h3>
                        <div class="doctor-into-fl">
                            <div class="doctor-into-l">
                                <p>Mon – Fri -</p>
                                <p> 8:00 AM - 6:00 PM</p>
                            </div>
                            <div class="doctor-into-l">
                                <p>Saturday</p>
                                <p> 9:00 AM - 2:00 PM</p>
                            </div>
                            <div class="doctor-into-l">
                                <p>Sunday -</p>
                                <p> Closed</p>
                            </div>
                        </div>
                        <button class="team-1">Book Appointment Now</button>
                        <!-- <img src="assets/img/doctors-details/ab.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    about-doctor-start-end-->

    <!--    work-tab-area-start-->
    <div class="work-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Online Consultation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Book An
                                    Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Patient
                                    Satisfaction</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="work-tab-text">
                                    <h4>Send us a message</h4>
                                    <p>You can send us a Mail at alice@tksrx.com or call 720 583 2110 </p>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="work-tab-text">
                                    <h4>You can walk in or book an appointment with us today</h4>
                                    <p>Get in touch with us today to learn more about our services and how we can support your health journey.</p>
                                    <p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="work-tab-text">
                                    <h4>We attend to both new and returning with satisfaction</h4>
                                    <p>You can call or fax your prescription for refill. <br>Phone: 720 583 2110 <br>Fax: 720 583 2110
 </p>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    work-tab-area-end-->


    @endsection