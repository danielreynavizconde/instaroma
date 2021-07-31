@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Sliders</h1>
@stop

@section('content')
<div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.categorias.create')}}">Crear</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>url</th>
                        <th>activo</th>                        
                        <th colspan="3"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto) 
                        <tr>
                            <td>{{$producto->id}}</td>
                            <td>{{$producto->url}}</td>
                            <td>{{$producto->activo}}</td>                            
                            <td width="10px"><a class="btn btn-info" href="{{route('admin.productos.edit',$producto)}}">Ver</a></td>
                            <td width="10px"><a class="btn btn-primary" href="{{route('admin.productos.edit',$producto)}}">Editar</a></td>
                            
                            <td width="10px">
                                <form action="{{route('admin.productos.destroy',$producto)}}" method="post">
                                @csrf    
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

