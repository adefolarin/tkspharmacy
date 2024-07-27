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
                            <h2>TRANSFER PRESCRIPTION</h2>
                            <h4><span>Home / </span><a href="#">Transfer Prescription</a></h4>
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
             <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="blog-form-area">
                        <form name="frmContact" id="frmContact" action="{{ url('/transferpatient') }}" method="post">@csrf
						<input type="hidden" name="frmCont" name="frmCont" value="frmCont" />
                        <h3>Transfer Prescription Form</h3>
                            <label>Full Name of Patient</label>
                            <input type="text" name="transfers_patname" id="transfers_patname" value="" required>
                            <label>Phone Number of Patient</label>
                            <input type="text" name="transfers_patpnum" id="transfers_patpnum" value="" required>
                            <label>Email Address of Patient</label>
                            <input type="text" name="transfers_patemail" id="transfers_patemail" value="" required>
                            <label>Date of Birth</label>
                            <input type="text" name="transfers_patdob" id="transfers_patdob" value="" required>
                            <label>Pharmacy Name</label>
                            <input type="text" name="transfers_pharmname" id="transfers_pharmname" value="" required>
                            <label>Phone Number of Pharmacy</label>
                            <input type="text" id="transfers_pharmpnum" name="transfers_pharmpnum" value="" required>
                            <div class="row">
                            <div class="col-sm-6">
                               <label>RX Number</label>
                               <input type="text" id="transfers_rxnum" name="transfers_rxnum[]" value="" required>
                              </div>
                              <div class="col-sm-6">
                               <label>Medication Name and Strength</label>
                               <input type="text" id="transfers_med" name="transfers_med[]" value="" required>
                              </div>
                              <div class="col-sm-6">
                               <label>RX Number</label>
                               <input type="text" id="transfers_rxnum" name="transfers_rxnum[]" value="" required>
                              </div>
                              <div class="col-sm-6">
                               <label>Medication Name and Strength</label>
                               <input type="text" id="transfers_med" name="transfers_med[]" value="" required>
                              </div> 
                              <div class="col-sm-6">
                               <label>RX Number</label>
                               <input type="text" id="transfers_rxnum" name="transfers_rxnum[]" value="" required>
                              </div>
                              <div class="col-sm-6">
                               <label>Medication Name and Strength</label>
                               <input type="text" id="transfers_med" name="transfers_med[]" value="" required>
                              </div> 
                              <div class="col-sm-6">
                               <label>RX Number</label>
                               <input type="text" id="transfers_rxnum" name="transfers_rxnum[]" value="" required>
                              </div>
                              <div class="col-sm-6">
                               <label>Medication Name and Strength</label>
                               <input type="text" id="transfers_med" name="transfers_med[]" value="" required>
                              </div> 
                              <div class="col-sm-6">
                               <label>RX Number</label>
                               <input type="text" id="transfers_rxnum" name="transfers_rxnum[]" value="" required>
                              </div>
                              <div class="col-sm-6">
                               <label>Medication Name and Strength</label>
                               <input type="text" id="transfers_med" name="transfers_med[]" value="" required>
                              </div>
                            </div>
                        
                            <label>Message to Pharmacist</label>
                            <textarea cols="30" rows="10" name="transfers_note" id="transfers_note" required></textarea>
                            <button class="team-1" type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
    <!--contuct-area-end-->

    @endsection