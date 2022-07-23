@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
            
            {{ Session::get('mensaje')}}
           
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif





<a href="{{ url('administrador/create')}}" class="btn btn-success m-2">Registrar nuevo Servicio</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Titulo del Servicio</th>
            <th>Precio del servicio</th>
            <th>Imagen del servicio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($administrador as $administrador)
        <tr>
            <td>{{ $administrador->id}}</td>
            <td>{{ $administrador->tituloServicio}}</td>
            <td>{{ $administrador->precioServicio}}</td>

            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$administrador->imagenServicio }}" width="100" alt="">
                
            </td>
            
            <td> 
                
            <a href="{{ url('/administrador/'.$administrador->id.'/edit')}}" class="btn btn-warning">Editar</a>
            
            || 

            <form action="{{ url('/administrador/'.$administrador->id)}}" class="d-inline" method="post" >
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres Borrar?')" class="btn btn-danger" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
