<h1>Formulario que tendra datos en comun con create</h1>
<br>
<br>
<h1>{{ $modo }} empleado </h1>

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all () as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>
</div>



<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->nombre) ?$empleado->nombre:''}}" id="Nombre">

    <!-- <input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->nombre) ?$empleado->nombre:old('nombre')}}" id="Nombre">  Se hace para que guarde los datos en caso de no completar el formulario -->
</div>


<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{  isset ($empleado->ApellidoPaterno) ?$empleado->ApellidoPaterno:''}}" id="ApellidoPaterno">
</div>


<div class="form-group">
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno) ?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">
</div>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{ isset($empleado->Correo) ?$empleado->Correo:'' }}" id="Correo">
</div>

<label for="Foto"> </label>

@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{  asset ('storage'). '/'.$empleado->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" id="Foto">


<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('empleado/')}}">Regresar</a>