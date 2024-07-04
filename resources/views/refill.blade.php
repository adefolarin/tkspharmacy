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
                            <h2>REFILL PRESCRIPTION</h2>
                            <h4><span>Home / </span><a href="#">Prescription Refill</a></h4>
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
                        <form name="frmContact" id="frmContact" action="{{ url('/refill') }}" method="post">
						<input type="hidden" name="frmCont" name="frmCont" value="frmCont" />
                            <h3>Refill Request Form</h3>
                            <label>Name of Patient</label>
                            <input type="text" name="refills_patname" id="refills_patname" value="" required>
                            <label>Phone Number of Patient</label>
                            <input type="text" name="refills_patpnum" id="refills_patpnum" value="" required>
                            <label>Date of Birth</label>
                            <input type="text" name="refills_patdob" id="refills_patdob" value="" required>
                            <label>RX Number</label>
                            <input type="text" id="refills_rxnum" name="refills_rxnum" value="" required>
                            <label>Mode Of Delivery</label>
                            <select required class="form-control" id="refills_pickupdeliv" name="refills_pickupdeliv" >
                                <option value="">Select Mode of Delivery</option>
                                <option value="Pick Up">Pick Up</option>
                                <option value="Delivery">Delivery</option>
                            </select>
                            <label>Location of Delivery</label>
                            <input type="text" id="refills_locationdeliv" name="refills_locationdeliv" value="" required>
                            <br></br>
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