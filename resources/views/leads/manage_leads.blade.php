@extends('main')

@section('dynamic_page')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Support Ticket</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Support Ticket</li>
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
              <h4 class="text-black m-b-1">Support Ticket List</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum raesent mauris nec.</p>
              <div class="row m-t-4">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="info-box bg-darkblue">
                    <div class="col-12">
                      <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
                      <div class="info-box-content">
                        <h6 class="info-box-text text-white">New Orders</h6>
                        <h1 class="text-white">1,150</h1>
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
                          <span class="progress-description text-white"> 45% Increase in 30 Days </span> </div>
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
                            <span class="progress-description text-white"> 50% Increase in 30 Days </span> </div>
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
                              <span class="progress-description text-white"> 35% Increase in 30 Days </span> </div>
                            </div>
                          </div>
                          <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <div class="box-body">
                        <div class="table-responsive">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>ID #</th>
                                <th>Opended by</th>
                                <th>Cust.Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Assign to</th>
                                <th>Date</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>

                            @foreach ($leadsDataArr as $singleValue)
                             <tr>
                                <td>{{ $singleValue['id'] }}</td>
                                {{-- <td><img src="{{ url('') }}/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexander</a></td> --}}
                                <td>{{ $singleValue[''] }}</td>
                                <td>{{ $singleValue[''] }}</td>
                                <td>{{ $singleValue[''] }}</td>
                                {{-- <td><span class="label label-success">Complete</span></td> --}}
                                <td>{{ $singleValue[''] }}</td>
                                <td>{{ $singleValue[''] }}</td>
                                <td>{{ $singleValue[''] }}</td>
                                <td>
                                  <a href="" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></a>
                                  <a href="" class="btn btn-primary btn-sm"><span class="fa fa-trash"></span></a>
                                </td>
                              </tr>

                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                              <th>ID #</th>
                              <th>Opended by</th>
                              <th>Cust.Email</th>
                              <th>Subject</th>
                              <th>Status</th>
                              <th>Assign to</th>
                              <th>Date</th>
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
      $('#example1').DataTable()
      $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
      })
      })
      </script>
      @endpush
