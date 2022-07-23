@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url ('/administrador/'.$administrador->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}

@include('administrador.form',['modo'=>'Editar']);
</form>
</div>
@endsection
