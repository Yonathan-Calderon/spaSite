<h1>{{ $modo }} Servicio</h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>

  

@endif

<div class="form-group">

<label for="">Nombre:</label>
        <input type="text" class="form-control mt-3" name="tituloServicio" value="{{ isset($administrador->tituloServicio)?$administrador->tituloServicio:''}}" id="tituloServicio">
       
        <label for="">Precio:</label>
        <input type="text" class="form-control mt-3" name="precioServicio" value="{{ isset($administrador->precioServicio)?$administrador->precioServicio:''}}" id="precioServicio">
        
        <label for="">Imagen:</label><br>
        
        @if( isset($administrador->imagenServicio))
        <img src="{{ asset('storage').'/'.$administrador->imagenServicio }}" class="img-thumbnail img-fluid" width="100" alt="">
        @endif
        <input type="file" class="form-control mt-3" name="imagenServicio" value="" id="imagenServicio">
        
        <input type="submit" class="btn btn-success mt-3" value="{{ $modo }} Datos">

        <a href="{{ url('administrador/')}}" class="btn btn-primary mt-3">Regresar </a>
        </div>