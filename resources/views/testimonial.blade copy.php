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
                            <img src="{{ asset('frontendassets/assets/images/team/t1.png') }}" alt="img">
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
                        <h6>Bessie Cooper</h6>
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
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <img src="{{ asset('frontendassets/assets/images/team/t2.png') }}" alt="img">
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
                        <h6>Annette Black</h6>
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
                            <img src="{{ asset('frontendassets/assets/images/team/t3.png') }}" alt="img">
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
                        <h6>Guy Hawkins</h6>
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
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <img src="{{ asset('frontendassets/assets/images/team/t4.png') }}" alt="img">
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
                        <h6>Floyd Miles</h6>
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
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="testimonial-wrapper wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="testimonial-main-image">
                            <img src="{{ asset('frontendassets/assets/images/team/t5.png') }}" alt="img">
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
                        <h6>Cody Fisher</h6>
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
                            <img src="{{ asset('frontendassets/assets/images/team/t6.png') }}" alt="img">
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
                        <h6>Mamnun Khan</h6>
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
                </div>
            </div>
        </div>
       </section>
       <!-- testimonial container -->
    @endsection