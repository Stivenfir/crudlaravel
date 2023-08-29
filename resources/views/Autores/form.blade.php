
<h1>{{$modo}} Autor/a</h1>

@if(count ($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
@foreach ($errors->all() as $errors)
<li>{{$errors}}</li>
@endforeach

</ul>
</div>



@endif

<div class="form-group">
<label for="Nombre"> Nombre </label>
<input class="form-control" type="text" name="Nombre" value="{{isset($autores->nombre)?$autores->nombre:old('nombre')}}"id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Apellido"> Apellido </label>
<input type="text" class="form-control" name="Apellido" value="{{isset($autores->apellido)?$autores->apellido:old('apellido')}}" id="Apellido">
<br>
</div>

<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control"  name="Direccion" value="{{isset ($autores->direccion)?$autores->direccion:old('direccion')}}" id="Direccion">
<br>
</div>

<div class="form-group">
<label for="Telefono"> Telefono </label>
<input type="text" class="form-control" name="Telefono" value="{{isset ($autores->telefono)?$autores->telefono:old('telefono')}}" id="Telefono">
<br>
</div>

<div class="form-group">
<label for="Email"> Email </label>
<input type="text" class="form-control"  name="Email" value="{{isset ($autores->email)?$autores->email:old('email')}}" id="Email">
<br>
</div>

<div class="form-group">
<label for="Ciudad"> Ciudad </label>
<input type="text" class="form-control"  name="Ciudad" value="{{isset ($autores->ciudad)?$autores->ciudad:old('ciudad')}}" id="Ciudad">
<br>
</div>


<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a  class = "btn btn-primary" href="{{url('autores/')}}"> Volver </a>