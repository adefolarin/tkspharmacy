
@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">EVENT SCHEDULERS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">EVENT SCHEDULERS</li>
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
                    @if(empty($eventschedulerone['eventschedulers_id']))
                     <h3 class="card-title">Add Event Scheduler</h3>
                    @else
                     <h3 class="card-title">Edit Event Scheduler</h3>
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
                
                @if(empty($eventschedulerone['eventschedulers_id']))
                <form method="post" action="{{ url('admin/eventscheduler') }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="banner_name">Time(Format: 9:00am - 9:30am)</label>
                        <input type="text" class="form-control"  name="eventschedulers_time" id="eventschedulers_time" placeholder="Time of Event Scheduler">
                    </div>            
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
                @else
                <form method="post" action="{{ url('admin/eventscheduler/'.$eventschedulerone['eventschedulers_id']) }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="eventschedulers_id">Event Scheduler ID</label>
                        <input type="text" class="form-control"  name="eventschedulers_id" id="eventschedulers_id" value="{{ $eventschedulerone['eventschedulers_id'] }}">
                    </div> 
                    <div class="form-group">
                        <label for="eventschedulers_time">Time(Format: Format: 9:00am - 9:30am)</label>
                        <input type="text" class="form-control"  name="eventschedulers_time" id="eventschedulers_time" placeholder="Time of Event Scheduler" value="{{ $eventschedulerone['eventschedulers_time'] }}">
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
                <h3 class="card-title">EVENT SCHEDULERS</h3>
                @if(!empty($eventschedulerone['eventschedulers_id']))
                <a href="{{ url('admin/eventscheduler') }}" class="btn btn-primary" 
                  style="float:right;">
                   Add Event Schedulers
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
                    @foreach($eventschedulers as $eventscheduler)           
                  <tr>
                    <td>{{ ucwords($eventscheduler['eventschedulers_time']) }}</td>
                    <td>                     
                      <a href="{{  url('admin/eventscheduler/'.$eventscheduler['eventschedulers_id']) }}" style="color:#3f6ed3;">
                        <i class="fas fa-edit"></i>
                      </a>
                      &nbsp;&nbsp;                      
                    
      
                        <a href= "javascript:void(0)" record="eventscheduler" 
                        eventschedulersid="{{ $eventscheduler['eventschedulers_id'] }}" 
                        recordid="{{ $eventscheduler['eventschedulers_id'] }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmEventDelete" name="Event Scheduler" title="Delete Event Scheduler">
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