@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" 
        style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Request For a Community</h3>
                            <a href="#">Home </a>/
                            <span>Request For a Community</span>
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

        <!-- contact us -->
        <section class="contact-us">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-02.png);"></div>
            <form enctype="multipart/form-data" method="post" action="{{ url('community') }}">@csrf
            <div class="container">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Request For a Community</h5>
                        </div>
                    </div>
                  
                    <div class="col-xl-6"> 
                            <h5><label>Full Name</label></h5>               
                            <input type="text" name="communities_name" class="contuct-us-input" placeholder="Your Name" required>                  
                    </div>
                    <div class="col-xl-6">  
                            <h5><label>Email</label></h5>               
                            <input type="email" name="communities_email" class="contuct-us-input" placeholder="Your Email" required>                     
                    </div>
                    <div class="col-md-6">
                            <h5><label>Phone Number</label></h5>
                            <input type="number" name="communities_pnum" class="contuct-us-input" placeholder="Phone Number" required>                       
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Organization / Community Name</label></h5>              
                            <input type="text" name="communities_orgname" class="contuct-us-input" placeholder="Organization / Community Name" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Country</label></h5>              
                            <input type="text" name="communities_country" class="contuct-us-input" placeholder="Country" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>State / Province</label></h5>              
                            <input type="text" name="communities_state" class="contuct-us-input" placeholder="State / Province" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>City / Town</label></h5>              
                            <input type="text" name="communities_city" class="contuct-us-input" placeholder="City / Town" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Address</label></h5>              
                            <input type="text" name="communities_address" class="contuct-us-input" placeholder="Address" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Language Spoken</label></h5>              
                            <input type="text" name="communities_lang" class="contuct-us-input" placeholder="Language" required>                    
                    </div> 
                    <div class="col-md-6">  
                            <h5><label>Preferred Date For Outreach</label></h5>              
                            <input type="text" name="communities_outreachdate" class="contuct-us-input" required id="commdate">                    
                    </div>
                    <div class="col-md-12"> 
                            <h5><label>Time</label></h5> 
                            <select name="communities_outreachtime" class="contuct-us-input" required>
                              <option value="Select Time For the Outreach"></option>
                              <option value="Morning">Morning</option>
                              <option value="Afternoon">Aftrernoon</option>
                              <option value="Evening">Evening</option>
                            </select> 
                    </div>
                    <div class="col-md-12">  
                            <h5><label>Special Requirements or Considerations</label></h5>              
                            <input type="text" name="communities_req" class="contuct-us-input" placeholder="Special Requirements or Considerations" required>                    
                    </div>
                    <div class="col-md-12">  
                            <h5><label>How did you hear about us?</label></h5> 
                            <select name="communities_how" class="contuct-us-input" required>
                              <option value=""></option>
                              <option value="Social Media">Social Media</option>
                              <option value="Referral">Referral</option>
                              <option value="Event">Event</option>
                              <option value="Other">Other</option>
                            </select>                                
                    </div>
                    <div class="col-xl-12">
                        <div class="contact-us-btn">                   
                            <button type="submit" class="btn-1">Submit <span></span></button> 
                        </div>
                    </div>
                  
                </div>
            </div>
            </form>
        </section>



    @endsection