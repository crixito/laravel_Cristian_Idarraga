@extends('layouts.plantilla')

@section('titulo', 'Crear Curso')

@section('contenido')
    <br>
    <h3>Crear Nuevo Curso</h3>
    <br>
    <form action="/cursos" method="post"> 
        @csrf
        <div class="mb-3">
            <label for="nombrecurso" class="form-label">Nombre del curso</label> 
            <input type="text" class="form-control" name="nombrecurso" required="true">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label> 
            <input type="text" class="form-control" name="descripcion" required="true">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>    
@endsection