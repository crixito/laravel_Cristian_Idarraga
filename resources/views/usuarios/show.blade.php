@extends('layouts.plantilla')

@section('titulo', 'Detalle Usuario')

@section('contenido')
<br>
<h3 class="text-center">Detalle de Usuario</h3>
<br>
<div class="col-auto">
    <div class="card" style="width: 18rem;"> {{--class="card" hace que el contenido se vea como una tarjeta --}}
        <div class="card-body"> {{--class="card-body" hace que el contenido se vea como el cuerpo de una tarjeta --}}
            <h5> {{$usuario->nombre}} </h5>
            <p> <span style="font-weight: bold">Email:</span> {{$usuario->email}} </p>
            <p> <span style="font-weight: bold">Contraseña:</span> {{$usuario->contrasenia}} </p> 
            <p> <span style="font-weight: bold">Rol:</span> {{$usuario->rol}} </p>
            <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-primary">Editar Usuario</a>                                                                                               
        </div>
    </div>
</div>
@endsection