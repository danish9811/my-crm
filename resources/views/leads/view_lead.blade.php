@extends('main')
@section('dynamic_page')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>{{ $lead['first_name'] }} | Information</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Single Lead information</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="col-lg-8">
                <h2 class="text-center">Lead Information</h2>
                <table class="table">
                  <tr>
                    <td class="text-right">id</td>
                    <td class="text-dark">{{ $lead['id'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Firstname</td>
                    <td class="text-dark">{{ $lead['first_name'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Lastname</td>
                    <td class="text-dark">{{ $lead['last_name'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Title</td>
                    <td class="text-dark">{{ $lead['title'] }}</td>
                  </tr>
                </table>
              </div>

              <div class="col-lg-8">
                <h2 class="text-center">Company Information</h2>
                <table class="table">
                  <tr>
                    <td class="text-right">Company</td>
                    <td class="text-dark">{{ $lead['company'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Email</td>
                    <td class="text-dark">{{ $lead['email'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Phone Number#</td>
                    <td class="text-dark">{{ $lead['phone_number'] }}</td>
                  </tr>
                </table>
              </div>

              <div class="col-lg-8">
                <h2 class="text-center">More Information</h2>
                <table class="table">
                  <tr>
                    <td class="text-right">Lead Status</td>
                    <td class="text-dark">{{ $lead['lead_status'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Lead Source</td>
                    <td class="text-dark">{{ $lead['lead_source'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Street</td>
                    <td class="text-dark">{{ $lead['street'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">City</td>
                    <td class="text-dark">{{ $lead['city'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">State</td>
                    <td class="text-dark">{{ $lead['state'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Zip Code</td>
                    <td class="text-dark">{{ $lead['zip_code'] }}</td>
                  </tr>
                  <tr>
                    <td class="text-right">Country</td>
                    <td class="text-dark">{{ $lead['country'] }}</td>
                  </tr>
                </table>
              </div>

              <div class="col-lg-8">
                <h2 class="text-center">Description</h2>
                <p class="text-center">{{ $lead['description'] }}</p>
                <a href="{{ url('/leads/convert-lead/'.$lead['id']) }}" class="btn btn-primary btn-sm">Convert</a>
                <a href="{{ url('/leads/edit-lead/'.$lead['id']) }}" class="btn btn-primary btn-sm ml-2">Edit</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
