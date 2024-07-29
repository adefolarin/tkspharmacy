@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
     
    <!-- hero-about-area start -->
    <div class="banner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-about-text text-center">
                        <h4>Free Medical Delivery</h4>
                        <h4><span>Home/Service/Free Medical Delivery</span> </h4>
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
                        <h4>Free Medication Delivery</h4>
                        <p>At TKS, We offer free medication delivery for easy access and convenience. Get a prescription from your doctor, fax or give us a call to place an order.</p>
                        <div class="imgg">
                        <img src="{{ asset('frontendassets/assets/img/services/fmd1.png') }}" alt="">
                        <img src="{{ asset('frontendassets/assets/img/services/fmd2.png') }}" alt="">
                        </div>
                        <p> You dont have to wait in line, we deliver to your doorstops.
                         </p>
                    </div>
        

 <div class="eye-list-lf">
                        <h3>Our Free medication delivery includes:</h3>
                        <div class="llff">

                            <ul>
                  
<!--<li><a href="#"><i class="icofont-arrow-right"></i> UTI

</a></li>-->
                                <li><a href="#"><i class="icofont-arrow-right"></i> Home Vaccination
</a></li>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Prescription delivery 
                                        </a></li>
                                <!--<li><a href="#"><i class="icofont-arrow-right"></i>Flu
                                        </a></li>-->

                            </ul>

                            <ul>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Over the counter delivery</a></li>
                                <li><a href="#"><i class="icofont-arrow-right"></i>Medication reminder</a></li>
                                <!--<li><a href="#"><i class="icofont-arrow-right"></i>Home Care Facilities
                                        </a></li>-->
                                <!--<li><a href="#"><i class="icofont-arrow-right"></i>Compliance Packaging</a></li>-->

                            
                            <!--<li><a href="#"><i class="icofont-arrow-right"></i></a></li>-->

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
                                    <p>You can send us a Mail at tksrxpp@gmail.com or call 720 583 2110 </p>
                                    
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
                                    <p>You can call or fax your prescription for refill. <br>Phone: 720 583 2110 <br>Fax: 
720 583 0326
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