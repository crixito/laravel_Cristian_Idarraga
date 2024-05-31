@extends('layouts.plantilla')

@section('titulo', 'Crear Palabra')

@section('contenido')
    <br>
    <h3>Crear Nueva Palabra</h3>
    <br>
    <form action="/cursos" method="post" enctype="multipart/form-data"> 
        @csrf
        <div class="mb-3">
            <label for="nombrecurso" class="form-label">Nombre de Palabra</label> 
            <input type="text" class="form-control" name="nombrecurso" required="true">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label> 
            <textarea class="form-control" name="descripcion" required="true"></textarea>
        </div>
        {{-- <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
        </div> --}}
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>    
@endsection