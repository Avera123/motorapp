@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cupones</div>

                <div class="panel-body">                    
                    {!! Form::model($coupon, ['route' => ['coupons.update', $coupon->id],
                    'method' => 'PUT']) !!}

                        @include('coupons.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection