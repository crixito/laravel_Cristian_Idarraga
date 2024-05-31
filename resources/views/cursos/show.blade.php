@extends('layouts.plantilla')

@section('titulo', 'Detalle Palabra')

@section('contenido')
<br>
<h3 class="text-center">Detalle de Palabra</h3>
<br>
<div class="col-auto"> {{--col-auto ajusta el ancho de la columna automáticamente --}}
    @if($curso->imagen)
        <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($curso->imagen) }}" class="card-img-top mx-auto d-block">
    @endif
    <div class="card" style="width: 18rem;"> {{--class="card" hace que el contenido se vea como una tarjeta --}}
        <div class="card-body"> {{--class="card-body" hace que el contenido se vea como el cuerpo de una tarjeta --}}
            <h5> {{$curso->nombre}} </h5>
            <p> {{$curso->descripcion}} </p>
            <a href="/cursos/{{$curso->id}}/edit" class="btn btn-primary">Editar Palabra</a>
        </div>
    </div>
</div> 
@endsection