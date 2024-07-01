@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
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
                    <strong>Cancelled: </strong> {{ Session::get('error_message') }}
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

              <!-- common banner -->
              <section class="common-banner" 
              style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">


            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Donate Now</h3>
                            <a href="index.html">Home </a>/
                            <span> Donate Now</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- common banner -->

        <!-- blog dtails -->
        <section class="causes causes-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4" style="display:none";>
                        <div class="causes-details-card event-details-card">
                            <div class="blog-details-left-form">
                                <input type="search" name="search" placeholder="Search">
                                <i class="flaticon-search-interface-symbol"></i>
                            </div>
                        </div>
                        
                        <div class="causes-details-card">
                            <div class="causes-details-title">
                                <h3>Archives</h3>
                            </div>
                            <div class="causes-categories">
                                <ul>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                            August 2020
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i> 
                                            November 2020
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                            January 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                            March 2018
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                            August 2022
                                        </a>
                                    </li>
                                    <li>
                                        <a href="error.html"><i class="flaticon-angle-right"></i>
                                            November 2021
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="causes-details-card">
                            <div class="causes-details-title">
                                <h3>Recent Article</h3>
                            </div>
                            <div class="causes-categories blog-recent-categories">
                               <div class="blog-recent">
                                    <div class="blog-recent-image">
                                        <img src="assets/images/gallery/bd1.png" alt="img">
                                    </div>
                                    <div class="blog-recent-info">
                                        <a href="blog-details.html">Project Concepts or Related Queries</a>
                                        <p>Apr 17, 2022</p>
                                    </div>
                               </div>
                               <div class="blog-recent">
                                    <div class="blog-recent-image">
                                        <img src="assets/images/gallery/bd2.png" alt="img">
                                    </div>
                                    <div class="blog-recent-info">
                                        <a href="blog-details.html">To Improve Your Express Application</a>
                                        <p>Apr 17, 2022</p>
                                    </div>
                                </div>
                                <div class="blog-recent">
                                    <div class="blog-recent-image">
                                        <img src="assets/images/gallery/bd3.png" alt="img">
                                    </div>
                                    <div class="blog-recent-info">
                                        <a href="blog-details.html">Ensure that Copies of Documents</a>
                                        <p>Apr 17, 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                           <div class="donate-card-title">
                                
                                  @if(!Auth::guard('sponsor')->user())
                                    <h5>You Are Donating As Guest</h5>
                                    <span>OR</span>
                                    <h5> Login <a href="{{ url('sponsorlogin') }}" class="btn-1">Here</a> to donate as a sponsor</h5>
                                  @else
                                    <h5>You Are Donating As A Sponsor</h5>
                                  @endif
                                
                                
                                
                            </div>
                        <form method="post" action="{{ url('donation-paypal') }}">@csrf
                        <div class="donate-card">
                        @if(!Auth::guard('sponsor')->user())
                            <h5 style="display:block;">Select amount:</h5>
                            <div class="causes-card-form-input" style="display:block;">
                                <ul>
                                    <li><input type="radio" name="dolor" id="donations_50" 
                                    onclick="myFunction()"><span>$ 50</span></li>
                                    <li><input type="radio" name="dolor" id="donations_100"
                                    onclick="myFunction()"><span>$ 100</span></li>
                                    <li><input type="radio" name="dolor" id="donations_500"
                                    onclick="myFunction()"><span>$ 500</span></li>
                                    <li><input type="radio" name="dolor" id="donations_1000"
                                    onclick="myFunction()"><span>$ 1000</span></li>
                                </ul>
                            </div>
                         @endif
                            <div class="donate-card">
                            
                            <div class="row">
                               @if(!Auth::guard('sponsor')->user())
                                <div class="col-xl-6" style="display:none;">      
                                    <input type="text" name="donations_type" class="contuct-us-input" value="Guest">
                                </div>
                                <div class="col-xl-6">                            
                                   <input type="text" name="donations_name" class="contuct-us-input" placeholder="Your Full Name" required>
                                </div>
                                <div class="col-xl-6">
                                   <input type="email" name="donations_email" class="contuct-us-input" placeholder="Your Email" required>
                                </div>
                               @else
                               <div class="col-xl-6" style="display:none;">      
                                    <input type="text" name="donations_type" class="contuct-us-input" value="Sponsor" required>
                                </div>
                               <div class="col-xl-6">                            
                                   <input type="text" name="donations_name" class="contuct-us-input" value="{{Auth::guard('sponsor')->user()->sponsors_name}}" required readonly>
                                </div>
                                <div class="col-xl-6">
                                   <input type="email" name="donations_email" class="contuct-us-input" 
                                   value="{{Auth::guard('sponsor')->user()->sponsors_email}}" required readonly>
                                </div>
                               @endif
                                <div class="col-xl-6" style="display:none;">      
                                        <input type="text" name="donations_itemname" class="contuct-us-input" value="Donation" required>
                                </div>
                                <div class="col-xl-6" style="display:none;">      
                                        <input type="text" name="donations_pnum" class="contuct-us-input" placeholder="Phone Number" value="NA" required>
                                </div>
                                <div class="col-xl-12" style="display: none;">
                                    <div class="contact-us-btn donate-btn">
                                      <input type="submit" class="btn-1">Pay<span></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <h5>(Optional)Enter Other Amount($)</h5>

                            <div class="news_letter causes-form-group">
                                <div class="form-group">
                                  @if(!Auth::guard('sponsor')->user())
                                    <input type="text" name="donations_amount" placeholder="Enter The Donation Amount" class="form-control" style="padding:17px" required id="donations_amount">
                                  @else
                                    <input type="text" name="donations_amount" class="form-control" style="padding:17px" required value="{{Auth::guard('sponsor')->user()->sponsors_amount}}" readonly id="donations_amount">
                                  @endif

                                    <div class="news-form-btn donate-lg-btn">
                                      
                                        <input type="submit" class="btn-1 btn-2" value="Donate Now">
                                    </div> 
                                </div>
                            </div>  
                        </div>

                        </form>
                        

                        <div class="donate-card" style="display:none;">
                             <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">CREDIT CARD</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PAYPAL</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">OFFLINE DONATION</button>
                                    </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <p><strong>Note:</strong> Sucure And Easy Payment</p>
                                        <form class="donate-payment-form">
                                            <input type="number" name="Number" placeholder="Card number">
                                            <i class="fa fa-id-card"></i>
                                            <div class="mm-yy">
                                                MM/YY/CVC
                                            </div>
                                        </form>
                                        <button class="btn-1">Submit Payment <span></span></button>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <p><strong>Note:</strong> Sucure And Easy Payment</p>
                                        <div class="cash">
                                            <a href="#"><img src="assets/images/brand/paypal.jpg" alt="card"></a>
                                        </div>
                                        <form class="donate-payment-form">
                                            <input type="number" name="Number" placeholder="Payple number">
                                            <i class="fa fa-id-card"></i>
                                            <div class="mm-yy">
                                                MM/YY/CVC
                                            </div>
                                        </form>
                                        <div class="donate-btn">
                                            <button class="btn-1 ">Submit Payment <span></span></button>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <p><strong>Note:</strong> Sucure And Easy Payment</p>
                                        <div class="cash">
                                            <a href="#"><img src="assets/images/brand/master-card.png" alt="card"></a>
                                            <a href="#"><img src="assets/images/brand/rocket.png" alt="card"></a>
                                            <a href="tel:+8801772255560"><img src="assets/images/brand/bkash.png" alt="card"></a>
                                            <a href="#"><img src="assets/images/brand/nagod.png" alt="card"></a>
                                        </div>
                                        <button class="btn-1">Submit Payment <span></span></button>
                                    </div>
                              </div>
                        </div>
                            
                    </div>   
                </div>
            </div>
        </section>
        <!-- causes -->


        <script>
            function myFunction() {
                if(document.getElementById("donations_50").checked === true) {
                    document.getElementById("donations_amount").value = 50;
                }
                if(document.getElementById("donations_100").checked === true) {
                    document.getElementById("donations_amount").value = 100;
                }
                if(document.getElementById("donations_500").checked === true) {
                    document.getElementById("donations_amount").value = 500;
                }
                if(document.getElementById("donations_1000").checked === true) {
                    document.getElementById("donations_amount").value = 1000;
                }
            }
            
           
        </script>



    @endsection