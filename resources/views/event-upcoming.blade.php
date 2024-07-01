@extends('frontendlayout.layout')

@section('content')
       
       <!-- common banner -->
        <section class="common-banner" 
        style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Events</h3>
                            <a href="/">Home </a>/
                            <span> Events</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- common banner -->

         <!-- events -->
         <div class="blog events event-page">
            <div class="container">
                <div class="row">
                    <div class="event-carousel owl-carousel owl-theme">
                    @foreach($events as $event)  
                        <div class="causes-card event-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="causes-image blog-image event-image">
                                <img src="{{ asset('admin/img/events/'.$event->events_file) }}" alt="img">
                            </div>
                            <div class="blog-contant event-content">
                                <div class="header-link-btn">
                                <a href="javascript:void(0);" class="btn-1">
                                    {{ date("F j Y", strtotime($event->events_startdate)) }}
                                <span></span>
                               </a>
                               </div>
                                <div class="comments">
                                    <ul>
                                        <li><i class="fa fa-clock"></i> 
                                       <span> 
                                       {{ date("h:ia", strtotime($event->events_startdate)) }}
                                       </span>
                                       </li>
                                        <li><i class="flaticon-pin"></i> <span> {{ ucwords($event->events_venue) }}</span></li>
                                    </ul>
                                </div>
                                <a href="{{ url('/event/'.$event->events_id) }}" class="hover-content">{{ ucwords($event->events_title) }}</a>
                                <div class="blog-btn event-btn opacity-btn">
                                    <a href="{{ url('/event/'.$event->events_id) }}">Read More <i class="flaticon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    </div>
                </div>
            </div>
        </div>
        <!-- events -->

    @endsection