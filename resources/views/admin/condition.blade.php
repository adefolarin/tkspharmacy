@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">REPORT A CONDITION</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">REPORT A CONDITION</li>
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
                
                </div>
            </div>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">REPORT A CONDITION</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive" style="overflow-y:scroll">
                <table id="tablepages" class="table table-bordered table-striped" >
                  
                
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Medical Condition</th>
                    <th>Description</th>
                    <th>Type of Treatment Needed</th>
                    <th>Estimated Cost of Treatment</th>
                    <th>Reason For Fundraising</th>
                    <th>Fundraising Goal</th>
                    <th>Fundraising Deadline</th>
                    <th>Medical Report</th>
                    <th>Financial Document</th>
                    <th>Date</th>
                    <th>Actions </th>
                  </tr>
                
                  
                  <tbody> 
                    @foreach($conditions as $condition)           
                  <tr>
                    <td>{{ ucwords($condition['conditions_name']) }}</td>
                    <td>{{ ucwords($condition['conditions_email']) }}</td>
                    <td>{{ ucwords($condition['conditions_pnum']) }}</td>
                    <td>{{ ucwords($condition['conditions_address']) }}</td>
                    <td>{{ ucwords($condition['conditions_type']) }}</td>
                    <td>{{ ucwords($condition['conditions_desc']) }}</td>
                    <td>{{ ucwords($condition['conditions_treatment']) }}</td>
                    <td>{{ ucwords($condition['conditions_treatmentcost']) }}</td>
                    <td>{{ ucwords($condition['conditions_fundreason']) }}</td>
                    <td>{{ ucwords($condition['conditions_fundgoal']) }}</td>
                    <td>{{ ucwords($condition['conditions_funddeadline']) }}</td>
                    <td>
                       <div id="div_img">
                         <a  href="{{ url('storage/admin/docs/conditions/'.$condition['conditions_meddoc']) }}" target="_blank">
                           {{ ucwords($condition['conditions_meddoc']) }}
                         </a>
                       </div>
                    </td>
                    <td>
                       <div id="div_img">
                         <a  href="{{ url('storage/admin/docs/conditions/'.$condition['conditions_findoc']) }}" target="_blank">
                           {{ ucwords($condition['conditions_findoc']) }}
                         </a>
                       </div>
                    </td>
                    <td>{{ ucwords($condition['conditions_date']) }}</td>
                    <td>                     
                      &nbsp;&nbsp;
                      <a href= "javascript:void(0)" record="condition" 
                      recordid="{{ $condition['conditions_id'] }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmDelete" name="Condition" title="Delete Condition Report">
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
