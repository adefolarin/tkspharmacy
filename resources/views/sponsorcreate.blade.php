@extends('frontendlayout.layout')

@section('content')
     <!-- common banner -->
        <section class="">
           
        </section>
        <!-- common banner -->

        <!-- contact us -->
        <section class="contact-us" style="background-color: #f8f8f8;">
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
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left:50px;margin-right:50px;padding:30px;">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-left:50px;margin-right:50px;padding:30px;">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
        
            <div class="pattern-layer" style="background-image: url('frontendassets/assets/images/shape/shape-02.png')"></div>
            <form enctype="multipart/form-data" method="post" action="{{ url('sponsorcreate') }}">@csrf
            <div class="container">
                <div class="row">
 
                    <div class="col-xl-12">
                        <div class="align-title">
                            <h5>Become a Sponsor</h5>
                        </div>
                    </div>
                  
                    <div class="col-xl-6"> 
                            <h5><label>Full Name</label></h5>               
                            <input type="text" name="sponsors_name" class="contuct-us-input" placeholder="Your Name" required>                  
                    </div>
                    <div class="col-xl-6">  
                            <h5><label>Email</label></h5>               
                            <input type="email" name="sponsors_email" class="contuct-us-input" placeholder="Your Email" required>                     
                    </div>
                    <div class="col-md-12">
                            <h5><label>Profession</label></h5>
                            <input type="text" name="sponsors_profession" class="contuct-us-input" placeholder="Profession" required>                       
                    </div>
                    <div class="col-md-12"> 
                            <h5><label>Type</label></h5> 
                            <select name="sponsors_type" class="contuct-us-input" required 
                            style="background-color:#fff;">
                              <option value="Select Sponsor Type"></option>
                              <option value="Outreach">Outreach</option>
                              <option value="Surgery Treatment">Surgery Treatment</option>
                              <option value="Medical Supplies">Medical Supplies</option>
                            </select> 
                    </div>
                    <div class="col-md-12"> 
                            <h5><label>Period</label></h5> 
                            <select name="sponsors_period" class="contuct-us-input" required>
                              <option value="Select Sponsor Period"></option>
                              <option value="Monthly">Monthly</option>
                              <option value="Yearly">Yearly</option>
                              <option value="One Off">One Off</option>
                              <option value="Every Time">Every Time</option>
                            </select> 
                    </div>
                    <div class="col-md-12">
                          <h5 style="display:block;">Select amount</h5><br>
                          <div class="donate-card">
                            <div class="causes-card-form-input" style="display:block;">
                                <ul>
                                    <li><input type="radio" name="dolor" id="donations_50" 
                                    onclick="myFunction2()"><span>$ 50</span></li>
                                    <li><input type="radio" name="dolor" id="donations_100"
                                    onclick="myFunction2()"><span>$ 100</span></li>
                                    <li><input type="radio" name="dolor" id="donations_500"
                                    onclick="myFunction2()"><span>$ 500</span></li>
                                    <li><input type="radio" name="dolor" id="donations_1000"
                                    onclick="myFunction2()"><span>$ 1000</span></li>
                                </ul>
                            </div>
                            <h6><label>Enter an Amount If It is different from the one selected above</label></h6>
                            <input type="text" name="sponsors_amount" class="contuct-us-input" placeholder="Amount" required id="donations_amount2">  
                           
                           
                                             
                    </div>
                    <div class="col-md-12">
                            <h5><label>Password</label></h5>
                            <input type="password" name="sponsors_password" class="contuct-us-input" placeholder="Password" required>                       
                    </div>
                    <div class="col-md-12">
                            <h5><label>Confirm Password</label></h5>
                            <input type="password" name="sponsors_cpassword" class="contuct-us-input" placeholder="Enter Password Again" required>                       
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

        <script>
            function myFunction2() {
                if(document.getElementById("donations_50").checked === true) {
                    document.getElementById("donations_amount2").value = 50;
                }
                if(document.getElementById("donations_100").checked === true) {
                    document.getElementById("donations_amount2").value = 100;
                }
                if(document.getElementById("donations_500").checked === true) {
                    document.getElementById("donations_amount2").value = 500;
                }
                if(document.getElementById("donations_1000").checked === true) {
                    document.getElementById("donations_amount2").value = 1000;
                }
            }
            
           
        </script>



    @endsection