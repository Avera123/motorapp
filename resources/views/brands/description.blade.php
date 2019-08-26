@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>{{ $brand->name }}</h1>
        
        <div class="panel panel-default">
            <div class="panel-heading">
            {{ $brand->name }}
            </div>
            <div class="panel-body">
                @if($brand->logoUrl)
                    <img src="{{ $brand->logoUrl }}" class="img-responsive">
                @endif
                @if($brand->description)
                    {{ $brand->description }}
                @endif
            </div>
        </div>
        
        
    </div>
</div>
@endsection