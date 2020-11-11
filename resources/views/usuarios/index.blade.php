@extends('layoutUsuario.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-8 col-xs-12">
        @include('usuarios.search')
    </div>
    <div class="col-md-2">
        <a href="usuarios/create" class="pull-right">
            <button class="btn btn-danger">Crear Usuarios</button>
        </a>
    </div>
    <div class="col-md-2">
        <a href="publicaciones" class="pull-right">
            <button class="btn btn-success">Publicaciones</button>
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
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($usuarios as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nombre}}</td>
                        <td>{{ $s->email}}</td>
                        <td>
                            <a href="{{URL::action('UsuarioController@edit',$s->id)}}"> <button class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$s->id}}" data-toggle="modal"> <button class="btn btn-danger">Eliminar</button></a>
                        </td>
                    </tr>
                    @include('usuarios.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$usuarios->links()}}
    </div>
</div> 
@endsection