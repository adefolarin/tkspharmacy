@extends('frontendlayout.layout')

@section('content')


    <!--hero-area-start-->
    <div class="hero-area position-relative">
        <img src="{{ asset('frontendassets/assets/img/homepage2/hero-img.png') }}" alt="" class="hero-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-containt">
						
                        <p>Your health. Our priority.</p>
                        <h3>100% pure <br> Pharmacy.</h3>
                        <a href="#" class="theme-btn">Contact Us</a>
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
                        <img src="{{ asset('frontendassets/assets/img/homepage2/p1.png') }}" alt="">
                        <h3>Save 20% <br>
                            On Sanitizers</h3>
                        <p>99.9% Germ <br>
                            Protection</p>
                        <a href="#" class="theme-btn">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="single-product" style="background-image: url({{ asset('frontendassets/assets/img/homepage2/p2-bg.png') }})">
                        <img class="single-img-2" src="{{ asset('frontendassets/assets/img/homepage2/p2.png') }}" alt="">
                        <h3>Covid Protective <br> Face Mask </h3>
                        <h4>Save Upto 15%</h4>
                        <a href="#" class="theme-btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="quality-fl">
                        <div class="quality-text">
                            <span>24/7 Available</span>
                            <h3>Best Quality <br>
                                Pharmacy Store</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, Lorem ipsum dolor sit
                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Lorem ipsum dolor sit amet,</p>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi- scing elit</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality qb2">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q2.png') }}" alt="">
                                    <h4>Medicine Supply</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi- scing elit</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality qb3">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q3.png') }}" alt="">
                                    <h4>Covid-19 Medical Supply</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-quality qb4">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/q4.png') }}" alt="">
								<h4>Medical Equipment</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product-area-end-->

    <!--    featured-area-start-->
    <div class="featured-area position-relative">
        <img src="{{ asset('frontendassets/assets/img/homepage2/pluse-2.png') }}" alt="" class="pluse-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Featured Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-teb">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Medical Equipment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Medicine & Health</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2"
                                    role="tab" aria-controls="pills-contact2" aria-selected="false">Personal Care</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact3"
                                    role="tab" aria-controls="pills-contact3" aria-selected="false">Baby Care</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="inner-featured">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f1.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Thermometer</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f2.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin D</h3>
                                                    <h4>$25.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f3.png') }}" alt="">
                                                    </div>
                                                    <span>-10% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Sugar Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f4.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Hand Sanitizer</h3>
                                                    <h4>$30.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f5.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin C</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f6.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>BP Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="inner-featured">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f1.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Thermometer</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f2.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin D</h3>
                                                    <h4>$25.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f3.png') }}" alt="">
                                                    </div>
                                                    <span>-10% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Sugar Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f4.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Hand Sanitizer</h3>
                                                    <h4>$30.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f5.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin C</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f6.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>BP Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f8.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Disposable Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="inner-featured">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f2.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin D</h3>
                                                    <h4>$25.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f3.png') }}" alt="">
                                                    </div>
                                                    <span>-10% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Sugar Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f4.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Hand Sanitizer</h3>
                                                    <h4>$30.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f5.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin C</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f6.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>BP Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f8.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Disposable Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                aria-labelledby="pills-contact-tab2">
                                <div class="inner-featured">
                                    <div class="row">

                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f2.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin D</h3>
                                                    <h4>$25.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f1.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Thermometer</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f3.png') }}" alt="">
                                                    </div>
                                                    <span>-10% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Sugar Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f4.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Hand Sanitizer</h3>
                                                    <h4>$30.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f5.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin C</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f6.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>BP Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f8.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Disposable Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact3" role="tabpanel"
                                aria-labelledby="pills-contact-tab3">
                                <div class="inner-featured">
                                    <div class="row">

                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f2.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin D</h3>
                                                    <h4>$25.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f3.png') }}" alt="">
                                                    </div>
                                                    <span>-10% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Sugar Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f1.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Thermometer</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f4.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Hand Sanitizer</h3>
                                                    <h4>$30.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f5.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Vitamin C</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f6.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>BP Monitor</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4">
                                            <div class="single-featured">
                                                <div class="singl-top position-relative">
                                                    <div class="feet-img">
                                                        <img src="{{ asset('frontendassets/assets/img/homepage2/f8.png') }}" alt="">
                                                    </div>
                                                    <span>-20% </span>
                                                    <a class="love" href="#"><i class="far fa-heart"></i></a>
                                                    <div class="fetured-btn"><a href="#" class="theme-btn">Quick
                                                            View</a></div>
                                                </div>
                                                <div class="fecure-containt">
                                                    <h3>Disposable Face Mask</h3>
                                                    <h4>$45.00</h4>
                                                    <a href="#" class="theme-btn">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    featured-area-end-->

    <!--    baner-area-start-->
    <div class="baner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="baner-containt">
                        <h4>Shop Online <br>
                            or In store Get
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

    <!--    view-area-start-->
    <div class="view-area">
	
        <div class="container">
		<img src="{{ asset('frontendassets/assets/img/homepage2/round-sheap.png') }}" class="home-slider-circle" alt="circle-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title view-title">
                        <h3>Recently Viewed</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="view-slider owl-carousel">
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f1.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Thermometer</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f2.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Vitamin D</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f3.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Sugar Monitor</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f4.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Hand Sanitizer</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f5.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Vitamin C</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f6.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>BP Monitor</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f7.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Face Mask</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                        <div class="single-featured">
                            <div class="singl-top position-relative">
                                <div class="feet-img">
                                    <img src="{{ asset('frontendassets/assets/img/homepage2/f8.png') }}" alt="">
                                </div>
                                <span>-20% </span>
                                <a class="love" href="#"><i class="far fa-heart"></i></a>
                                <div class="fetured-btn"><a href="#" class="theme-btn">Quick View</a></div>
                            </div>
                            <div class="fecure-containt">
                                <h3>Disposable Face Mask</h3>
                                <h4>$45.00</h4>
                                <a href="#" class="theme-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    view-area-end-->

    <!--    brand-area-start-->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Shop By Brands</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-fl">
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b1.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b2.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b3.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b4.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b5.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b6.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b7.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('frontendassets/assets/img/homepage2/b8.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    brand-area-end-->

    <!--info-area-start-->
    <div class="info-area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single-info">
                        <i class="icofont-map-pins"></i>
                        <p>11 Georgian Rd,
                            58/A, New York City</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-info cl2">
                        <i class="icofont-envelope"></i>
                        <p><a href="mailto:info@info.com">info@info.com</a><br />
                            <a href="info@40medics.html">info@medics.com</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="single-info cl3">
                        <i class="icofont-mobile-phone"></i>
                        <div class="info-details text-white">
                            <p><a href="tel:01234567890">01213-456-7890</a></p>
                            <p><a href="tel:01234567890">01213-456-7890</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--info-area-end-->




@endsection