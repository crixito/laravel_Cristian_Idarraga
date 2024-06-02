@extends('layouts.plantilla')

@section('titulo', 'Lista de Usuarios')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@section('contenido')
    <br>
    <h3 class="text-center">Lista de Usuarios</h3>
    <br>
    <div class="row">
        @foreach($usuario as $u)
             <div class="col-auto mb-3"> {{--col-auto ajusta el ancho de la columna automáticamente --}}
                <div class="card" style="width: 18rem;"> {{--class="card" hace que el contenido se vea como una tarjeta --}}
                    <div class="card-body"> {{--class="card-body" hace que el contenido se vea como el cuerpo de una tarjeta --}}
                        <h5> {{$u->nombre}} </h5>
                        <p> <span style="font-weight: bold">Email:</span> {{$u->email}} </p>
                        <p> <span style="font-weight: bold">Contraseña:</span> {{$u->contrasenia}} </p> 
                        {{-- <p> <span style="font-weight: bold">Rol:</span> {{$u->rol}} </p> --}}
                        <div class="d-flex">
                            <a href="/usuarios/{{$u->id}}" style="height: 43px;" class="btn btn-success m-1 p-2" >Ver detalles</a>
                            <form action="/usuarios/{{$u->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger m-1 p-2" >Eliminar</button>
                            </form> 
                        </div>                                                                                              
                    </div>
                </div>
            </div>  
        @endforeach  
    </div>
@endsection