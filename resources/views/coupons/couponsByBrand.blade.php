@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Cupones de la marca {{ $brand->name }}</h1>
        @foreach ($coupons as $coupon)
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ $coupon->name }}
                </div>
                <div class="panel-body">
                    @if($coupon->imgUrl)
                        <img src="{{ $coupon->imgUrl }}" class="img-responsive">
                    @endif                    
                    <a href="{{ route('descriptionCoupon',$coupon->id) }}" class="pull-right">Leer más</a>                    
                </div>
            </div>
        @endforeach
        {{ $coupons->render() }}
    </div>
</div>
@endsection