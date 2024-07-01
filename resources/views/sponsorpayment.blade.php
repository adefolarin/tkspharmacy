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
        .table th,
        .table td {
            padding: 20px;
            text-align: center;
            vertical-align: center;
        }

        .table td {
            font-weight: normal;
        }

        .table a {
        color:dodgerblue;
        }

        #div_img {
        width: 200px;
        height: 150px;
        margin: auto;
        }

        #div_img img {
        width: 100%;
        }
    </style>

    <div class="pattern-layer" style="background-image: url('frontendassets/assets/images/shape/shape-02.png')"></div>

    @include('sponsornav')


    <br><br>
    <div class="container mt-3">
        <h4 class="text-center">TRANSACTION RECORDS</h4>
        <br><br><br>
        <div class="card card-primary">
            <div class="card-header">

            </div>
            <div class="card-body table-responsive" style="overflow-y:scroll">
                <table id="tablepages" class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Reference ID</th>
                            <th>Amount </th>
                        </tr>
                        <thead>

                        <tbody>
                            @foreach($donations as $donation)
                            <tr>
                                <td>{{ ucwords($donation['donations_date']) }}</td>
                                <td>{{ ucwords($donation['donations_reference']) }}</td>
                                <td>{{ ucwords($donation['donations_amount']) }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



@endsection