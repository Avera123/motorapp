@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Marca</div>

                <div class="panel-body">                                        
                    <p><strong>Nombre</strong>     {{ $coupon->name }}</p>
                    <p><strong>Descripción</strong>  {{ $coupon->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection