@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="common-banner" 
        style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common-banner-title">
                            <h3>Report A Condition</h3>
                            <a href="#">Home </a>/
                            <span>Report A Condition</span>
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
            <form enctype="multipart/form-data" method="post" action="{{ url('condition') }}">@csrf
            <div class="container">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Report A Condition</h5>
                        </div>
                    </div>
                  
                    <div class="col-xl-6"> 
                            <h5><label>Full Name</label></h5>               
                            <input type="text" name="conditions_name" class="contuct-us-input" placeholder="Your Name" required>                  
                    </div>
                    <div class="col-xl-6">  
                            <h5><label>Email</label></h5>               
                            <input type="email" name="conditions_email" class="contuct-us-input" placeholder="Your Email" required>                     
                    </div>
                    <div class="col-md-6">
                            <h5><label>Phone Number</label></h5>
                            <input type="number" name="conditions_pnum" class="contuct-us-input" placeholder="Phone Number" required>                       
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Address</label></h5>              
                            <input type="text" name="conditions_address" class="contuct-us-input" placeholder="Mailing Address" required>                    
                    </div>
                    <div class="col-md-12">  
                            <h5><label>Type Of Medical Condition</label></h5> 
                            <select name="conditions_type" class="contuct-us-input" required>
                              <option value=""></option>
                              <option value="Chronic">Chronic</option>
                              <option value="Acute">Acute</option>
                              <option value="Life-Threatening">Life-Threatening</option>
                              <option value="Other">Other</option>
                            </select>                                
                    </div>
                    <div class="col-md-12">
                         <h5><label>Description of Medical Condition</label></h5> 
                            <textarea name="conditions_desc" class="contuct-us-input contuct-us-textarea"></textarea>
   
                    </div>
                    <div class="col-md-12">  
                            <h5><label>Type Of Treatment</label></h5> 
                            <select name="conditions_treatment" class="contuct-us-input" required>
                              <option value=""></option>
                              <option value="Surgery">Surgery</option>
                              <option value="Medication">Medication</option>
                              <option value="Therapy">Therapy</option>
                              <option value="Other">Other</option>
                            </select>                                
                    </div>
                    <div class="col-md-12">  
                            <h5><label>Estimated Cost of Treatment</label></h5>              
                            <input type="text" name="conditions_treatmentcost" class="contuct-us-input" placeholder="Estimated Cost of Treatment" required>                    
                    </div>
                    <div class="col-md-12">  
                            <h5><label>Reason For Fundraising</label></h5> 
                            <select name="conditions_fundreason" class="contuct-us-input">
                              <option value=""></option>
                              <option value="Medical Bills">Medical Bills</option>
                              <option value="Travel Expenses">Travel Expenses</option>
                              <option value="Other">Other</option>
                            </select>                                
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Fundraising Goal</label></h5>              
                            <input type="text" name="conditions_fundgoal" class="contuct-us-input" placeholder="Fundraising Goal">                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Fundraising Deadline</label></h5>              
                            <input 
                            name="conditions_funddeadline" class="contuct-us-input"
                            id="funddate">
                      
                    </div>
                    
                    <div class="col-md-6">  
                            <h5><label>Medical Report</label></h5>              
                            <input type="file" name="conditions_meddoc" class="contuct-us-input">                    
                    </div>
                    <div class="col-md-6">  
                            <h5><label>Financial Document</label></h5>              
                            <input type="file" name="conditions_findoc" class="contuct-us-input">                    
                    </div>
                    <!--<div class="col-md-6">  
                            <h5><label>I consent to the use of my personal information for the purpose of treatment support or fundraising</label></h5>              
                            <input type="checkbox" name="consent" class="contuct-us-input"  required onclick="consent();" required> 
                            
                            <input type="text" name="conditions_consent" class="contuct-us-input"  required id="conditions_consent" required>  
                    </div>-->
                    <div class="col-md-12">  
                            <h5><label>Consent to the use of your personal information for the purpose of treatment support or fundraising</label></h5> 
                            <select name="conditions_consent" class="contuct-us-input" required>
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