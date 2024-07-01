@extends('frontendlayout.layout')

@section('content')

        <!-- common banner -->
        <section class="common-banner" 
        style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Our Gallery</h3>
                            <a href="index.html">Home </a>/
                            <span> Gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- common banner -->

        <!-- gellary -->
        <div class="main-gallery home-threee-gallery">
            <div class="container">
                <div class="row">
                @foreach($galleries as $gallery) 
                    <div class="col-xl-4 col-md-6">
                        <div class="gallery-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="team-content-wrapper">
                                <div class="team-image">
                                    <img src="{{ asset('admin/img/galleries/'.$gallery->galleries_file) }}" alt="{{ $gallery->galleries_title }}">
                                    <div class="team-icon team3-icon">
                                        <ul>
                                            <li><a href="{{ asset('admin/img/galleries/'.$gallery->galleries_file) }}" class="team-icon-plus lightbox-image" data-fancybox="gallery"><i class="flaticon-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- gellary -->

@endsection