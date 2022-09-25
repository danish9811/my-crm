@extends('main')
@section('dynamic_page')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Conver Lead</h1>
      <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Convert Lead</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">

              <div class="row">
                <div class="col-6">

                  <h4 class="text-black">Convert Lead
                    <span class="font-weight-bold">{{ $lead['first_name'] . ' ' .  $lead['last_name'] . ' ' . $lead['company'] }}</span>
                  </h4>

                  <p>create new account <span class="badge badge-primary mt-4">badge badge primary</span></p>
                  <p>create new contact <span class="badge badge-dark">badge badge-dark</span></p>

                  <h4>Create new Deal</h4>

                  <form class="mt-3" action="{{ url('leads/convert-lead/'. $lead['id']) }}" method="post">
                    @csrf

                    <div class="form-group">
                      <label for="amount" class="control-label">Amount <span class="text-danger">*</span></label>
                      <input id="amount" class="form-control" type="number" step="any" placeholder="amount" name="amount" required>
                    </div>

                    <div class="form-group">
                      <label for="deal-name">Deal Name <span class="text-danger">*</span></label>
                      <input id="deal-name" class="form-control" type="text" placeholder="Deal Name" name="deal_name" required>
                      @error('deal_name')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="closing-date">Closing date <span class="text-danger">*</span></label>
                      <input class="form-control" type="date" placeholder="Closing Date" name="closing_date" required>
                      @error('closing_data')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                    </div>

                    @php $leadStatusArray = ['Qualifications', 'Needs Analysis', 'Proposal / Leads Quotes', 'Negotiation', 'Closed / Won', 'Closed Lost']; @endphp

                    <div class="form-group has-feedback">
                      <label for="lead-stage" class="control-label">Lead Source</label>
                      <select id="lead-stage" class="form-control" name="deal_stage">
                        @foreach ($leadStatusArray as $element)
                          <option value="{{ $element }}">{{ $element }}</option>
                        @endforeach
                      </select>
                      <span class="fa fa-globe form-control-feedback" aria-hidden="true"></span>
                      <!-- error not handled for validation, but still we are showing its error -->
                      @error('deal_stage')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="form-group text-right">
                      <input class="btn btn-primary" type="submit" value="submit" name="submit">
                      <a class="btn btn-secondary ml-3" href="{{ url('leads/manage-leads') }}">Cancel</a>
                    </div>

                  </form>

                </div>

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
