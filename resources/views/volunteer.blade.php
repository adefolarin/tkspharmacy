@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" style="background-image: url('assets/images/banner/common-banner-bg.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Become a Volunteer</h3>
                            <a href="{{ url('/') }}">Home </a>/
                            <span>Become a Volunteer</span>
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
            <form enctype="multipart/form-data" method="post" action="{{ url('volunteer') }}">@csrf
            <div class="container">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Become A Volunteer</h5>
                        </div>
                    </div>
                  
                    <div class="col-xl-6"> 
                            <h5><label>Full Name</label></h5>               
                            <input type="text" name="volunteers_name" class="contuct-us-input" placeholder="Your Name" required>                  
                    </div>
                    <div class="col-xl-6">  
                            <h5><label>Email</label></h5>               
                            <input type="email" name="volunteers_email" class="contuct-us-input" placeholder="Your Email" required>                     
                    </div>
                    <div class="col-md-6">
                            <h5><label>Phone Number</label></h5>
                            <input type="number" name="volunteers_pnum" class="contuct-us-input" placeholder="Phone Number" required>                       
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Mailing Address</label></h5>              
                            <input type="text" name="volunteers_mailaddress" class="contuct-us-input" placeholder="Mailing Address" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Availability</label></h5>              
                            <input type="text" name="volunteers_time" class="contuct-us-input" placeholder="Days and Time For Volunteering" required id="voldatetime">                 
                    </div>
                    
                    <div class="col-md-6">  
                            <h5><label>Skills</label></h5>              
                            <input type="text" name="volunteers_skill" class="contuct-us-input" placeholder="Relevant Skills" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Qualifications</label></h5>              
                            <input type="text" name="volunteers_qual" class="contuct-us-input" placeholder="Qualifications" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Volunteer Experience</label></h5>              
                            <input type="text" name="volunteers_exp" class="contuct-us-input" placeholder="Experience" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Language Spoken</label></h5>              
                            <input type="text" name="volunteers_lang" class="contuct-us-input" placeholder="Language" required>                    
                    </div> 
                    <div class="col-md-6">  
                            <h5><label>Area of Interest</label></h5>              
                            <input type="text" name="volunteers_interest" class="contuct-us-input" placeholder="Specific areas of healthcare or medical type of outreach" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Availability for Training</label></h5>              
                            <input type="text" name="volunteers_training" class="contuct-us-input" placeholder="Indicate willingness and avaialability to attend training sessions or orientation" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Emergency Contact Name</label></h5>              
                            <input type="text" name="volunteers_emergcontact" class="contuct-us-input" placeholder="Emergency Contact Name" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Emergency Contact Relationship</label></h5>              
                            <input type="text" name="volunteers_emergrel" class="contuct-us-input" placeholder="What is the relationship between you and the conctact person" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Emergency Contact Information</label></h5>              
                            <input type="text" name="volunteers_emergcontactinfo" class="contuct-us-input" placeholder="Emergency Contact Information" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Medical Information</label></h5>              
                            <input type="text" name="volunteers_medinfo" class="contuct-us-input" placeholder="Any relevant medical condition or allergies that organiztion should be aware of" required>                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Reference</label></h5>              
                            <input type="text" name="volunteers_ref" class="contuct-us-input" placeholder="Reference" required>                    
                    </div>
                    <div class="col-md-12">  
                            <h5><label>Background Check(Consent to the organization to conduct a background check if required)</label></h5> 
                            <select name="volunteers_check" class="contuct-us-input" required>
                              <option value=""></option>
                              <option value="Yes">Yes I Consent</option>
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