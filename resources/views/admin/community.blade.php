
@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">COMMUNITY REQUESTS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">COMMUNITY REQUESTS</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
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
                <h3 class="card-title">COMMUNITY REQUESTS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <table id="tablepages" class="table table-bordered table-striped">
               
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Organization Name</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City / Town</th>
                    <th>Preferred Date For Outreach</th>
                    <th>Time</th>
                    <th>Special Requirements</th>
                    <th>How did you hear about us</th>

                    <th>Actions </th>
                  </tr>
                
                  <tbody> 
                    @foreach($communities as $community)           
                  <tr>
                    <td>{{ ucwords($community['communities_name']) }}</td>
                    <td>{{ ucwords($community['communities_email']) }}</td>
                    <td>{{ ucwords($community['communities_pnum']) }}</td>
                    <td>{{ ucwords($community['communities_orgname']) }}</td>
                    <td>{{ ucwords($community['communities_country']) }}</td>
                    <td>{{ ucwords($community['communities_state']) }}</td>
                    <td>{{ ucwords($community['communities_city']) }}</td>
                    <td>{{ ucwords($community['communities_outreachdate']) }}</td>
                    <td>{{ ucwords($community['communities_outreachtime']) }}</td>
                    <td>{{ ucwords($community['communities_req']) }}</td>
                    <td>{{ ucwords($community['communities_how']) }}</td>
                    <td>                     
                      <a href= "javascript:void(0)" record="community" 
                      recordid="{{ $community['communities_id'] }}" <?php //"{{  url('admin/delete-cms-page/'.$page['id']) }}" ?> style="color:#ee4b2b;" class="confirmDelete" name="Community Requests" title="Delete The Community Request">
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