@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">REPORTS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">REPORTS</li>
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
                    @if(empty($reportone['reports_id']))
                     <h3 class="card-title">Add Report</h3>
                    @else
                     <h3 class="card-title">Edit Report</h3>
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
                
                @if(empty($reportone['reports_id']))
                <form method="post" action="{{ url('admin/report') }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                      <label for="resourcescategories_name">Report Category Name</label>
                      <select  class="form-control select2" id="resourcecategoriesid" name="resourcecategoriesid" required style="width: 100%;">
                      @foreach($resourcecategories as $resourcecategory) 
                          <!--<option value="">Select Report Category</option>-->
                          <option value="{{ $resourcecategory['resourcecategories_id'] }}">
                            {{ ucwords($resourcecategory['resourcecategories_name']) }}
                          </option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="reports_for">Report Access</label>
                      <select  class="form-control select2" id="reports_for" name="reports_for" required style="width: 100%;">
                      <option value="">Select Who Should Access This Report</option>
                      <option value="all">Everyone</option>
                      <option value="sponsor">Sponsor</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="reports_title">File Name</label>
                        <input type="text" class="form-control"  name="reports_name" id="reports_name" placeholder="Report Name" required >
                    </div> 

                    <div class="form-group">
                        <label for="reports_file">File</label>
                        <input type="file" class="form-control"  name="reports_file" id="reports_file" placeholder="Report File" required>
                    </div>           
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
                @else
                <form method="post" action="{{ url('admin/report/'. $reportone->reports_id) }}" enctype="multipart/form-data">@csrf
                    <div class="card-body">
                    <div class="form-group" style="display:none;">
                        <label for="admin_id">Admin ID</label>
                        <input type="hidden"  class="form-control" id="admin_id" value="{{ Auth::guard('admin')->user()->id }}" readonly>
                    </div>
                    <div class="form-group" style="display:none;">
                        <label for="reports_id">Report ID</label>
                        <input type="text" class="form-control"  name="reports_id" id="reports_id" value="{{ $reportone['reports_id'] }}" required>
                    </div> 
                    <div class="form-group" style="display:none;">
                      <label for="resourcescategories_name">Report Category Name</label>
                      <select  class="form-control select2" id="resourcecategoriesid" name="resourcecategoriesid" required style="width: 100%;">
                      <option value="{{ $resourcecategoryone['resourcecategories_id'] }}">
                        {{ $resourcecategoryone['resourcecategories_name'] }}
                      </option>
                      @foreach($resourcecategories as $resourcecategory) 
                          <option value="{{ $resourcecategory['resourcecategories_id'] }}">
                            {{ ucwords($resourcecategory['resourcecategories_name']) }}
                          </option>
                      @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="reports_for">Report Access</label>
                      <select  class="form-control select2" id="reports_for" name="reports_for" required style="width: 100%;">
                      <option value="{{ $reportone['reports_for'] }}">
                        
                          @if($reportone['reports_for'] == 'all')
                             Everyone
                          @elseif($reportone['reports_for'] == 'sponsor')
                             Sponsor
                          @endif
                         
                        
                      </option>
                      <option value="all">Everyone</option>
                      <option value="sponsor">Sponsor</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="reports_name">File Name</label>
                        <input type="text" class="form-control"  name="reports_name" id="reports_name" placeholder="Report Name" required value="{{ $reportone['reports_name'] }}">
                    </div>  

                      <div class="form-group">
                            <label for="reports_file">File</label>
                            <input type="file" class="form-control"  name="reports_file" id="reports_file" placeholder="Report File">
                        </div> 
                        <div class="form-group" style="display:none;">
                            <label for="currentreports_file">Current File</label>
                            <input type="text" class="form-control"  name="currentreports_file" id="currentreports_file" placeholder="Report File" value="{{ $reportone['reports_file'] }}">
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
                <h3 class="card-title">REPORTS</h3>
                @if(!empty($reportone['reports_id']))
                <a href="{{ url('admin/report') }}" class="btn btn-primary" 
                  style="float:right;">
                   Add Report
                </a>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" style="overflow-y:scroll">
                <table id="tablepages" class="table table-bordered table-striped" >
                  
                <thead>
                  <tr>
                    <!--<th>Category</th>-->
                    <th>Name of File</th>
                    <th>File</th>
                    <th>Access</th>
                    <th>Actions </th>
                  </tr>
                <thead>
                  
                  <tbody> 
                    @foreach($reports as $report)           
                  <tr>
                    <!--<td>{{ ucwords($report->resourcecategories_name) }}</td>-->
                    <td>{{ ucwords($report->reports_name) }}</td>
                    
                    <td>
                       <div id="div_img">
                         <a  href="{{ url('storage/admin/docs/reports/'.$report->reports_file) }}" target="_blank">
                           {{ ucwords($report->reports_file) }}
                         </a>
                       </div>
                    </td>
                    <td>
                         @if($report->reports_for == 'all')
                             Everyone
                          @elseif($report->reports_for == 'sponsor')
                             Sponsor
                          @endif
                    </td>
                    <td>                     
                      <a href="{{  url('admin/report/'.$report->reports_id) }}" style="color:#3f6ed3;">
                        <i class="fas fa-edit"></i>
                      </a>
                      &nbsp;&nbsp;
                      <a href= "javascript:void(0)" record="report" 
                      recordid="{{ $report->reports_id }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmDelete" name="Report" title="Delete Report">
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
