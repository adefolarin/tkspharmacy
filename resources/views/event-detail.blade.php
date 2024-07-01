@extends('frontendlayout.layout')

@section('content')
        
        <!-- common banner -->
        <section class="common-banner" 
        style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Events Details</h3>
                            <a href="#">Home </a>/
                            <span> Events Details</span>
                        </div>
                    </div>
                </div>
            </div>
            @if($errors->any())
                    <div class="alert alert-danger" style="margin-top:100px;">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:100px;">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:100px;">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
    
        </section>
        <!-- common banner -->

        <!-- causes -->
        <section class="causes causes-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="causes-details-card event-details-card">
                            <div class="causes-details-title ">
                                <h3>Registration form</h3>
                            </div>
                            <div class="causes-categories">
                                <div class="event-registration-form">
                                <form method="post" action="{{ url('event/' . $eventone->events_id) }}" enctype="multipart/form-data">@csrf
                                       <input type="hidden" name="eventregs_event" required value="{{ $eventone['events_id'] }}">
                                        <input type="text" placeholder="Your Name" name="eventregs_name" required>
                                        <input type="email" placeholder="Your Email" name="eventregs_email" required>
                                        <input type="text" placeholder="Your Phone Number" name="eventregs_pnum" required>
                                        <br></br>
                                        <label>Time of Availability</label>
                                        <select class="contuct-us-input" name="eventregs_availtime">
                                            @foreach($eventschedulers as $eventscheduler) 
                                              <option value="{{$eventscheduler['eventschedulers_time']}}">{{$eventscheduler['eventschedulers_time']}}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn-1">Join <span></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="causes-details-card blog events event-details-card">
                            <div class="causes-details-title event-rilated-title">
                                <h3>Related events</h3>
                            </div>
                            <div class="causes-carousel causes-categories p-top owl-carousel owl-theme">
                              @foreach($events as $event)  
                                <div class="causes-card event-card  wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="causes-image event-image event-details-image">
                                        <img src="{{ asset('admin/img/events/'.$event->events_file) }}" alt="img">
                                    </div>
                                    <div class="log-contant event-content event-details-content">
                                        <div class="header-link-btn"><a href="javascript:void(0);" class="btn-1">{{ date("F j Y", strtotime($event->events_startdate)) }}<span></span></a></div>
                                        <div class="comments">
                                            <ul>
                                                <li><i class="flaticon-user"></i> <span> {{ date("h:ia", strtotime($event->events_startdate)) }}</span></li>
                                                <li><i class="flaticon-bubble-chat"></i> <span> {{ ucwords($event->events_venue) }}</span></li>
                                            </ul>
                                        </div>
                                        <a href="{{ url('/event/'.$event->events_id) }}" class="hover-content">{{ ucwords($event->events_title) }}</a>
                                        <div class="blog-btn event-btn opacity-btn">
                                            <a href="blog-grid.html">Read More <i class="flaticon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="causes-details-card" style="display:none;">
                            <div class="causes-details-title">
                                <h3>{{ $eventone['events_venue'] }}</h3>
                            </div>
                            <div class="causes-categories" style="display:none;">
                                <div class="event-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424151.14024341316!2d150.3576841715588!3d-33.84634200066065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW%2C%20Australia!5e0!3m2!1sen!2sbd!4v1677643464664!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="event-card">
                            <div class="causes-image-container cause-details-container event-details-container">
                                <div class="causes-image-overlay wow"></div>
                                <div class="causes-image cause-details-image">
                                    <img src="{{ asset('admin/img/events/'.$eventone['events_file']) }}" alt="img">
                                    <div class="day-7">
                                        <h3>{{ date("j", strtotime($event->events_startdate)) }}</h3>
                                        <h6>{{ date("F Y", strtotime($event->events_startdate)) }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-card">
                            <div class="causes-bar-details">
                                <div class="causes-bar-info event-details-bar-info">
                                    <p><i class="fa fa-clock"></i> {{ date("h:ia", strtotime($event->events_startdate)) }} - {{ date("h:ia", strtotime($event->events_enddate)) }}</p>
                                    <p><i class="flaticon-pin"></i>
                                    {{ $event->events_address }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-causes-content">
                            <div class="causes-details-title">
                                <h3>{{ $event->events_title }}</h3>
                            </div>
                            <p>
                              {{  $event->events_desc }}
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- causes -->

@endsection