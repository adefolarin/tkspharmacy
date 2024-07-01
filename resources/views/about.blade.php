@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>About us</h3>
                            <a href="{{ url('/') }}">Home </a>/
                            <span> About us</span>
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


        <!-- about -->
        <section class="about home-two-about">
            <div class="home-two-about-shape">
                <img src="{{ asset('frontendassets/assets/images/shape/home-two-about-shape.png') }}" alt="shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-left-container">
                            <div class="home-two-about-image-top paroller" style="transform: translateY(11px);">
                                <img src="{{ asset('frontendassets/assets/images/gallery/home-two-about-top2x1.png') }}" alt="image">
                            </div>
                            <div class="about-image-1 wow fadeInUp">
                                <img src="{{ asset('frontendassets/assets/images/gallery/home-two-about-image2x.png') }}" alt="image">
                            </div>
                            <div class="home-two-about-image-bottom paroller" style="transform: translateY(-11px);">
                                <img src="{{ asset('frontendassets/assets/images/gallery/home-two-about-bottom2x2.png') }}" alt="image" >
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="home-two-about-wrapper">
                            <div class="about-right-container">
                                <div class="common-title">
                                    <h5>Get to know about Us</h5>
                                    <h3>Shalom Global Medical Missions</h3>
                                </div>
                                <p> is a non-profit organization that look out for the healthcare needs
of underserved communities.</p>

                    <h6>Our Mission </h6>
                                <p>We are committed to improving healthcare access and awareness globally through collaborative partnerships, sustainable initiatives, and compassionate service delivery, empowering communities especially the less privileged to thrive with dignity and resilience.</p>
                                 <h6>Our vision </h6>
                                <p>is to create a world where every individual, regardless of their circumstances, religion, race, or location, has access to comprehensive healthcare services and the opportunity to live a healthy and fulfilling life</p>
                                <div class="header-link-btn"><a href="causes.html" target="_blank" class="btn-1">Discover more<span></span></a></div>

                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->

        <!-- map -->
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d48474.64872611011!2d-75.5188393826804!3d40.59313733852438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s4140%20Parker%20Rd.%20Allentown%2C%20New%20Mexico!5e0!3m2!1sen!2sbd!4v1676449615021!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- map -->

    @endsection