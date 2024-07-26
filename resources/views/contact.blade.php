@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section>
        <!-- hero-about-area start -->
        <div class="hero-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero-about-text text-center">
                            <h2>Contact us</h2>
                            <h4><span>Home / </span><a href="#">Contact us</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- hero-about-area End -->
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




    <!--contuct-area-start-->
    <div class="contuct-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-form-area">
                        <form name="frmContact" id="frmContact" action="{{ url('/contact') }}" method="post">
						<input type="hidden" name="frmCont" name="frmCont" value="frmCont" />
                            <h3>Get In touch for any kind of Information</h3>
                            <label>Full Name</label>
                            <input type="text" placeholder="Full Name" name="contacts_name" id="contacts_name" value="" required>
                            <label>Email</label>
                            <input type="email" placeholder="Email" name="contacts_email" id="contacts_emai" value="" required>
                            <label>Phone Number</label>
                            <input type="text" placeholder="Phone Number" name="contacts_pnum" id="contacts_pnum" value="" required>
                            <label>Subject</label>
                            <input type="text" placeholder="Subject" name="contacts_subject" id="contacts_subject" value="" required>
                            <label>Subject</label>
                            <textarea cols="30" rows="10" placeholder="Message" name="contacts_message" id="contacts_message" required></textarea>
                            <button class="team-1" type="submit">Send</button>
                        </form>
                    </div>
                </div>
                                <div class="col-lg-3">
                    <div class="contect-location">
                        <div class="contact-fl">
                            <address>
                                <div class="single-contact">
                                    <i class="icofont-map-pins"></i>
                                    <p>4809 Argonne Street,  <br>
                                        Suite 155, Denver CO 80249.</p>
                                </div>
                                <div class="single-contact">
                                    <i class="icofont-envelope"></i>
                                    <p><a href="mailto:info@tksrx.com">alice@tksrx.com</a><br>
                                        <a href="mailto:tksrxpp@gmail.com">tksrxpp@gmail.com</a></p>
                                </div>
                                <div class="single-contact">
                                    <i class="icofont-mobile-phone"></i>
                                    <p><a href="tel:720 583 2110"><b>Phone</b>: 720 583 2110
                                    </a>
                                    <br>
                                    <a href=" fax:0123456789.html"> <b>Fax</b>: 720 583 0326</a></p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contuct-area-end-->

    @endsection