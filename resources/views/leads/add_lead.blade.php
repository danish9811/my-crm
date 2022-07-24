@extends('main')
@section('dynamic_page')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Form layouts</h1>

    <!-- tiny bread crumb at the right of the page -->
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Form layouts</li>
    </ol>

  </div>
  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card ">
          <!-- page name -->
          <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Lead Information</h5>
          </div>

          <!-- card body start -->
          <div class="card-body">

            <form method="post" action="">
              @csrf

              <div class="row">

                <!-- single colomn for first anme -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">First Name</label>
                    <input class="form-control" placeholder="First Name" type="text">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- single colomn for last name -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Last Name</label>
                    <input class="form-control" placeholder="Last Name" type="text">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- single colomn for email -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">E-mail</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- single colomn for number -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Contact Number</label>
                    <input class="form-control" placeholder="Contact Number" type="text">
                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- single colomn for company -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Company</label>
                    <input class="form-control" placeholder="Company" type="text">
                    <span class="fa fa-briefcase form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- drop down single -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Lead Source</label>
                    <select class="form-control" name="" id="">
                      <option value="">1</option>
                      <option value="">2</option>
                      <option value="">3</option>
                      <option value="">4</option>
                      <option value="">5</option>
                    </select>
                    <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- single field -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Website</label>
                    <input class="form-control" placeholder="https://" type="text">
                    <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- text area -->
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Bio</label>
                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Bio"></textarea>
                  </div>
                </div>





                <!-- submit button -->
                <div class="col-md-12">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>
                <!-- end submit button -->

              </form>
              <!-- form ends here -->


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->
  @endsection
