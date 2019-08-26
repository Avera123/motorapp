@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Marcas
                    @can('brands.create')
                    <a href="{{ route('brands.create') }}" 
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
                            @foreach($brands as $brand)
                            <tr>
                                @can('brands.create')
                                <td>{{ $brand->id }}</td>
                                @endcan
                                <td>{{ $brand->name }}</td>
                                @can('brands.show')
                                <td width="10px">
                                    <a href="{{ route('brands.show', $brand->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('brands.edit')
                                <td width="10px">
                                    <a href="{{ route('brands.edit', $brand->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('brands.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['brands.destroy', $brand->id], 
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
                    {{ $brands->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection