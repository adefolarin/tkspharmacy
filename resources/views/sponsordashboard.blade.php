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

    <div class="pattern-layer card card-primary" 
    style="background-image: url('frontendassets/assets/images/shape/shape-02.png')"></div>

    @include('sponsornav')

   
    <br><br>
    <div class="container mt-3">
    <h4 class="text-center">Profile</h4>
    <br><br><br>           
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Profession</th>
            <th>Type</th>
            <th>Period</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ Auth::guard('sponsor')->user()->sponsors_name }}</td>
            <td>{{ Auth::guard('sponsor')->user()->sponsors_email }}</td>
            <td>{{ Auth::guard('sponsor')->user()->sponsors_profession }}</td>
            <td>{{ Auth::guard('sponsor')->user()->sponsors_type }}</td>
            <td>{{ Auth::guard('sponsor')->user()->sponsors_period }}</td>
            <td>{{ Auth::guard('sponsor')->user()->sponsors_amount }}</td>

        </tr>
        </tbody>
    </table>
</div>
</section>



@endsection