@extends('main')
@section('dynamic_page')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Blank page</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Blank page</li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <h4 class="text-black">Convert Lead
              <span class="font-weight-bold">{{ $lead['first_name'] . ' ' .  $lead['last_name'] . ' ' . $lead['company'] }}
              </span>
            </h4>

            <p>create new account <span class="badge badge-primary mt-4">badge badge primary</span></p>
            <p>create another new account <span class="badge badge-danger">badge badge-danger</span></p>

            <!-- create a form here to convert the lead into deal | i don't know what it is just watch thw HOWS -->



          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
