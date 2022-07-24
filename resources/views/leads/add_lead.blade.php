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
      <li><i class="fa fa-angle-right"></i> Add Lead</li>
    </ol>

  </div>
  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card p-3">
          <!-- page name -->
          <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Lead basic information</h5>
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


                <!-- single colomn for title -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Title</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
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

                <!-- single colomn for phone number -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Phone Number</label>
                    <input class="form-control" placeholder="Contact Number" type="text">
                    <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>



                <!-- drop lead status -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Lead Status</label>
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




                <!-- text area -->
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Bio</label>
                    <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Bio"></textarea>
                  </div>
                </div>


                <!-- second heading for address information -->
                <div class="col-md-12">
                  <h2 class="text-capitalize text-center p-3 m-3">Address Information</h2>
                </div>

                <!-- street -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Street</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- city -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">City</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>


                <!-- state -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">State</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>

                <!-- zipcode -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Zip Code</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>


                <!-- country -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Country</label>
                    <input class="form-control" placeholder="E-mail" type="text">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>


                <!-- bio -->
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Bio</label>
                    <input class="form-control pb-2" placeholder="E-mail" type="textarea">
                    <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
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
