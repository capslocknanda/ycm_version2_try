@extends('layout.master')

@push('plugin-styles')
@endpush

@section('content')
<div class="text-center font-weight-bolder"><h1>{{ __('Top Heading2') }}</h1></div>

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
</div>

<div class="row pt-1">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ __('Unit2.1') }}</h4>
                {{--        <p class="card-description"> Add class <code>.table-striped</code> </p>--}}
                <div class="form-row">
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal21">{{ __('Metal21') }}</label>
                        <input type="number" class="form-control" id="inputmetal21" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal22">{{ __('Metal22') }}</label>
                        <input type="number" class="form-control" id="inputmetal22" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal23">{{ __('Metal23') }}</label>
                        <input type="number" class="form-control" id="inputmetal23" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal24">{{ __('Metal24') }}</label>
                        <input type="number" class="form-control" id="inputmetal24" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal25">{{ __('Metal25') }}</label>
                        <input type="number" class="form-control" id="inputmetal25" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal26">{{ __('Metal26') }}</label>
                        <input type="number" class="form-control" id="inputmetal26" >
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
                <h4 class="card-title">{{ __('Unit2.2') }}</h4>
                {{--        <p class="card-description"> Add class <code>.table-striped</code> </p>--}}
                <div class="form-row">
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal27">{{ __('Metal27') }}</label>
                        <input type="number" class="form-control" id="inputmetal27" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal28">{{ __('Metal28') }}</label>
                        <input type="number" class="form-control" id="inputmetal28" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal29">{{ __('Metal29') }}</label>
                        <input type="number" class="form-control" id="inputmetal29" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal30">{{ __('Metal30') }}</label>
                        <input type="number" class="form-control" id="inputmetal30" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal31">{{ __('Metal31') }}</label>
                        <input type="number" class="form-control" id="inputmetal31" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal32">{{ __('Metal32') }}</label>
                        <input type="number" class="form-control" id="inputmetal32" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal33">{{ __('Metal33') }}</label>
                        <input type="number" class="form-control" id="inputmetal33" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal34">{{ __('Metal34') }}</label>
                        <input type="number" class="form-control" id="inputmetal34" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal35">{{ __('Metal35') }}</label>
                        <input type="number" class="form-control" id="inputmetal35" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal36">{{ __('Metal36') }}</label>
                        <input type="number" class="form-control" id="inputmetal36" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal37">{{ __('Metal37') }}</label>
                        <input type="number" class="form-control" id="inputmetal37" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal38">{{ __('Metal38') }}</label>
                        <input type="number" class="form-control" id="inputmetal38" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal39">{{ __('Metal39') }}</label>
                        <input type="number" class="form-control" id="inputmetal39" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal40">{{ __('Metal40') }}</label>
                        <input type="number" class="form-control" id="inputmetal40" >
                    </div>
                    <div class="form-group col-md-2 card">
                        <label for="inputmetal41">{{ __('Metal41') }}</label>
                        <input type="number" class="form-control" id="inputmetal41" >
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
