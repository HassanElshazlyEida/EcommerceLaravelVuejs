@extends('norda.index')
@section('content')

<div class="about-us-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="about-us-logo">
                    <img src="{{Storage::url(setting()->logo)}}" alt="logo">
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="about-us-content">
                    <h3>Maintenance</h3>
                    <p>{!! setting()->message_maintenance !!}
                    <div class="signature">
                        <h2>{!! setting()->email !!}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
