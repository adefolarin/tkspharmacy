
@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">MEDICAL OUTREACH CATEGORIES</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">MEDICAL OUTREACH CATEGORIES</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div class="card card-primary">
                <div class="card-header">
                    @if(empty($campaigncategoryone['campaigncategories_id']))
                     <h3 class="card-title">Add Medical Outreach Category</h3>
                    @else
                     <h3 class="card-title">Edit Medical Outreach Category</h3>
                    @endif
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                        
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(Session::has('error_message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error: </strong> {{ Session::get('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                            
                @if(Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success: </strong> {{ Session::get('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                
                @if(empty($campaigncategoryone['campaigncategories_id']))
                <form method="post" action="{{ url('admin/campaigncategory') }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="banner_name">Name</label>
                        <input type="text" class="form-control"  name="campaigncategories_name" id="campaigncategories_name" placeholder="Name of Medical Outreach Category">
                    </div>            
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
                @else
                <form method="post" action="{{ url('admin/campaigncategory/'.$campaigncategoryone['campaigncategories_id']) }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="campaigncategories_id">Campaign Category ID</label>
                        <input type="text" class="form-control"  name="campaigncategories_id" id="campaigncategories_id" value="{{ $campaigncategoryone['campaigncategories_id'] }}">
                    </div> 
                    <div class="form-group">
                        <label for="campaigncategories_name">Name</label>
                        <input type="text" class="form-control"  name="campaigncategories_name" id="campaigncategories_name" placeholder="Name of Medical Outreach Category" value="{{ $campaigncategoryone['campaigncategories_name'] }}">
                    </div>            
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Edit</button>
                    </div>
                </form>
                @endif
                </div>
            </div>
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">MEDICAL OUTREACH CATEGORIES</h3>
                @if(!empty($campaigncategoryone['campaigncategories_id']))
                <a href="{{ url('admin/campaigncategory') }}" class="btn btn-primary" 
                  style="float:right;">
                   Add Medical outreach Categories
                </a>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tablepages" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Actions </th>
                  </tr>
                  </thead>
                  <tbody> 
                    @foreach($campaigncategories as $campaigncategory)           
                  <tr>
                    <td>{{ ucwords($campaigncategory['campaigncategories_name']) }}</td>
                    <td>                     
                      <a href="{{  url('admin/campaigncategory/'.$campaigncategory['campaigncategories_id']) }}" style="color:#3f6ed3;">
                        <i class="fas fa-edit"></i>
                      </a>
                      &nbsp;&nbsp;
                      <?php 
                         //App\Http\Controllers\Admin\CampaignCategoryController::class; 
                         //$campaigncat = CampaignCategoryController::showCampaignCatgoriesID($campaigncategory//['campaigncategories_id']);
                      ?>

                     @php
                         $campaigncat = App\Http\Controllers\Admin\CampaignCategoryController::showCampaignCategoriesID($campaigncategory['campaigncategories_id']);      

                      @endphp
                      
                    
        
                      @if(!empty($campaigncat->campaigncategoriesid))
                        <a href= "javascript:void(0)" record="campaigncategory" 
                        campaigncategoriesid="{{ $campaigncat->campaigncategoriesid }}" 
                        recordid="{{ $campaigncategory['campaigncategories_id'] }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmCampaignDelete" name="Campaign Category" title="Delete Campaign Category">
                          <i class="fas fa-trash"></i>
                        </a> 
                       @else
                       <a href= "javascript:void(0)" record="campaigncategory" campaigncategoriesid="0" 
                        recordid="{{ $campaigncategory['campaigncategories_id'] }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmCampaignDelete" name="Campaign Category" title="Delete Campaign Category">
                          <i class="fas fa-trash"></i>
                        </a>
                       @endif
                    </td>
                    </tr>   
                     @endforeach
                             
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->

@endsection