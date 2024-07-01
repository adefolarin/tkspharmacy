@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">MEDICAL OUTREACH</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">MEDICAL OUTREACH</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  @if(!empty($campaigncategories))
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-3">
            <div class="card card-primary">
                <div class="card-header">
                    @if(empty($campaignone['campaigns_id']))
                     <h3 class="card-title">Add Campaign</h3>
                    @else
                     <h3 class="card-title">Edit Campaign</h3>
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
                
                @if(empty($campaignone['campaigns_id']))
                <form method="post" action="{{ url('admin/campaign') }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                      <label for="campaignscategories_name">Campaign Category Name</label>
                      <select  class="form-control select2" id="campaigncategoriesid" name="campaigncategoriesid" required style="width: 100%;">
                      @foreach($campaigncategories as $campaigncategory) 
                         <!--<option value="">Select Campaign Category</option>-->
                          <option value="{{ $campaigncategory['campaigncategories_id'] }}">
                            {{ ucwords($campaigncategory['campaigncategories_name']) }}
                          </option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="campaigns_title">Title</label>
                        <input type="text" class="form-control"  name="campaigns_title" id="campaigns_title" placeholder="Medical Outreach Title" required >
                    </div> 
                    <div class="form-group">
                        <label for="campaigns_desc">Description</label>
                        <textarea class="form-control" id="campaigns_desc" name="campaigns_desc" placeholder="Medical Outreach Description" required></textarea>
                    </div> 
                     
                    <div class="form-group">
                       <label>Medical OutreachStart Date</label>
                       <div class="input-group date" id="campaigns_startdate" 
                       data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#campaigns_startdate" required name="campaigns_startdate">
                        <div class="input-group-append" data-target="#campaigns_startdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                       </div> 
                    </div>
                      
                    <div class="form-group">
                       <label>Medical Outreach End Date</label>
                       <div class="input-group date" id="campaigns_enddate" 
                       data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#campaigns_enddate" required name="campaigns_enddate">
                        <div class="input-group-append" 
                        data-target="#campaigns_enddate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                       </div> 
                    </div>  
                    <div class="form-group">
                        <label for="campaigns_venue">Venue</label>
                        <input type="text" class="form-control"  name="campaigns_venue" id="campaigns_venue" placeholder="Medical OutreachVenue" required>
                    </div>  
                    <div class="form-group" style="display:block;">
                        <label for="campaigns_address">Address</label>
                        <input type="text" class="form-control"  name="campaigns_address" id="campaigns_addres" placeholder="Medical Outreach Address" required value="">
                    </div>  
                    <div class="form-group" style="display:none;">
                        <label for="campaigns_organizer">Organizer</label>
                        <input type="text" class="form-control"  name="campaigns_organizer" id="campaigns_organizer" placeholder="Campaign Organizer" required value="NA">
                    </div> 
                    <div class="form-group" style="display:none;">
                        <label for="campaigns_preacher">Preacher</label>
                        <input type="text" class="form-control"  name="campaigns_preacher" id="campaigns_preacher" placeholder="Medical Outreach Preacher" required value="NA">
                    </div> 
                    <div class="form-group">
                        <label for="campaigns_file">Image</label>
                        <input type="file" class="form-control"  name="campaigns_file" id="campaigns_file" placeholder="Medical Outreach Image" required>
                    </div>           
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
                @else
                <form method="post" action="{{ url('admin/campaign/'. $campaignone->campaigns_id) }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="campaigns_id">Campaign ID</label>
                        <input type="text" class="form-control"  name="campaigns_id" id="campaigns_id" value="{{ $campaignone['campaigns_id'] }}" required>
                    </div> 
                    <div class="form-group" style="display:none;">
                      <label for="campaignscategories_name">Medical Outreach Category Name</label>
                      <select  class="form-control select2" id="campaigncategoriesid" name="campaigncategoriesid" required style="width: 100%;">
                      <option value="{{ $campaigncategoryone['campaigncategories_id'] }}">
                        {{ $campaigncategoryone['campaigncategories_name'] }}
                      </option>
                      @foreach($campaigncategories as $campaigncategory) 
                          <option value="{{ $campaigncategory['campaigncategories_id'] }}">
                            {{ ucwords($campaigncategory['campaigncategories_name']) }}
                          </option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="campaigns_title">Title</label>
                        <input type="text" class="form-control"  name="campaigns_title" id="campaigns_title" placeholder="Medical Outreach Title" required value="{{ $campaignone['campaigns_title'] }}">
                    </div> 
                    <div class="form-group">
                        <label for="campaigns_desc">Description</label>
                        <textarea class="form-control" id="campaigns_desc" name="campaigns_desc" placeholder="Medical Outreach Description" required>{{ $campaignone['campaigns_desc'] }}</textarea>
                    </div>  
                    <div class="form-group">
                       <label>Medical Outreach Start Date</label>
                       <div class="input-group date" id="campaigns_startdate" 
                       data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#campaigns_startdate" required name="campaigns_startdate" value="{{ $campaignone['campaigns_startdate'] }}">
                        <div class="input-group-append" data-target="#campaigns_startdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                       </div> 
                    </div>
                    <div class="form-group">
                       <label>Medical Outreach End Date</label>
                       <div class="input-group date" id="campaigns_enddate" 
                       data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#campaigns_enddate" required name="campaigns_enddate" value="{{ $campaignone['campaigns_enddate'] }}">
                        <div class="input-group-append" data-target="#campaigns_enddate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                       </div> 
                    </div>  
                    <div class="form-group">
                        <label for="campaigns_venue">Venue</label>
                        <input type="text" class="form-control"  name="campaigns_venue" id="campaigns_venue" placeholder="Medical Outreach Venue" required value="{{ $campaignone['campaigns_venue'] }}">
                    </div>  
                    <div class="form-group" style="display:block;">
                        <label for="campaigns_address">Address</label>
                        <input type="text" class="form-control"  name="campaigns_address" id="campaigns_addres" placeholder="Medical Outreach Address" required value="{{ $campaignone['campaigns_address'] }}">
                    </div>  
                    <div class="form-group" style="display:none;">
                        <label for="campaigns_organizer">Organizer</label>
                        <input type="text" class="form-control"  name="campaigns_organizer" id="campaigns_organizer" placeholder="Medical Outreach Organizer" required value="{{ $campaignone['campaigns_organizer'] }}">
                    </div> 
                    <div class="form-group" style="display:none;">
                        <label for="campaigns_preacher">Preacher</label>
                        <input type="text" class="form-control"  name="campaigns_preacher" id="campaigns_preacher" placeholder="Medical Outreach Preacher" required value="{{ $campaignone['campaigns_preacher'] }}">
                    </div> 
                    <div class="form-group">
                        <label for="campaigns_file">Image (Optional)</label>
                        <input type="file" class="form-control"  name="campaigns_file" id="campaigns_file" placeholder="Medical Outreach Image">
                    </div> 
                    <div class="form-group" style="display:none;">
                        <label for="currentcampaigns_file">Current Image</label>
                        <input type="text" class="form-control"  name="currentcampaigns_file" id="currentcampaigns_file" placeholder="Medical Outreach Image" value="{{ $campaignone['campaigns_file'] }}">
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
          <div class="col-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">MEDICAL OUTREACH</h3>
                @if(!empty($campaignone['campaigns_id']))
                <a href="{{ url('admin/campaign') }}" class="btn btn-primary" 
                  style="float:right;">
                   Add MEDICAL OUTREACH
                </a>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" style="overflow-y:scroll">
                <table id="tablepages" class="table table-bordered table-striped text-center" >
                  
            
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Venue</th>
                    <th>Address</th>
                    <!--<th>Organizer</th>
                    <th>Preacher</th>
                    <th>Gallery</th>-->
                    <th>Registered Members</th>
                    <th>Actions </th>
                  </tr>
                
         
                  
                  <tbody> 
                    @foreach($campaigns as $campaign)           
                  <tr>
                    <td>{{ ucwords($campaign->campaigncategories_name) }}</td>
                    <td>{{ ucwords($campaign->campaigns_title) }}</td>
                    <td>{{ $campaign->campaigns_desc }}</td>
                    <td>
                       <div id="div_img">
                         <img src="{{ asset('admin/img/campaigns/'.$campaign->campaigns_file) }}" class="img-circle elevation-2" alt="Campaign Image">
                       </div>
                    </td>
                    <td>{{ ucwords($campaign->campaigns_startdate) }}</td>
                    <td>{{ ucwords($campaign->campaigns_enddate) }}</td>
                    <td>{{ ucwords($campaign->campaigns_venue) }}</td>
                    <td>{{ ucwords($campaign->campaigns_address) }}</td>
                    <!--<td>{{ ucwords($campaign->campaigns_organizer) }}</td>
                    <td>{{ ucwords($campaign->campaigns_preacher) }}</td>-->
                    <!--<td>
                      <a href="{{  url('admin/campaigngallery/'.$campaign->campaigns_id) }}" style="color:#3f6ed3;">
                        Add & View
                      </a>
                    </td>-->
                    <td>
                      <a href="{{  url('admin/campaignreg/'.$campaign->campaigns_id) }}" style="color:#3f6ed3;">
                        View
                      </a>
                    </td>
                    <td>                     
                      <a href="{{  url('admin/campaign/'.$campaign->campaigns_id) }}" style="color:#3f6ed3;">
                        <i class="fas fa-edit"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href= "javascript:void(0)" record="campaign" 
                      recordid="{{ $campaign->campaigns_id }}"  style="color:#ee4b2b;" class="confirmDelete" name="Campaign" title="Delete Campaign">
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
@else
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card card-primary">
                <div class="card-header">
                  <h4 class="text-center" style="text-transform:uppercase;">There must be at least one medical outreach category before you can proceed</h4>
                </div>
          </div>
          </div>
        </div>
       </div>
</section>
@endif
</div>
<!-- /.content-wrapper -->

@endsection
