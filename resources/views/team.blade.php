@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Volunteers</h3>
                            <a href="{{ url('/') }}">Home </a>/
                            <span> Volunteers</span>
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


        <!-- team -->
        <section class="team-container main-team-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="volunteers-content-inner">
                                <div class="volunteers-content-wrapper">
                                    <div class="volunteers-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/v1.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="volunteers-info event-details-volunteer-info">
                                    <a href="#" class="volunteers-info-link">Wade Warren</a>
                                    <p>Volunteers</p>
                                    <div class="volunteers-media">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="volunteers-content-inner">
                                <div class="volunteers-content-wrapper">
                                    <div class="volunteers-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/v2.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="volunteers-info event-details-volunteer-info">
                                    <a href="#" class="volunteers-info-link">Courtney Henry</a>
                                    <p>Volunteers</p>
                                    <div class="volunteers-media">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms"  data-wow-duration="1500ms">
                            <div class="volunteers-content-inner">
                                <div class="volunteers-content-wrapper">
                                    <div class="volunteers-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/v3.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="volunteers-info event-details-volunteer-info">
                                    <a href="#" class="volunteers-info-link">Eleanor Pena</a>
                                    <p>Volunteers</p>
                                    <div class="volunteers-media">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="volunteers-content-inner">
                                <div class="volunteers-content-wrapper">
                                    <div class="volunteers-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/v4.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="volunteers-info event-details-volunteer-info">
                                    <a href="#" class="volunteers-info-link">Bessie Cooper</a>
                                    <p>Volunteers</p>
                                    <div class="volunteers-media">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="volunteers-content-inner">
                                <div class="volunteers-content-wrapper">
                                    <div class="volunteers-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/v5.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="volunteers-info event-details-volunteer-info">
                                    <a href="#" class="volunteers-info-link">Wade Warren</a>
                                    <p>Volunteers</p>
                                    <div class="volunteers-media">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="volunteers-content wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="volunteers-content-inner">
                                <div class="volunteers-content-wrapper">
                                    <div class="volunteers-image">
                                        <a href="#"><img src="{{ asset('frontendassets/assets/images/gallery/v6.jpg') }}" alt="image"></a>
                                    </div>
                                </div>
                                <div class="volunteers-info event-details-volunteer-info">
                                    <a href="#" class="volunteers-info-link">Mamnun khan</a>
                                    <p>Volunteers</p>
                                    <div class="volunteers-media">
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team -->

        <!-- map -->

    @endsection