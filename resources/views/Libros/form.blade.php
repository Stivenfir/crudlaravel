<h1>{{$modo}} Libro</h1>

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
<label for="titulo"> Título </label>
<input class="form-control" type="text" name="titulo" value="{{isset ($libros->titulo)?$libros->titulo:old('titulo')}}" id="titulo">
<br>
</div>

<div class="form-group">
<label for="autor"> Autor </label>
<input type="text" class="form-control" name="autor" value="{{isset ($libros->autor)?$libros->autor:old('autor')}}" id="autor">
<br>
</div>

<div class="form-group">
<label for="anio_publicacion"> Año de Publicación </label>
<input type="number" class="form-control" name="anio_publicacion"  value="{{isset ($libros->anio_publicacion)?$libros->anio_publicacion:old('anio_publicacion')}}" id="anio_publicacion">
<br>
</div>

<div class="form-group">
<label for="genero"> Género </label>
<input type="text" class="form-control"  name="genero" value="{{isset ($libros->genero)?$libros->genero:old('genero')}}" id="genero">
<br>
</div>


<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a  class = "btn btn-primary" href="{{url('libros/')}}"> Volver </a>