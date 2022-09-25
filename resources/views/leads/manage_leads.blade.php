@extends('main')

@section('dynamic_page')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>The collection of leads is here to see</h1>
      <ol class="breadcrumb">
        <li><a href="#">Manage Leads</a></li>
        <li><i class="fa fa-angle-right"></i> Manage Leads</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <h4 class="text-black m-b-1">Leads Data | Records found {{ $leadsDataArr->count() }}</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum raesent mauris nec.</p>
                  <div class="row m-t-4">
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                      <div class="info-box bg-darkblue">
                        <div class="col-12">
                          <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
                          <div class="info-box-content">
                            <h6 class="info-box-text text-white">Lead records found</h6>
                            <h1 class="text-white">{{ $leadsDataArr->count() }} </h1>
                            <span class="progress-description text-white"> 70% Increase in 30 Days </span>
                          </div>
                        </div>
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                      <div class="info-box bg-green text-white">
                        <div class="col-12">
                          <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
                          <div class="info-box-content">
                            <h6 class="info-box-text text-white">New Users</h6>
                            <h1 class="text-white">565</h1>
                            <span class="progress-description text-white"> 45% Increase in 30 Days </span>
                          </div>
                        </div>
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                      <div class="info-box bg-aqua">
                        <div class="col-12">
                          <span class="info-box-icon bg-transparent"><i class="ti-bar-chart"></i></span>
                          <div class="info-box-content">
                            <h6 class="info-box-text text-white">Online Revenue</h6>
                            <h1 class="text-white">$5,450</h1>
                            <span class="progress-description text-white"> 50% Increase in 30 Days </span>
                          </div>
                        </div>
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-lg-3 col-sm-6 col-xs-12">
                      <div class="info-box bg-orange">
                        <div class="col-12">
                          <span class="info-box-icon bg-transparent"><i class="ti-money"></i></span>
                          <div class="info-box-content">
                            <h6 class="info-box-text text-white">Total Profit</h6>
                            <h1 class="text-white">$8,188</h1>
                            <span class="progress-description text-white"> 35% Increase in 30 Days </span>
                          </div>
                        </div>
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <div class="box-body">
                    <div class="table-responsive">
                      <table id="datatable-leads" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Title</th>
                          <th>Company</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Lead Status</th>
                          <th>Lead Source</th>
                          <th>Country</th>
                          <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($leadsDataArr as $singleValue)
                          <tr>
                            <td><a href="{{ url('/leads/view-lead/' . $singleValue['id']) }}">{{ $singleValue['first_name'] }}</a></td>
                            {{-- <td><img src="{{ url('') }}/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexander</a></td> --}}
                            <td>{{ $singleValue['title'] }}</td>
                            <td>{{ $singleValue['company'] }}</td>
                            <td>{{ $singleValue['email'] }}</td>
                            {{-- <td><span class="label label-success">Complete</span></td> --}}
                            <td>{{ $singleValue['phone_number'] }}</td>
                            <td>{{ $singleValue['lead_status'] }}</td>
                            <td>{{ $singleValue['lead_source'] }}</td>
                            <td>{{ $singleValue['country'] }}</td>

                            <td class="list-inline">
                              <a href="{{ url('/leads/edit-lead/' . $singleValue['id']) }}" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></a>
                              <a href="{{ url('/leads/delete-lead/' . $singleValue['id']) }}" onclick="return confirm('Are you sure you want to delete this record?')" class="btn btn-primary btn-sm"><span class="fa fa-trash"></span></a>
                            </td>
                          </tr>

                        @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                          <th>First Name</th>
                          <th>Title</th>
                          <th>Company</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Lead Status</th>
                          <th>Lead Source</th>
                          <th>Country</th>
                          <th>Actions</th>
                        </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@push('custom-scripts')
  <!-- DataTable -->
  <script src="{{ url('') }}/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ url('') }}/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>
      $(function () {
          $('#datatable-leads').DataTable({
              'paging': true,
              'lengthChange': false,
              'searching': false,
              'ordering': true,
              'info': true,
              'autoWidth': false
          })
      })
  </script>
@endpush
