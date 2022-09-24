@extends('main')
@section('dynamic_page')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Form layouts</h1>

      <!-- tiny bread crumb at the right of the page -->
      <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> Add Lead Inforamtion</li>
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

              <!-- the action is page itself, no other route will handle the action -->
              <form method="post" action="" autocomplete="off">
                @csrf

                <div class="row">

                  <!-- single colomn for first anme -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label class="control-label" for="firstname">First Name <span class="text-danger">*</span></label>
                      <input id="firstname" class="form-control" placeholder="First Name" type="text" name="first_name" value="{{ old('first_name') }}">
                      <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                      @error('first_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- single colomn for last name -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="lastname" class="control-label">Last Name<span class="text-danger">*</span></label>
                      <input id="lastname" class="form-control" placeholder="Last Name" type="text" name="last_name" value="{{ old('last_name') }}">
                      <span class="fa fa-user form-control-feedback" aria-hidden="true"></span>
                      @error('last_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- single colomn for title -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="title" class="control-label">Title<span class="text-danger">*</span></label>
                      <input id="title" class="form-control" placeholder="title" type="text" name="title" value="{{ old('title') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      @error('title')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- single colomn for compoany -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="company" class="control-label">Company<span class="text-danger">*</span></label>
                      <input id="company" class="form-control" placeholder="E-mail" type="text" name="company" value="{{ old('company') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      @error('company')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- single colomn for email -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="email" class="control-label">E-mail<span class="text-danger">*</span></label>
                      <input id="email" class="form-control" placeholder="E-mail" type="email" name="email" value="{{ old('email') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      @error('email')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- single colomn for phone number -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="phonenumber" class="control-label">Phone Number<span class="text-danger">*</span></label>
                      <input id="phonenumber" class="form-control" placeholder="Contact Number" type="text" name="phone_number" value="{{ old('phone_number') }}">
                      <span class="fa fa-phone form-control-feedback" aria-hidden="true"></span>
                      @error('phone_number')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- todo : make this array dynamic too : grab from controller | create seperate table this kind of things | or put in seed -->
                @php $leadStatusArray = ['Advertising', 'Social media', 'Direct call', 'Search'];@endphp

                <!-- drop lead status -->
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label for="lead_status" class="control-label">Lead Status</label>
                    <select id="lead_status" class="form-control" name="lead_status">
                      @foreach($leadStatusArray as $singleValue)
                        <option value="{{ $singleValue }}">{{ $singleValue }}</option>
                      @endforeach
                    </select>
                    <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                    <!-- error not handled for validation, but still we are showing its error -->
                    @error('lead_status')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                </div>

                @php $leadStatusArray = ['Qualifications', 'Needs Analysis', 'Proposal / Leads Quotes', 'Negotiation', 'Closed / Won', 'Closed Lost']; @endphp

                <!-- drop down single -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="lead_source" class="control-label">Lead Source</label>
                      <select id="lead_source" class="form-control" name="lead_source">
                        @foreach ($leadStatusArray as $element)
                          <option value="{{ $element }}">{{ $element }}</option>
                        @endforeach
                      </select>
                      <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('lead_source')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- second heading for address information -->
                  <div class="col-md-12 bg-info text-white mb-4">
                    <h2 class="text-capitalize text-center p-3 m-3">Address Information</h2>
                  </div>

                  <!-- street -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="street" class="control-label">Street</label>
                      <input id="street" class="form-control" placeholder="street number" type="text" name="street" value="{{ old('street') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('street')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- city -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="city" class="control-label">City</label>
                      <input id="city" class="form-control" placeholder="city name" type="text" name="city" value="{{ old('city') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('city')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- state -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="state" class="control-label">State</label>
                      <input id="state" class="form-control" placeholder="state information" type="text" name="state" value="{{ old('state') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('state')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- zipcode -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="zip_code" class="control-label">Zip Code</label>
                      <input id="zip_code" class="form-control" placeholder="zip code" type="text" name="zip_code" value="{{ old('zip_code') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('zip_code')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- country -->
                  <div class="col-md-6">
                    <div class="form-group has-feedback">
                      <label for="country" class="control-label">Country</label>
                      <input id="country" class="form-control" placeholder="country name" type="text" name="country" value="{{ old('country') }}">
                      <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('country')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- second heading for address information -->
                  <div class="col-md-12 bg-info text-white mb-4">
                    <h2 class="text-capitalize text-center p-3 m-3">Decsription Information</h2>
                  </div>

                  <!-- text area -->
                  <div class="col-md-12">
                    <div class="form-group has-feedback">
                      <label for="description" class="control-label">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="3" placeholder="Bio" value="{{ old('description') }}">{{ old('description') }}</textarea>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('description')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <!-- submit button -->
                  <div class="col-md-12">
                    <div class="col-md-12">
                      <button type="submit" name="submit" value="submit" class="btn btn-success">Add Lead</button>
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
