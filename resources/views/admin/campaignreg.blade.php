
@extends('admin.layout.layout')

@section('content');


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">REGISTERED MEDICAL OUTREACH MEMBERS </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">{{ $campaignone['campaigns_title'] }}</li>
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
                <h3 class="card-title">{{ $campaignone['campaigns_title'] }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tablepagesevent" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Numeber</th>
                    <th>Date Registered</th>
                    <th>Actions </th>
                  </tr>
                  </thead>
                  <tbody> 
                    @foreach($campaignregs as $campaignreg)           
                  <tr>
                    <td>
                       {{ ucwords($campaignreg['campaignregs_name']) }}
                       <span style="display:none">All</span>
                      </td>
                    <td>{{ ucwords($campaignreg['campaignregs_email']) }}</td>
                    <td>{{ ucwords($campaignreg['campaignregs_pnum']) }}</td>
                    <td>{{ ucwords($campaignreg['campaignregs_date']) }}</td>
                    <td>                     
                      <a href= "javascript:void(0)" record="campaignreg" 
                      recordid="{{ $campaignreg['campaignregs_id'] }}" 
                      campaignregs_campaign="{{ $campaignreg['campaignregs_campaign'] }}"   
                      style="color:#ee4b2b;" class="confirmCampaignRegDelete" name="Registered Member" title="Delete The Registered Member">
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