@extends('frontendlayout.layout')

@section('content')


    <!--hero-area-start-->
    <div>
        <div class="single-slider-active owl-carousel">

            <div>
                <div class="hero-area position-relative">
                    <img src="{{ asset('frontendassets/assets/img/homepage2/bannerimg1.png') }}" alt="" class="hero-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-containt">
                                    
                                <h3 style="font-size:58px">Welcome to <br>TKS</h3>
                                <p>Experience the finest <br>Pharmacy services at the <br>comfort of your home.</p>
                                    <a href="{{ url('contact') }}" class="theme-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="hero-area position-relative">
                    <img src="{{ asset('frontendassets/assets/img/homepage2/bannerimg2.png') }}" alt="" class="hero-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-containt">
                                    
                                    <p>Your health. Our priority.</p>
                                    <h3>100% pure <br> Pharmacy.</h3>
                                    <a href="{{ url('contact') }}" class="theme-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="hero-area position-relative">
                    <img src="{{ asset('frontendassets/assets/img/homepage2/bannerimg3.png') }}" alt="" class="hero-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-containt">
                                    
                                    <p>Your health. Our priority.</p>
                                    <h3>100% pure <br> Pharmacy.</h3>
                                    <a href="{{ url('contact') }}" class="theme-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="hero-area position-relative">
                    <img src="{{ asset('frontendassets/assets/img/homepage2/bannerimg4.png') }}" alt="" class="hero-img">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="hero-containt">
                                    
                                    <p>Your health. Our priority.</p>
                                    <h3>100% pure <br> Pharmacy.</h3>
                                    <a href="{{ url('contact') }}" class="theme-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--hero-area-end-->

    <!--    product-area-start-->
    <div class="product-area">
        <img src="{{ asset('frontendassets/assets/img/homepage2/round-sheap.png') }}" alt="" class="round-sheap">
        <div class="container">
            <div class="row pb-120">
                <div class="col-lg-4 col-md-5">
                    <div class="single-product">
                        <img src="{{ asset('frontendassets/assets/img/homepage2/p1x.png') }}" alt="">
                        <h3>Save Time<br>
                            </h3>
                        <p>Refill Your<br>
                            Prescription</p>
                        <a href="{{ url('refill') }}" class="theme-btn">Refill here</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="single-product" style="background-image: url({{ asset('frontendassets/assets/img/homepage2/p2-bg.png') }})">
                        <img class="single-img-2" src="{{ asset('frontendassets/assets/img/homepage2/p2x2.png') }}" alt="">
                        <h3>Get Vaccination <br>At Home  </h3>
                        <h4>Save The Stress</h4>
                        <a href="#" class="theme-btn">Request Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="quality-fl">
                        <div class="quality-text">
                            <span>24/7 Available</span>
                            <h3>Best Quality <br>
                                TKS Pharmacy Store</h3>
                            <p> We are dedicated to providing exceptional patient care and personalized service to our community. As a trusted healthcare partner, we strive to make healthcare accessible and affordable for all.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="qiality-pp">
                        <img src="{{ asset('frontendassets/assets/img/homepage2/pluse-sheap.png') }}" alt="" class="pluse-sheap">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q1.png') }}" alt="">
                                    <h4>Online Pharmacy</h4>
                                    <p>Order refills online and get your medications shipped directly to your doorstep.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality qb2">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q2.png') }}" alt="">
                                    <h4> Care Service</h4>
                                    <p>We offer tailored care services and customized compliance packaging solutions.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality qb3">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q3.png') }}" alt="">
                                    <h4>Travel Consultation</h4>
                                    <p>Empowering travelers to stay healthy and safe on the go.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality qb4">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q4.png') }}" alt="">
								<h4>DME</h4>
                                    <p>Prioritizing your needs, delivering reliable equipment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--    baner-area-start-->
    <div class="baner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="baner-containt">
                        <h4>Request Online <br>
                            or In store Get at TKS
                        </h4>
                        <a href="#">FREE</a>
                        <h3> <span>Delivery</span> <br>
                            at Your Door</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    baner-area-end-->
    
    <!-- Medi services area Start -->
    <div class="transparent ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="med-service-title carning-text">
                        <h2>Explore Our Caring & Premium <br>
                        Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="med-text-wrapper">
                        <div class="medi-content">
                            <p>At TKS we are commited to providing exceptional care and services. Visit us today and experience the difference.
                                You can walk in or connect with us for quality delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="med-text-wrapper">
                        <div class="medi-content">
                            <p>We also bring the pharmacy to your doorstep. Our medication home delivery service is available at your request, and we'll deliver your medications to your home at your convenience.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TKS services area End -->




    <!--    skin-area-start-->
    <div class="skin-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-card">
                        <div class="ssom">
                            <img src="{{ asset('frontendassets/assets/img/services/Pharmcommservices.png') }}" alt="community">
                        </div>
                        <div class="card-text">
                            <!-- <img src="{{ asset('frontendassets/assets/img/sm-ful.png') }}" alt="" class="card-sheap"> -->
                            <h3>Pharmaceutical Community Services</h3>
                            <p>We believe that our responsibility extends beyond providing quality pharmaceutical products and to also contributing to the well-being of our neighbors and the environment.
                                ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-card">
                        <div class="ssom">
                            <img src="{{ asset('frontendassets/assets/img/services/Durablemedicalequip.png') }}" alt="">
                        </div>
                        <div class="card-text">
                            <!-- <img src="{{ asset('frontendassets/assets/img/sm-ful.png') }}" alt="" class="card-sheap"> -->
                            <h3>Durable Medical Equipment</h3>
                            <p>We prioritize patient needs, offering personalized consultations to ensure the right equipment for individual requirements
                                ...</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-card">
                        <div class="ssom">
                            <img src="{{ asset('frontendassets/assets/img/services/Longtermcare.png') }}" alt="TKS Care">
                        </div>
                        <div class="card-text">
                            <!-- <img src="{{ asset('frontendassets/assets/img/sm-ful.png') }}" alt="" class="card-sheap"> -->
                            <h3>Long Term Care Services</h3>
                            <p>Our Long Term Care services are designed to provide comprehensive support and cater for various care faciities.
                                ...</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-card">
                        <div class="ssom">
                            <img src="{{ asset('frontendassets/assets/img/services/Customcompound.png') }}" alt="">
                        </div>
                        <div class="card-text">
                            <!-- <img src="{{ asset('frontendassets/assets/img/customcompound.png') }}" alt="" class="card-sheap"> -->
                            <h3>Custom Compounding</h3>
                            <p>Our skilled pharmacists and technicians use specialized equipment and techniques to create medications in various forms tailored to meet various needs.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-card">
                        <div class="ssom">
                            <img src="{{ asset('frontendassets/assets/img/services/Medicationtherapy.png') }}" alt="TKS MedTherapy">
                        </div>
                        <div class="card-text">
                            <!-- <img src="{{ asset('frontendassets/assets/img/sm-ful.png') }}" alt="" class="card-sheap"> -->
                            <h3>Medication Therapy Management</h3>
                            <p>Our MTM service is designed to help you get the most out of your medications,safety and effectively.</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-card">
                        <div class="ssom">
                            <img src="{{ asset('frontendassets/assets/img/services/Pharmmedicalconsult.png') }}" alt="">
                        </div>
                        <div class="card-text">
                            <!-- <img src="{{ asset('frontendassets/assets/img/sm-ful.png') }}" alt="" class="card-sheap"> -->
                            <h3>Pharmacy Medical Consultation</h3>
                            <p>We provide you with comprehensive guidiance and support for health concerns.
                                ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    skin-area-end-->


    <!--info-area-start-->
    <div class="info-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single-info">
                        <i class="icofont-map-pins"></i>
                        <p>4809 Argonne Street, Suite 155, Denver CO 80249.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-info cl2">
                        <i class="icofont-envelope"></i>
                        <p><a href="mailto:info@tksrx.com">info@tksrx.com</a><br />
                            <a href="#">alice@tksrx.com</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="single-info cl3">
                        <i class="icofont-mobile-phone"></i>
                        <div class="info-details text-white">
                            <p><a href="tel:01234567890">720 583 2110</a></p> 
                        </div>
                        <i class="fa fa-fax"></i>
                        <div class="info-details text-white">
                          <p><a href="fax:720 583 0326">720 583 0326</a></p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--info-area-end-->



    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>-->

</div>



@endsection