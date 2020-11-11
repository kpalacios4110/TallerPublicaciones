@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        @include('publicaciones.search')
    </div>
    <div class="col-md-2">
        <a href="usuarios" class="pull-right">
            <button class="btn btn-danger">Usuarios</button>
        </a>
    </div>
    <div class="col-md-2">
        <a href="publicaciones/create" class="pull-right">
            <button class="btn btn-success">Crear Publicaciones</button>
        </a>
    </div>
    <div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Titulo</th>
                    <th>Cuerpo</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($publicaciones as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->usuarios->nombre}}</td>
                        <td>{{ $p->usuarios->email}}</td>
                        <td>{{ $p->titulo}}</td>
                        <td>{{ $p->cuerpo}}</td>
                        <td>
                            <a href="{{URL::action('PublicacionesController@edit',$p->id)}}"> <button class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$p->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('publicaciones.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$publicaciones->links()}}
    </div>
</div> 
@endsection