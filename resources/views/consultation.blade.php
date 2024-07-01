@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Consultation</h3>
                            <a href="{{ url('/') }}">Home </a>/
                            <span> Consultation</span>
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


         <!-- causes -->
         <section class="causes causes-page causes-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-details-title causes-details-title-top">
                            <h3>Other initiatives</h3>
                        </div>
                        <div class="causes-carousel owl-carousel owl-theme">
                            <div class="causes-card">
                                <div class="causes-image-container">
                                    <div class="causes-image-overlay wow"></div>
                                    <div class="causes-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/causes-02.png') }}" alt="img"></a>
                                        <div class="header-link-btn"><a href="#" class="btn-1">Free Medical Treatment<span></span></a></div>
                                    </div>
                                </div> 
                                <div class="causes-content">
                                    <a href="Consultation.php">Support our free treatment and care.</a>
                                    <p>Our unwavering commitment to providing free treatment stems from our belief that healthcare is a fundamental human right that should not be determined by socio-economic status.

                                    </p>
                                </div>
                                <div class="causes-bar">
                                    <div id="skills-section">
                                        <div class="progress">
                                            <div class="progress-bar" data-progress="100">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="causes-bar-info">
                                    <div class="header-link-btn"><a href="#"  class="btn-1 btn-2">Join Our Sponsors<span></span></a></div>


                                   </div>
                               </div>

                            </div>
                            <div class="causes-card">
                                <div class="causes-image-container">
                                    <div class="causes-image-overlay wow"></div>
                                    <div class="causes-image">
                                        <a href="causes.html"><img src="{{ asset('frontendassets/assets/images/gallery/causes-03x.png') }}" alt="img"></a>
                                        <div class="header-link-btn"><a href="causes.html" class="btn-1">Health Training<span></span></a></div>
                                    </div>
                                </div> 
                                <div class="causes-content">
                                    <a href="Health-Training.php">Taming health ignorance through training.</a>
                                    <p>we are committed to offering health training to individuals residing in underserved communities across the globe.</p>
                                </div>
                                <div class="causes-bar">
                                    <div id="skills-section-one">
                                        <div class="progress">
                                            <div class="progress-bar" data-progress="100">
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                   <div class="header-link-btn"><a href="#"  class="btn-1 btn-2">Join Our Sponsors<span></span></a></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="causes-details-card">
                            <div class="causes-details-title">
                                <h3>Consultation</h3>
                            </div>
                            <div class="causes-categories">
                                <ul>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                         Surgery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="causes.html"><i class="flaticon-angle-right"></i> 
                                            Disease Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                             Medication Education
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                            Mental Health
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                            Wound Care
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                            Blood Sugar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="causes-details-card" style="display:none;">
                            <div class="causes-details-title">
                                <h3>Upcoming Outreach</h3>
                            </div>
                            <div class="causes-categories">
                                <ul>
                                    <li>
                                        <a href="events.php"><i class="flaticon-angle-right"></i>
                                            April 29th, 2024
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i> 
                                           April 29th, 2024
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                            April 29th, 2024
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="flaticon-angle-right"></i>
                                            April 29th, 2024
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                           April 29th, 2024
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                           April 29th, 2024
                                        </a>
                                    </li>
                                </ul>
                            
                            <div class="header-link-btn"><a href="#"  class="btn-1 btn-2">Volunteer Now<span></span></a></div></div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="causes-card">
                            <div class="causes-image-container cause-details-container">
                                <div class="causes-image-overlay wow"></div>
                                <div class="causes-image cause-details-image">
                                    <img src="{{ asset('frontendassets/assets/images/gallery/causes-11.png') }}" alt="img">
                                <div class="header-link-btn"><a href="#" class="btn-1">Medical Consultation<span></span></a></div>
                                </div>
                            </div> 
                        </div>

                        <div class="causes-card" style="display:none;">
                            <div class="causes-content causes-details-content">
                                <h5>Free consultation for all</h5>
                            </div>
                            <div class="causes-bar causes-bar-3 causes-bar-details">
                                <!--<div id="skills-section-two">
                                    <div class="progress">
                                        <div class="progress-bar" data-progress="80">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>-->
                               
                            </div>
                            <div class="causes-card-form" style="display:none;">
                                <h4>Select the amount:</h4>
                                <div class="causes-card-form-input">
                                    <ul>
                                        <li><input type="radio" name="dolor" checked><span>$ 10</span></li>
                                        <li><input type="radio" name="dolor"><span>$ 50</span></li>
                                        <li><input type="radio" name="dolor"><span>$ 100</span></li>
                                    </ul>
                                </div>
                                <h4>Or enter other amount(optional)</h4>
                                <div class="news_letter causes-form-group">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="$10" required="">
                                        <div class="news-form-btn donate-lg-btn">
                                            <button type="submit" class="news_letter_btn"></button>
                                            <a href="javascript:void(0);" class="btn-1 btn-2">DONATE NOW<span></span></a>
                                        </div> 
                                    </div>
                                </div>   
                            </div>
                        </div>

                        <div class="main-causes-content">
                            <p>Shalom Global Medical Mission, is dedicated to offering essential medical consultations to individuals in underserved communities. Our primary objective is to ensure equitable access to healthcare services, regardless of socio-economic status.</p>

                            <p>Our consultations are conducted with empathy, dignity, and a focus on empowering individuals to make informed decisions regarding their health. By directly engaging with underserved communities, our aim is to promote wellness, prevent illness, and enhance overall health outcomes.</p>
                            <div class="causes-details-title">
                                <h5>Our Approach</h5>
                            </div>
                            <p>Through the collaborative efforts of our compassionate team of healthcare professionals and volunteers, we deliver tailored medical consultations that address the specific needs of each person. Whether it involves addressing health concerns, providing preventive care guidance, or offering support for managing chronic conditions, we are committed to delivering comprehensive and empathetic care to those facing obstacles in accessing healthcare.</p>

                            <p></p>
                        </div>
                        <div class="main-causes-content">
                            <div class="main-causes-content-img">
                                <a href="causes.html"><img src="{{ asset('frontendassets/assets/images/gallery/causes-11.1.png') }}" alt="img"></a>
                                <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/causes-11.2.png') }}" alt="img"></a>
                            </div>
                        </div>
                        <div class="main-causes-content">
                            <p>Through our efforts, we aspire to make a meaningful and lasting impact in the lives of individuals and families in underserved communities. By ensuring access to quality healthcare, we believe we can contribute to building healthier and more equitable communities where everyone has the opportunity to thrive.
                            <p></p>
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        <!-- causes -->

    @endsection