@extends('frontendlayout.layout')

@section('content')

<style>
    #tablepages td,#tablepages th  {
       text-align: center;
       vertical-align: middle;
    }

    #tablepages a {
        color:dodgerblue;
    }

    #div_img {
      width: 200px;
      height: 100px;
      margin: auto;
    }

    #div_img img {
      width: 100%;
    }
</style>

<!-- common banner -->
<section class="common-banner" style="background-image: url('frontendassets/assets/images/banner/common-banner-bg.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-banner-title">
                    <h3>Our Resources</h3>
                    <a href="/">Home </a>/
                    <span>Resources</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- common banner -->


<div class="card card-primary">
    <div class="card-header">

    </div>
    <div class="card-body table-responsive" style="overflow-y:scroll">
        <table id="tablepages" class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name of File</th>
                    <th>File</th>
                    <th>Actions </th>
                </tr>
                <thead>

                <tbody>
                    @foreach($resources as $resource)
                    <tr>
                        <td>{{ ucwords($resource->resources_name) }}</td>
                        <td>
                            <div id="div_img">
                                <img src="{{ asset('/storage/admin/docs/resources/'.$resource->resources_file) }}">
                            </div>
                        </td>
                        <td>
                                <a href="{{ url('storage/admin/docs/resources/'.$resource->resources_file) }}" target="_blank">
                                    Download
                                </a>
                          
                        </td>
                    </tr>
                    @endforeach

                </tbody>
        </table>
    </div>
</div>

@endsection