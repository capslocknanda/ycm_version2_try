@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="text-center font-weight-bolder"><h1>{{ __('Top Heading') }}</h1></div>
    <div class="row pt-2 ">
        <div class="col-5 grid-margin ">

        </div>
        <div class="col-2 grid-margin ">
            <input type="date" class="form-control" id="inputmetal8" >
        </div>
        <div class="col-5 grid-margin ">

        </div>
    </div>


    <div class="row">
        <div class="col-2">
                <div class="card-body">
                <div class = "d-flex pr-5 font-weight-bold"><strong>{{ __('Parameter1') }}</strong>
                    <div class="pr-5 pl-5"><button class="btn h-16 w-16 btn-outline-primary btn-rounded btn-fw "> 1</button></div>
{{--                    btn-lg -- for bigger button--}}
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw "> 2</button></div>
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> 3</button></div>
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> 4</button></div>
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> 5</button></div>
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> 6</button></div>
                </div>
            </div>
            </div>
    </div>
    <div class="row">
        <div class="col-6">
                <div class="card-body">
                <div class = "d-flex pr-5 font-weight-bold"><strong>{{ __('Parameter2') }}</strong>
                    <div class="pr-5 pl-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> 300L</button></div>
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> 300M</button></div>
                </div>
            </div>
        </div>
        <div class="col-6">
                <div class="card-body">
                <div class = "d-flex pr-5 font-weight-bold"><strong>{{ __('Parameter3') }}</strong>
                    <div class="pr-5 pl-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> EAST</button></div>
                    <div class="pr-5"><button class="btn btn-outline-primary btn-rounded btn-fw"> WEST</button></div>
                </div>
            </div>
        </div>
    </div>

<div class="row pt-1">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{ __('Unit1') }}</h4>
{{--        <p class="card-description"> Add class <code>.table-striped</code> </p>--}}
          <div class="form-row">
              <div class="form-group col-md-2 card">
                  <label for="inputmetal1">{{ __('Metal1') }}</label>
                  <input type="number" class="form-control" id="inputmetal1" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal2">{{ __('Metal2') }}</label>
                  <input type="number" class="form-control" id="inputmetal2" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal3">{{ __('Metal3') }}</label>
                  <input type="number" class="form-control" id="inputmetal3" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal4">{{ __('Metal4') }}</label>
                  <input type="number" class="form-control" id="inputmetal4" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal5">{{ __('Metal5') }}</label>
                  <input type="number" class="form-control" id="inputmetal5" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal6">{{ __('Metal6') }}</label>
                  <input type="number" class="form-control" id="inputmetal6" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal7">{{ __('Metal7') }}</label>
                  <input type="number" class="form-control" id="inputmetal7" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal8">{{ __('Metal8') }}</label>
                  <input type="number" class="form-control" id="inputmetal8" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal9">{{ __('Metal9') }}</label>
                  <input type="number" class="form-control" id="inputmetal9" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal10">{{ __('Metal10') }}</label>
                  <input type="number" class="form-control" id="inputmetal10" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal11">{{ __('Metal11') }}</label>
                  <input type="number" class="form-control" id="inputmetal11" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal2">{{ __('Metal12') }}</label>
                  <input type="number" class="form-control" id="inputmetal12" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal13">{{ __('Metal13') }}</label>
                  <input type="number" class="form-control" id="inputmetal13" >
              </div>
              <div class="form-group col-md-2 card">
                  <label for="inputmetal14">{{ __('Metal14') }}</label>
                  <input type="number" class="form-control" id="inputmetal14" >
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="row pt-1">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Unit2') }}</h4>
                    {{--        <p class="card-description"> Add class <code>.table-striped</code> </p>--}}
                    <div class="form-row">
                        <div class="form-group col-md-2 card">
                            <label for="inputmetal15">{{ __('Metal15') }}</label>
                            <input type="number" class="form-control" id="inputmetal15" >
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="inputmetal16">{{ __('Metal16') }}</label>
                            <input type="number" class="form-control" id="inputmetal16" >
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="inputmetal17">{{ __('Metal17') }}</label>
                            <input type="number" class="form-control" id="inputmetal17" >
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="inputmetal18">{{ __('Metal18') }}</label>
                            <input type="number" class="form-control" id="inputmetal18" >
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="inputmetal19">{{ __('Metal19') }}</label>
                            <input type="number" class="form-control" id="inputmetal19" >
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="inputmeta20">{{ __('Metal20') }}</label>
                            <input type="number" class="form-control" id="inputmetal20" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-2 ">
        <div class="col-4 grid-margin ">

        </div>
        <div class="col-4 grid-margin ">
            <button type="button" class="btn btn-primary btn-lg btn-block "><strong>{{ __('Confirm') }}</strong></button>
        </div>
        <div class="col-4 grid-margin ">

        </div>
    </div>

@endsection

@push('plugin-scripts')
@endpush

@push('custom-scripts')
@endpush
