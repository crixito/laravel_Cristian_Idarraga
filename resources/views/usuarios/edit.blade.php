@extends('layouts.plantilla')

@section('titulo', 'Detalle Usuario')

@section('contenido')
<br>
<h3 class="text-center">Editar Usuario</h3>
<br>
<form action="/usuarios/{{$usuario->id}}" method="post"> 
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreusuario" class="form-label">Nombre del Usuario</label> 
        <input type="text" class="form-control" value="{{$usuario->nombre}}" name="nombre" required="true">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label> 
        <input type="email" class="form-control" value="{{$usuario->email}}" name="email" required="true">
    </div>
    <div class="mb-3">
        <label for="contrasenia" class="form-label">Contraseña</label> 
        <input type="password" class="form-control" value="{{$usuario->contrasenia}}" name="contrasenia" required="true">
    </div>
    {{-- <div class="mb-3">
        <label for="rol" class="form-label">Rol</label>
        <select class="form-control" name="rol">
            <option value="estudiante" @if($usuario->rol == 'estudiante') selected @endif>Estudiante</option>
            <option value="maestro" @if($usuario->rol == 'maestro') selected @endif>Maestro</option>
        </select>
    </div> --}}
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form> 
@endsection