@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $coupon->name }}</h1>
        
        <div class="panel panel-default">
            <div class="panel-heading">
            {{ $coupon->name }}
            Marca
            <a href="{{ route('couponsBrand', $coupon->brand->slug) }}">{{ $coupon->brand->name }}</a>
            </div>
            <div class="panel-body">
                @if($coupon->imgUrl)
                    <img src="{{ $coupon->imgUrl }}" class="img-responsive">
                @endif
                @if($coupon->description)
                    {{ $coupon->description }}
                @endif
                <hr>
                {!! $coupon->startDate !!}
                {!! $coupon->endingDate !!}
            </div>
        </div>
        
        
    </div>
</div>
@endsection