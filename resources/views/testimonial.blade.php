@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Testimonials</h3>
                            <a href="{{ url('/') }}">Home </a>/
                            <span> Testimonials</span>
                        </div>
                    </div>
                </div>
            </div>
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


       <!-- testimonial container -->
       <section class="main-testimonial-container">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="1200ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <!--<img src="assets/images/team/" alt="img">-->
                            <div class="test-quiet">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <p>“We thank God for the success of the program.
                            God bless everyone.
                            Truly it was mission outreach
                            We will continue to be relevant in the service of God and humanity
                            God bless you all.”</p>
                        <h6>Akodu</h6>
                        <div class="rating">
                            <ul>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i class="checked">&#9734;</i></li>
                            </ul>
                        </div>
                        <span>Volunteer</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <!--<img src="assets/images/team/" alt="img">-->
                            <div class="test-quiet">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <p>“I want to appreciate the Grace of God in the life of the initiator and organizer of Shalom
                        Global Medical Mission for reaching out to the needy by given them free medical care for blood
                        pressure, blood sugar, malaria and typhoid and free eye glasses and gifts of various kind, May God
                        Almighty bless you more and continue to strengthen you in Jesus name.”
                        </p>
                        <h6>Towo</h6>
                        <div class="rating">
                            <ul>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i class="checked">&#9734;</i></li>
                            </ul>
                        </div>
                        <span>Volunteers</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <!--<img src="assets/images/team/" alt="img">-->
                            <div class="test-quiet">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                         <p>“I want to appreciate the Grace of God in the life of the initiator and organizer of Shalom Global Medical
                        Mission for reaching out to the needy by given them free medical care for blood pressure, blood sugar,
                        malaria and typhoid and free eye glasses and gifts of various kind, May God Almighty bless you more
                        and continue to strengthen you in Jesus name.

                        Thank you so much for the opportunity to volunteer with the Shalom Global Medical Mission for the
                        medical outreach.
                        It was a very valuable experience for me and I learnt a lot.
                        God bless you ma”
                        </p>
                        <h6></h6>
                        <div class="rating">
                            <ul>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i class="checked">&#9734;</i></li>
                            </ul>
                        </div>
                        <span>Volunteer</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <!--<img src="assets/images/team/" alt="Volunteer Group">-->
                            <div class="test-quiet">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <p>“I want to appreciate Shalom Global Medical mission for the opportunity given to me to be among those
                            that was trained for CPR and also to be amongst the Volunteer group. I had a wonderful experience
                            during the training and along with the volunteering work, this has widened my experience more on
                            health issues. I also wants to appreciate them for bringing this program to help people about their
                            health. And also for the tangible gift that was given to me, I say Thank you.
                            God bless Shalom Global Medical Mission. Amen”
                       </p>
                        <h6>Oluwabukunmi Koleoso</h6>
                        <div class="rating">
                            <ul>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i class="checked">&#9734;</i></li>
                            </ul>
                        </div>
                        <span>Volunteer Group</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                           <!-- <img src="assets/images/team/" alt="Volunteer Group">-->
                            <div class="test-quiet">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <p>“Good day to you my Able Dr Alice and Elder Soremekun and all your team from Abroad,

                            Thanks for all you do, we really appreciate all your efforts,the training, the free medical check-up and
                            free drugs. God almighty will continue to lift you up.
                            GLOBAL SHALOM MEDICAL MISSION, we appreciate you, forward ever in Jesus name, E SEUN PUPO”
                        </p>
                        <h6></h6>
                        <div class="rating">
                            <ul>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i class="checked">&#9734;</i></li>
                            </ul>
                        </div>
                        <span>Volunteers</span>
                    </div>
                </div>
                <!--<div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <img src="assets/images/team/" alt="img">
                            <div class="test-quiet">
                                <i class="flaticon-quote"></i>
                            </div>
                        </div>
                        <p>“Mattis cras magna morb nula punar
                            aenean aliquet in. Risus a arcu eget
                            mi hendrerit gravida elit scelerisque
                            tempor Pharetra fringilla tellus vivera
                            eget sapien viverra faucibus facilisis
                            sed facilisi dictum.”</p>
                        <h6></h6>
                        <div class="rating">
                            <ul>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i >&#9733;</i></li>
                                <li><i class="checked">&#9734;</i></li>
                            </ul>
                        </div>
                        <span>Manager</span>
                    </div>
                </div>-->
            </div>
        </div>
       </section>
       <!-- testimonial container -->
    @endsection