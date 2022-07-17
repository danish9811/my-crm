@extends('main')
@section('dynamic_page')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1>Form layouts</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Form layouts</li>
    </ol>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <div class="card ">
          <div class="card-header bg-blue">
            <h5 class="text-white m-b-0">Lead Information</h5>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">First Name</label>
                    <input class="form-control" placeholder="First Name" type="text">
                    <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label class="control-label">Last Name</label>
                      <input class="form-control" placeholder="Last Name" type="text">
                      <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group has-feedback">
                        <label class="control-label">E-mail</label>
                        <input class="form-control" placeholder="E-mail" type="text">
                        <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group has-feedback">
                          <label class="control-label">Contact Number</label>
                          <input class="form-control" placeholder="Contact Number" type="text">
                          <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group has-feedback">
                            <label class="control-label">Company</label>
                            <input class="form-control" placeholder="Company" type="text">
                            <span class="fa fa-briefcase form-control-feedback" aria-hidden="true"></span> </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group has-feedback">
                              <label class="control-label">Website</label>
                              <input class="form-control" placeholder="https://" type="text">
                              <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group has-feedback">
                                <label class="control-label">Bio</label>
                                <textarea class="form-control" id="placeTextarea" rows="3" placeholder="Bio"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">

                              <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->
              @endsection
