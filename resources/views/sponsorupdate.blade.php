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

    <style>
       .table th, .table td {
          padding: 20px;
          text-align: center;
       }

       .table td {
         font-weight: normal;
       }
    </style>

    <div class="pattern-layer card" style="background-image: url('frontendassets/assets/images/shape/shape-02.png')"></div>

    @include('sponsornav')


    <div class="container mt-3">       
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Update Profile</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="col-xl-12">  
                    <form enctype="multipart/form-data" method="post" 
                    action="{{ url('sponsorupdatedetails') }}">@csrf 
                       <div class="col-xl-12"> 
                            <label>Full Name</label>  
                            <br> <br>       
                            <input type="text" name="sponsors_name" class="contuct-us-input" 
                            required value="{{ Auth::guard('sponsor')->user()->sponsors_name }}">
                        </div> 
                        <div class="col-md-12"> 
                            <label>Type</label> 
                            <br><br>
                            <select name="sponsors_type" class="contuct-us-input" required>
                              <option value="{{ Auth::guard('sponsor')->user()->sponsors_type }}">
                                 {{ Auth::guard('sponsor')->user()->sponsors_type }}
                              </option>
                              <option value="Outreach">Outreach</option>
                              <option value="Surgery Treatment">Surgery Treatment</option>
                              <option value="Medical Supplies">Medical Supplies</option>
                            </select> 
                        </div>
                        <div class="col-xl-12"> 
                            <label>Profession</label> 
                            <br> <br>      
                            <input type="text" name="sponsors_profession" class="contuct-us-input" 
                            required value="{{ Auth::guard('sponsor')->user()->sponsors_profession }}">
                        </div>
                        <div class="col-md-12"> 
                            <label>Period</label>
                            <br><br>
                            <select name="sponsors_period" class="contuct-us-input" required>
                              <option value="{{ Auth::guard('sponsor')->user()->sponsors_period }}">
                                 {{ Auth::guard('sponsor')->user()->sponsors_period }}
                              </option>
                              <option value="Monthly">Monthly</option>
                              <option value="Yearly">Yearly</option>
                              <option value="One Off">One Off</option>
                              <option value="Every Time">Every Time</option>
                            </select> 
                        </div>
                        <div class="col-xl-12">   
                            <label>Amount</label>  
                            <br><br>    
                            <input type="text" name="sponsors_amount" class="contuct-us-input" 
                            required value="{{ Auth::guard('sponsor')->user()->sponsors_amount }}">
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-us-btn">                   
                                <button type="submit" class="btn-1">Update Profile <span></span></button> 
                            </div>
                        </div> 
                    </form>                 
                    </div>
                </td>


            </tr>
            </tbody>
        </table>
    </div>

   
    <br><br>
    <div class="container mt-3">       
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Update Email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="col-xl-12">  
                    <form enctype="multipart/form-data" method="post" 
                    action="{{ url('sponsorupdateemail') }}">@csrf  
                        <div class="col-xl-12">           
                            <input type="email" name="sponsors_email" class="contuct-us-input" 
                            required value=" {{ Auth::guard('sponsor')->user()->sponsors_email }}">
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-us-btn">                   
                                <button type="submit" class="btn-1">Update Email <span></span></button> 
                            </div>
                        </div> 
                    </form>                 
                    </div>
                </td>


            </tr>
            </tbody>
        </table>
    </div>

    <div class="container mt-3">       
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Update Password</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="col-xl-12">  
                    <form enctype="multipart/form-data" method="post" 
                    action="{{ url('sponsorupdatepassword') }}">@csrf 
                       <div class="col-xl-12"> 
                            <label>Current Password</label>  
                            <br> <br>       
                            <input type="password" name="current_pwd" class="contuct-us-input" 
                            required>
                        </div> 
                        <div class="col-xl-12"> 
                            <label>New Password</label> 
                            <br> <br>      
                            <input type="password" name="sponsors_password" class="contuct-us-input" 
                            required>
                        </div>
                        <div class="col-xl-12">   
                            <label>Enter New Password</label>  
                            <br><br>    
                            <input type="password" name="sponsors_cpassword" class="contuct-us-input" 
                            required>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-us-btn">                   
                                <button type="submit" class="btn-1">Update Pasword <span></span></button> 
                            </div>
                        </div> 
                    </form>                 
                    </div>
                </td>


            </tr>
            </tbody>
        </table>
    </div>
</section>



@endsection