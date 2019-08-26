@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Marcas</h1>
        @foreach ($brands as $brand)
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ $brand->name }}
                </div>
                <div class="panel-body">
                    @if($brand->logoUrl)
                        <img src="{{ $brand->logoUrl }}" class="img-responsive">
                    @endif
                    @if($brand->description)
                        <a href="{{ route('description',$brand->slug) }}" class="pull-right">Leer más</a>
                    @endif
                </div>
            </div>
        @endforeach
        {{ $brands->render() }}
    </div>
</div>
@endsection