@extends('layouts.plantilla')

@section('titulo', 'Lista de Palabras')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@section('contenido')
    <br>
    <h3 class="text-center">Lista de Palabras</h3>
    <br>
    <div class="row">
        @foreach($palabra as $p)
             <div class="col-auto"> {{--col-auto ajusta el ancho de la columna automáticamente --}}
                @if($p->imagen)
                    <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($p->imagen) }}" class="card-img-top mx-auto d-block">
                @endif
                <div class="card" style="width: 18rem;"> {{--class="card" hace que el contenido se vea como una tarjeta --}}
                    <div class="card-body"> {{--class="card-body" hace que el contenido se vea como el cuerpo de una tarjeta --}}
                        <h5> {{$p->nombre}} </h5>
                        <p> {{$p->descripcion}} </p>
                        <div class="d-flex">
                            <a href="/palabras/{{$p->id}}" style="height: 43px;" class="btn btn-success m-1 p-2">Ver detalles</a>
                            <form action="/palabras/{{$p->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger m-1 p-2">Eliminar</button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>  
        @endforeach  
    </div>
@endsection