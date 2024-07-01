
@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">CAMPAIGN SCHEDULERS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">CAMPAIGN SCHEDULERS</li>
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
                    @if(empty($campaignschedulerone['campaignschedulers_id']))
                     <h3 class="card-title">Add Campaign Scheduler</h3>
                    @else
                     <h3 class="card-title">Edit Campaign Scheduler</h3>
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
                
                @if(empty($campaignschedulerone['campaignschedulers_id']))
                <form method="post" action="{{ url('admin/campaignscheduler') }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="banner_name">Time(Format: 9:00am - 9:30am)</label>
                        <input type="text" class="form-control"  name="campaignschedulers_time" id="campaignschedulers_time" placeholder="Time of Campaign Scheduler">
                    </div>            
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
                @else
                <form method="post" action="{{ url('admin/campaignscheduler/'.$campaignschedulerone['campaignschedulers_id']) }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="campaignschedulers_id">Campaign Scheduler ID</label>
                        <input type="text" class="form-control"  name="campaignschedulers_id" id="campaignschedulers_id" value="{{ $campaignschedulerone['campaignschedulers_id'] }}">
                    </div> 
                    <div class="form-group">
                        <label for="campaignschedulers_time">Time(Format: 9:00am - 9:30am)</label>
                        <input type="text" class="form-control"  name="campaignschedulers_time" id="campaignschedulers_time" placeholder="Time of Campaign Scheduler" value="{{ $campaignschedulerone['campaignschedulers_time'] }}">
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
                <h3 class="card-title">CAMPAIGN SCHEDULERS</h3>
                @if(!empty($campaignschedulerone['campaignschedulers_id']))
                <a href="{{ url('admin/campaignscheduler') }}" class="btn btn-primary" 
                  style="float:right;">
                   Add Campaign Schedulers
                </a>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tablepages" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Time</th>
                    <th>Actions </th>
                  </tr>
                  </thead>
                  <tbody> 
                    @foreach($campaignschedulers as $campaignscheduler)           
                  <tr>
                    <td>{{ ucwords($campaignscheduler['campaignschedulers_time']) }}</td>
                    <td>                     
                      <a href="{{  url('admin/campaignscheduler/'.$campaignscheduler['campaignschedulers_id']) }}" style="color:#3f6ed3;">
                        <i class="fas fa-edit"></i>
                      </a>
                      &nbsp;&nbsp;
                      <?php 
                         //App\Http\Controllers\Admin\CampaignSchedulerController::class; 
                         //$campaigncat = CampaignSchedulerController::showCampaignCatgoriesID($campaignscheduler//['campaignschedulers_id']);
                      ?>

                       <a href= "javascript:void(0)" record="campaignscheduler" campaignschedulersid="0" 
                        recordid="{{ $campaignscheduler['campaignschedulers_id'] }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmCampaignDelete" name="Campaign Scheduler" title="Delete Campaign Scheduler">
                          <i class="fas fa-trash"></i>
                        </a>
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