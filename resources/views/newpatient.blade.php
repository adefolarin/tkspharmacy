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
                            <h2>NEW PATIENT</h2>
                            <h4><span>Home / </span><a href="#">New Patient</a></h4>
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
                        <form name="frmContact" id="frmContact" action="{{ url('/newpatient') }}" method="post">@csrf
						<input type="hidden" name="frmCont" name="frmCont" value="frmCont" />
                        <h3>New Patient</h3>
                            <label>Name of Patient</label>
                            <input type="text" name="newpatients_name" id="newpatients_name" value="" required>
                            <label>Phone Number of Patient</label>
                            <input type="text" name="newpatients_pnum" id="newpatients_pnum" value="" required>
                            <label>Date of Birth</label>
                            <input type="text" name="newpatients_dob" id="newpatients_dob" value="" required>
                            <label>RX Number</label>
                            <input type="text" id="newpatients_rxnum" name="newpatients_rxnum" value="" required>
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