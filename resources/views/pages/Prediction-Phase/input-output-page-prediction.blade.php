@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
    <div class="text-center font-weight-bolder"><h1>{{ __('Top Heading3') }}</h1></div>

    <div class="row pt-2 ">
        <div class="col-5 grid-margin ">

        </div>
        <div class="col-2 grid-margin ">
            <input type="date" class="form-control" id="inputdate" >
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
    </div>
    <div class="row pt-2 ">
        <div class="col-4 grid-margin ">

        </div>
        <div class="col-4 grid-margin ">
            <button type="button" class="btn btn-primary btn-lg btn-block "><strong>{{ __('Prediction') }}</strong></button>
        </div>
        <div class="col-4 grid-margin ">

        </div>
    </div>

    <div class="text-center font-weight-bolder">{{ __('AI Recommended Value (KG)') }}</div>

    <div class="row pt-1">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-2 card">
                            <label for="pred_value_ce_1">{{ __('Metal23') }}</label>
                            <input type="number" class="form-control" id="pred_value_ce_1" >
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                            <div class="pt-2"><input type="number" class="form-control" id="pred_value_ce_2" ></div>
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="pred_value_c_1">{{ __('Metal28') }}</label>
                            <input type="number" class="form-control" id="pred_value_c_1" >
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                            <div class="pt-2"><input type="number" class="form-control" id="pred_value_c_2" ></div>
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="pred_value_cu_1">{{ __('Metal10') }}</label>
                            <input type="number" class="form-control" id="pred_value_cu_1" >
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                            <div class="pt-2"><input type="number" class="form-control" id="pred_value_cu_2" ></div>
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="pred_value_si_1">{{ __('Metal29') }}</label>
                            <input type="number" class="form-control" id="pred_value_si_1" >
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                            <div class="pt-2"><input type="number" class="form-control" id="pred_value_si_2" ></div>
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                        </div>
                        <div class="form-group col-md-2 card">
                            <label for="pred_value_mu_1">{{ __('Metal34') }}</label>
                            <input type="number" class="form-control" id="pred_value_mu_1" >
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                            <div class="pt-2"><input type="number" class="form-control" id="pred_value_mu_2" ></div>
{{--                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>--}}
                        </div>
                        <div class="form-group col-md-1 card">
                            <div class="pt-4"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>
                            <div class="pt-2"><button type="button" class="btn btn-outline-primary">{{ __('Confirm') }}</button></div>
                        </div>
                        <div class="form-group col-md-1 card">
                            <label for="pred_value_ac_1">{{ __('Parameter4') }}</label>
                            <input type="number" readonly class="form-control-plaintext" id="pred_value_ac_1" >
                            <div class="pt-2"><input type="number" readonly class="form-control-plaintext" id="pred_value_ac_2" ></div>
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
