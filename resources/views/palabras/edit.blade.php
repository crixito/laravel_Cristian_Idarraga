@extends('layouts.plantilla')

@section('titulo', 'Editar Palabra')

@section('contenido')
    <br>
    <h3 class="text-center">Editar Palabra</h3>
    <br>
    <form action="/palabras/{{$palabra->id}}" method="post" enctype="multipart/form-data"> 
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nombrecurso" class="form-label">Nombre de palabra</label> 
            <input type="text" class="form-control" value="{{$palabra->nombre}}" name="nombre" required="true">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label> 
            <textarea class="form-control" name="descripcion" required="true">{{$palabra->descripcion}}</textarea>
        </div>
        {{-- <div class="form-group">
            <label for="imagen">Cargar imagen</label>
            <br>
            <input name="imagen" id="imagen" type="file">
        </div> --}}
        <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>    
@endsection