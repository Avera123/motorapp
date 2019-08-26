@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cupones
                    @can('coupons.create')
                    <a href="{{ route('coupons.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        agregar
                    </a> 
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $coupon)
                            <tr>
                                @can('coupons.create')
                                <td>{{ $coupon->id }}</td>
                                @endcan
                                <td>{{ $coupon->name }}</td>
                                @can('coupons.show')
                                <td width="10px">
                                    <a href="{{ route('coupons.show', $coupon->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('coupons.edit')
                                <td width="10px">
                                    <a href="{{ route('coupons.edit', $coupon->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('coupons.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['coupons.destroy', $coupon->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $coupons->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection