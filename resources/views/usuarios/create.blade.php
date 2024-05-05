@extends('layouts.plantilla')

@section('titulo', 'Crear Usuario')

@section('contenido')
    <br>
    <h3>Crear Nuevo Usuario</h3>
    <br>
    <form action="/usuarios" method="post"> 
        @csrf
        <div class="mb-3">
            <label for="nombreusuario" class="form-label">Nombre del Usuario</label> 
            <input type="text" class="form-control" name="nombreusuario" required="true">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label> 
            <input type="email" class="form-control" name="email" required="true">
        </div>
        <div class="mb-3">
            <label for="contrasenia" class="form-label">Contraseña</label> 
            <input type="password" class="form-control" name="contrasenia" required="true">
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select class="form-control" name="rol">
                <option value="estudiante">Estudiante</option>
                <option value="maestro">Maestro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>    
@endsection